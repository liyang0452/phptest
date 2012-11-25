<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/QualityCenterService.php';
require_once __DIR__ . '/../objects/QualityCenterCheckInParameters.php';
require_once __DIR__ . '/../objects/QualityCenterCheckOutParameters.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterVersionService extends QualityCenterService
{
	/**
	 * @param string $entityType
	 * @param int $entityId
	 * @return QualityCenterCheckOutParameters
	 */
	public function checkOut($entityType, $entityId)
	{
		$parameters = new QualityCenterCheckOutParameters();
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/check-out';
		$xml = $this->connection->post($action, $parameters->toXml()->saveXML(), $this->domain, $this->project, $entityType, $entityId);
		return new QualityCenterCheckOutParameters(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param string $entityType
	 * @param int $entityId
	 * @return QualityCenterCheckOutParameters
	 */
	public function undoCheckOut($entityType, $entityId)
	{
		$parameters = new QualityCenterCheckOutParameters();
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/undo-check-out';
		$xml = $this->connection->post($action, $parameters->toXml()->saveXML(), $this->domain, $this->project, $entityType, $entityId);
		return new QualityCenterCheckOutParameters(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param string $entityType
	 * @param int $entityId
	 * @return QualityCenterCheckInParameters
	 */
	public function checkIn($entityType, $entityId, $comment)
	{
		$parameters = new QualityCenterCheckInParameters();
		$parameters->setComment($comment);
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/check-in';
		$xml = $this->connection->post($action, $parameters->toXml()->saveXML(), $this->domain, $this->project, $entityType, $entityId);
		return new QualityCenterCheckInParameters(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param string $entityType
	 * @param int $entityId
	 * @return QualityCenterCheckOutParameters
	 */
	public function get($entityType, $entityId)
	{
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/check-out';
		$xml = $this->connection->get($action, $this->domain, $this->project, $entityType, $entityId);
		return new QualityCenterCheckOutParameters(new SimpleXMLElement($xml));
	}
}
