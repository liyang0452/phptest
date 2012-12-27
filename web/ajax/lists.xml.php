<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/auth/QualityCenterSession.php";

QualityCenterSession::init();

header("Content-Type: application/xml");

$filename = __DIR__ . "/../../generator/xml/lists.xml";
if(file_exists($filename))
{
	readfile($filename);
}
else
{
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><Lists />';
}
