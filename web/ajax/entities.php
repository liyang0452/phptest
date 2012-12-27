<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/auth/QualityCenterSession.php";

if(!isset($_REQUEST['entityType']))
{
	echo '[]';
	exit;
}

$entityType = $_REQUEST['entityType'];
$entityName = ucfirst($entityType);

require_once __DIR__ . "/../../generator/lib/services/entities/QualityCenter{$entityName}Service.php";

$serviceClass = "QualityCenter{$entityName}Service";
$filterClass = "QualityCenter{$entityName}Filter";
$objectClass = "QualityCenter{$entityName}";

$operation = 'read';
if(isset($_REQUEST['operation']))
	$operation = $_REQUEST['operation'];

QualityCenterSession::init();
$domain = QualityCenterSession::getDomain();
$project = QualityCenterSession::getProject();

$connection = QualityCenterConnection::getInstance();
$service = new $serviceClass($connection, $domain, $project);
/* @var $service QualityCenterEntityService */

$entities = array();
$pager = null;
try{
	switch($operation)
	{
		case 'update':
			foreach($_REQUEST['models'] as $entityRequest)
			{
				$entityId = $entityRequest['id'];
				if(!isset($_REQUEST['updates'][$entityId]))
					continue;
					
				$updateRequest = $_REQUEST['updates'][$entityId];
				$entity = new $objectClass($updateRequest);
				$entities[] = $service->update($entityId, $entity);
			}
			break;
			
		case 'destroy':
			foreach($_REQUEST['models'] as $entityRequest)
				$entities[] = $service->delete($entityRequest['id']);
			break;
			
		case 'read':
		default:
			$filter = new $filterClass();
			/* @var $filter QualityCenterFilter */
			
			if(isset($_REQUEST['filter']) && isset($_REQUEST['filter']['filters']) && is_array($_REQUEST['filter']['filters']) && count($_REQUEST['filter']['filters']))
			{
				foreach($_REQUEST['filter']['filters'] as $filterField)
				{
					if($filterField['operator'] != 'eq')
						continue; // TODO support other comparison types
						
					$value = $filterField['value'];
					$field = $filterField['field'];
					$setter = "set{$field}";
					if(is_callable(array($filter, $setter)))
						$filter->$setter($value);
				}
			}
			
			if(isset($_REQUEST['pageSize']))
			{
				$pager = new QualityCenterPager();
				$pager->setPageSize($_REQUEST['pageSize']);
				
				if(isset($_REQUEST['page']))
					$pager->setPageIndex($_REQUEST['page'] - 1);
			}
			
			$entities = $service->search($filter, $pager);
			break;
	}
}
catch(QualityCenterServerException $e){
	throw new QualityCenterWebException($e->getMessage(), $e->getCode());
}
catch(QualityCenterLoginException $e){
	throw new QualityCenterSessionException('Session Expired', QualityCenterSessionException::NO_SESSION);
}

$entitiesArray = array();
foreach($entities as $entity)
	$entitiesArray[] = $entity->toArray();
	
if($pager)
{
	$entitiesObject = new stdClass();
	$entitiesObject->items = $entitiesArray;
	$entitiesObject->totalCount = $pager->getTotalResults();
	echo json_encode($entitiesObject);
}
else 
{
	echo json_encode($entitiesArray);
}
