<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/auth/QualityCenterSession.php";

QualityCenterSession::init();

header("Content-Type: application/xml");

$listId = isset($_GET['listId']) ? $_GET['listId'] : '';
$filename = __DIR__ . "/../../generator/xml/lists.xml";
if(file_exists($filename))
{
	$xml = new SimpleXMLElement($filename, null, true);
	$lists = $xml->xpath('//List[Id="' . $listId . '"]');
	if(count($lists))
	{
		$list = reset($lists);
		/* @var $list SimpleXMLElement */
		echo $list->asXML();
		exit;
	}
}

echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?><List />';
