<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTestCriterion.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestCriterionFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestCriterionService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-criterion';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTestCriterion($xml);
	}
	
	/**
	 * @param QualityCenterTestCriterion $testCriterion
	 * @return QualityCenterTestCriterion
	 */
	public function create(QualityCenterTestCriterion $testCriterion)
	{
		return $this->createEntity($testCriterion);
	}
	
	/**
	 * @param int $testCriterionId
	 */
	public function delete($testCriterionId)
	{
		$this->deleteEntity($testCriterionId);
	}
	
	/**
	 * @param int $testCriterionId
	 * @return QualityCenterTestCriterion
	 */
	public function get($testCriterionId)
	{
		return $this->getEntity($testCriterionId);
	}
	
	/**
	 * @param QualityCenterTestCriterionFilter $filter
	 * @return array<QualityCenterTestCriterion>
	 */
	public function search(QualityCenterTestCriterionFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $testCriterionId
	 * @param QualityCenterTestCriterion $testCriterion
	 * @return QualityCenterTestCriterion
	 */
	public function update($testCriterionId, QualityCenterTestCriterion $testCriterion)
	{
		return $this->updateEntity($testCriterionId, $testCriterion);
	}
}
