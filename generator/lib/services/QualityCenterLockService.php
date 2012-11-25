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
	 * @param QualityCenterEntity $entityType
	 * @return QualityCenterEntity
	 */
	public function lock(QualityCenterEntity $entity)
	{
		$lockStatus = new QualityCenterLockStatus();
		$lockStatus->lock($this->connection->getUsername());
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/lock';
		$xml = $this->connection->post($action, $lockStatus->toXml()->saveXML(), $this->domain, $this->project, $entity->getQualityCenterEntityType(), $entity->getId());
		$class = get_class($entity);
		$lockedObject = new $class(new SimpleXMLElement($xml));
		/* @var $lockedObject QualityCenterEntity */
		return ($entity->getId() == $lockedObject->getId()); 
	}
	
	/**
	 * @param QualityCenterEntity $entityType
	 * @return QualityCenterEntity
	 */
	public function unlock(QualityCenterEntity $entity)
	{
		$lockStatus = new QualityCenterLockStatus();
		$lockStatus->unlock();
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/lock';
		$xml = $this->connection->post($action, $lockStatus->toXml()->saveXML(), $this->domain, $this->project, $entity->getQualityCenterEntityType(), $entity->getId());
		$class = get_class($entity);
		$lockedObject = new $class(new SimpleXMLElement($xml));
		/* @var $lockedObject QualityCenterEntity */
		return ($entity->getId() == $lockedObject->getId());
	}
	
	/**
	 * @param QualityCenterEntity $entityType
	 * @return QualityCenterLockStatus
	 */
	public function get(QualityCenterEntity $entity)
	{
		$action = 'rest/domains/%s/projects/%s/%ss/%d/lock';
		$xml = $this->connection->get($action, $this->domain, $this->project, $entity->getQualityCenterEntityType(), $entity->getId());
		return new QualityCenterLockStatus(new SimpleXMLElement($xml));
	}
}
