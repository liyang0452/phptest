<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterComponentStep.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterComponentStepFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterComponentStepService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'component-step';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterComponentStep($xml);
	}
	
	/**
	 * @param QualityCenterComponentStep $componentStep
	 * @return QualityCenterComponentStep
	 */
	public function create(QualityCenterComponentStep $componentStep)
	{
		return $this->createEntity($componentStep);
	}
	
	/**
	 * @param int $componentStepId
	 */
	public function delete($componentStepId)
	{
		$this->deleteEntity($componentStepId);
	}
	
	/**
	 * @param int $componentStepId
	 * @return QualityCenterComponentStep
	 */
	public function get($componentStepId)
	{
		return $this->getEntity($componentStepId);
	}
	
	/**
	 * @param QualityCenterComponentStepFilter $filter
	 * @return array<QualityCenterComponentStep>
	 */
	public function search(QualityCenterComponentStepFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $componentStepId
	 * @param QualityCenterComponentStep $componentStep
	 * @return QualityCenterComponentStep
	 */
	public function update($componentStepId, QualityCenterComponentStep $componentStep)
	{
		return $this->updateEntity($componentStepId, $componentStep);
	}
}
