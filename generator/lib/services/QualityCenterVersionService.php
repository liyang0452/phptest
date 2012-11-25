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
	 * @param QualityCenterEntity $entityType
	 * @return QualityCenterEntity
	 */
	public function checkOut(QualityCenterEntity $entity)
	{
		$parameters = new QualityCenterCheckOutParameters();
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/check-out';
		$xml = $this->connection->post($action, $parameters->toXml()->saveXML(), $this->domain, $this->project, $entity->getQualityCenterEntityType(), $entity->getId());
		$class = get_class($entity);
		$lockedObject = new $class(new SimpleXMLElement($xml));
		/* @var $lockedObject QualityCenterEntity */
		return ($entity->getId() == $lockedObject->getId()); 
	}
	
	/**
	 * @param QualityCenterEntity $entityType
	 * @return QualityCenterEntity
	 */
	public function undoCheckOut(QualityCenterEntity $entity)
	{
		$parameters = new QualityCenterCheckOutParameters();
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/undo-check-out';
		$xml = $this->connection->post($action, $parameters->toXml()->saveXML(), $this->domain, $this->project, $entity->getQualityCenterEntityType(), $entity->getId());
		$class = get_class($entity);
		$lockedObject = new $class(new SimpleXMLElement($xml));
		/* @var $lockedObject QualityCenterEntity */
		return ($entity->getId() == $lockedObject->getId()); 
	}
	
	/**
	 * @param QualityCenterEntity $entityType
	 * @return QualityCenterEntity
	 */
	public function checkIn(QualityCenterEntity $entity, $comment)
	{
		$parameters = new QualityCenterCheckInParameters();
		$parameters->setComment($comment);
		
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/check-in';
		$xml = $this->connection->post($action, $parameters->toXml()->saveXML(), $this->domain, $this->project, $entity->getQualityCenterEntityType(), $entity->getId());
		$class = get_class($entity);
		$lockedObject = new $class(new SimpleXMLElement($xml));
		/* @var $lockedObject QualityCenterEntity */
		return ($entity->getId() == $lockedObject->getId()); 
	}
	
	/**
	 * @param QualityCenterEntity $entityType
	 * @return QualityCenterCheckOutParameters
	 */
	public function get(QualityCenterEntity $entity)
	{
		$action = 'rest/domains/%s/projects/%s/%ss/%d/versions/check-out';
		$xml = $this->connection->get($action, $this->domain, $this->project, $entity->getQualityCenterEntityType(), $entity->getId());
		return new QualityCenterCheckOutParameters(new SimpleXMLElement($xml));
	}
}
