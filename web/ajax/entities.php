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
$objectClass = "QualityCenter{$entityName}Filter";

$operation = 'read';
if(isset($_POST['operation']))
	$operation = $_POST['operation'];
	
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

QualityCenterSession::init();
$domain = QualityCenterSession::getDomain();
$project = QualityCenterSession::getProject();

$connection = QualityCenterConnection::getInstance();
$service = new $serviceClass($connection, $domain, $project);
/* @var $service QualityCenterEntityService */

$entities = $service->search($filter, $pager);
echo '[';
foreach($entities as $index => $entity)
{
	if($index)
		echo ',';
		
	/* @var $entity QualityCenterEntity */
	echo json_encode($entity->toArray());
}
echo ']';
