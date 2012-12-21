<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRunStep.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterRunStepFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterRunStepService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'run-step';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRunStep($xml);
	}
	
	/**
	 * @param QualityCenterRunStep $runStep
	 * @return QualityCenterRunStep
	 */
	public function create(QualityCenterRunStep $runStep)
	{
		return $this->createEntity($runStep);
	}
	
	/**
	 * @param int $runStepId
	 */
	public function delete($runStepId)
	{
		$this->deleteEntity($runStepId);
	}
	
	/**
	 * @param int $runStepId
	 * @return QualityCenterRunStep
	 */
	public function get($runStepId)
	{
		return $this->getEntity($runStepId);
	}
	
	/**
	 * @param QualityCenterRunStepFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterRunStep>
	 */
	public function search(QualityCenterRunStepFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $runStepId
	 * @param QualityCenterRunStep $runStep
	 * @return QualityCenterRunStep
	 */
	public function update($runStepId, QualityCenterRunStep $runStep)
	{
		return $this->updateEntity($runStepId, $runStep);
	}
}
