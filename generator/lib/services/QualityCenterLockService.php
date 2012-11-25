<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/QualityCenterService.php';
require_once __DIR__ . '/../objects/QualityCenterLockStatus.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterLockService extends QualityCenterService
{
	/**
	 * @param string $entityType
	 * @param int $entityId
	 * @return QualityCenterLockStatus
	 */
	public function lock($entityType, $entityId)
	{
		$lockStatus = new QualityCenterLockStatus();
		$lockStatus->lock($this->connection->getUsername());
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/lock';
		$xml = $this->connection->post($action, $lockStatus->toXml()->saveXML(), $this->domain, $this->project, $entityType, $entityId);
		return new QualityCenterLockStatus(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param string $entityType
	 * @param int $entityId
	 * @return QualityCenterLockStatus
	 */
	public function unlock($entityType, $entityId)
	{
		$lockStatus = new QualityCenterLockStatus();
		$lockStatus->unlock();
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/lock';
		$xml = $this->connection->post($action, $lockStatus->toXml()->saveXML(), $this->domain, $this->project, $entityType, $entityId);
		return new QualityCenterLockStatus(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param string $entityType
	 * @param int $entityId
	 * @return QualityCenterLockStatus
	 */
	public function get($entityType, $entityId)
	{
		$action = 'rest/domains/%s/projects/%s/%ss/%d/lock';
		$xml = $this->connection->get($action, $this->domain, $this->project, $entityType, $entityId);
		return new QualityCenterLockStatus(new SimpleXMLElement($xml));
	}
}
