<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/auth/QualityCenterSession.php";

if(!isset($_POST['entityType']))
{
	echo '[]';
	exit;
}

$entityType = $_POST['entityType'];
$entityName = ucfirst($entityType);

require_once __DIR__ . "/../../generator/lib/services/entities/QualityCenter{$entityName}Service.php";

$serviceClass = "QualityCenter{$entityName}Service";
$filterClass = "QualityCenter{$entityName}Filter";
$objectClass = "QualityCenter{$entityName}";

$operation = 'read';
if(isset($_POST['operation']))
	$operation = $_POST['operation'];

QualityCenterSession::init();
$domain = QualityCenterSession::getDomain();
$project = QualityCenterSession::getProject();

$connection = QualityCenterConnection::getInstance();
$service = new $serviceClass($connection, $domain, $project);
/* @var $service QualityCenterEntityService */

$entities = array();
try{
	switch($operation)
	{
		case 'update':
			foreach($_POST['models'] as $entityRequest)
			{
				$entityId = $entityRequest['id'];
				if(!isset($_POST['updates'][$entityId]))
					continue;
					
				$updateRequest = $_POST['updates'][$entityId];
				$entity = new $objectClass($updateRequest);
				$entities[] = $service->update($entityId, $entity);
			}
			break;
			
		case 'destroy':
			foreach($_POST['models'] as $entityRequest)
				$entities[] = $service->delete($entityRequest['id']);
			break;
			
		case 'read':
		default:
			$filter = new $filterClass();
			/* @var $filter QualityCenterFilter */
			
			if(isset($_POST['filter']))
			{
				
			}
			
			$pager = null;
			if(isset($_POST['pageSize']))
			{
				$pager = new QualityCenterPager();
				$pager->setPageSize($_POST['pageSize']);
				
				if(isset($_POST['page']))
					$pager->setPageIndex($_POST['page'] - 1);
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

echo '[';
foreach($entities as $index => $entity)
{
	if($index)
		echo ',';
		
	/* @var $entity QualityCenterEntity */
	echo json_encode($entity->toArray());
}
echo ']';
