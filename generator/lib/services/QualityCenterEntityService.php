<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/QualityCenterService.php';

/**
 * @package External
 * @subpackage qc.services
 */
abstract class QualityCenterEntityService extends QualityCenterService
{
	/**
	 * @return string
	 */
	abstract public function getQualityCenterEntityType();
	
	/**
	 * @param SimpleXMLElement $xml
	 * @return QualityCenterEntity
	 */
	abstract protected function xmlToObject(SimpleXMLElement $xml);
	
	/**
	 * @param SimpleXMLElement $xml
	 * @return array<QualityCenterEntity>
	 */
	protected function xmlToObjects(SimpleXMLElement $xml)
	{
		$array = array();
		foreach($xml as $entityXml)
			$array[] = $this->xmlToObject($entityXml);
			
		return $array;
	}
	
	/**
	 * @param QualityCenterEntity $entity
	 * @return QualityCenterEntity
	 */
	protected function createEntity(QualityCenterEntity $entity)
	{
		$action = 'rest/domains/%s/projects/%s/' . $this->getQualityCenterEntityType() . 's';
		$xml = $this->connection->setExpectedHttpCode(201);
		$xml = $this->connection->post($action, $entity->toXml()->saveXML(), $this->domain, $this->project);
		return $this->xmlToObject(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param int $entityId
	 */
	protected function deleteEntity($entityId)
	{
		$action = 'rest/domains/%s/projects/%s/' . $this->getQualityCenterEntityType() . 's/%d';
		$this->connection->delete($action, $this->domain, $this->project, $entityId);
	}
	
	/**
	 * @param int $entityId
	 * @return QualityCenterEntity
	 */
	protected function getEntity($entityId)
	{
		$action = 'rest/domains/%s/projects/%s/' . $this->getQualityCenterEntityType() . 's/%d';
		$xml = $this->connection->get($action, $this->domain, $this->project, $entityId);
		return $this->xmlToObject(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param QualityCenterFilter $filter
	 * @return array<QualityCenterEntity>
	 */
	protected function searchEntities(QualityCenterFilter $filter)
	{
		$action = 'rest/domains/%s/projects/%s/' . $this->getQualityCenterEntityType() . 's?query={%s}';
		$xml = $this->connection->get($action, $this->domain, $this->project, $filter);
		return $this->xmlToObjects(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param int $entityId
	 * @param QualityCenterEntity $entity
	 * @return QualityCenterEntity
	 */
	protected function updateEntity($entityId, QualityCenterEntity $entity)
	{
		$action = 'rest/domains/%s/projects/%s/' . $this->getQualityCenterEntityType() . 's/%d';
		$xml = $this->connection->put($action, $entity->toXml()->saveXML(), $this->domain, $this->project, $entityId);
		return $this->xmlToObject(new SimpleXMLElement($xml));
	}
}
