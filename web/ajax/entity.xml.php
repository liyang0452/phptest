<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/auth/QualityCenterSession.php";

QualityCenterSession::init();

header("Content-Type: application/xml");

$entity = isset($_GET['entity']) ? $_GET['entity'] : '';
$filename = __DIR__ . "/../../generator/xml/entities/$entity.fields.xml";
if(file_exists($filename))
{
	readfile($filename);
}
else
{
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Fields />';
}