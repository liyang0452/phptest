<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/auth/QualityCenterSession.php";
require_once __DIR__ . '/../../generator/lib/services/QualityCenterUserService.php';

$operation = 'read';
if(isset($_POST['operation']))
	$operation = $_POST['operation'];
	
$filter = new QualityCenterUserFilter();
if(isset($_POST['filter']))
{
	
}

QualityCenterSession::init();
$domain = QualityCenterSession::getDomain();
$project = QualityCenterSession::getProject();

$connection = QualityCenterConnection::getInstance();
$userService = new QualityCenterUserService($connection, $domain, $project);
$users = $userService->search($filter);
echo '[';
foreach($users as $index => $user)
{
	if($index)
		echo ',';
		
	/* @var $user QualityCenterUser */
	echo json_encode($user->toArray());
}
echo ']';