<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTestSet.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestSetFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestSetService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-set';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTestSet($xml);
	}
	
	/**
	 * @param QualityCenterTestSet $testSet
	 * @return QualityCenterTestSet
	 */
	public function create(QualityCenterTestSet $testSet)
	{
		return $this->createEntity($testSet);
	}
	
	/**
	 * @param int $testSetId
	 */
	public function delete($testSetId)
	{
		$this->deleteEntity($testSetId);
	}
	
	/**
	 * @param int $testSetId
	 * @return QualityCenterTestSet
	 */
	public function get($testSetId)
	{
		return $this->getEntity($testSetId);
	}
	
	/**
	 * @param QualityCenterTestSetFilter $filter
	 * @return array<QualityCenterTestSet>
	 */
	public function search(QualityCenterTestSetFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $testSetId
	 * @param QualityCenterTestSet $testSet
	 * @return QualityCenterTestSet
	 */
	public function update($testSetId, QualityCenterTestSet $testSet)
	{
		return $this->updateEntity($testSetId, $testSet);
	}
}
