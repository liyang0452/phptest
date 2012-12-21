<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterStepParameter.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterStepParameterFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterStepParameterService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'step-parameter';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterStepParameter($xml);
	}
	
	/**
	 * @param QualityCenterStepParameter $stepParameter
	 * @return QualityCenterStepParameter
	 */
	public function create(QualityCenterStepParameter $stepParameter)
	{
		return $this->createEntity($stepParameter);
	}
	
	/**
	 * @param int $stepParameterId
	 */
	public function delete($stepParameterId)
	{
		$this->deleteEntity($stepParameterId);
	}
	
	/**
	 * @param int $stepParameterId
	 * @return QualityCenterStepParameter
	 */
	public function get($stepParameterId)
	{
		return $this->getEntity($stepParameterId);
	}
	
	/**
	 * @param QualityCenterStepParameterFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterStepParameter>
	 */
	public function search(QualityCenterStepParameterFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $stepParameterId
	 * @param QualityCenterStepParameter $stepParameter
	 * @return QualityCenterStepParameter
	 */
	public function update($stepParameterId, QualityCenterStepParameter $stepParameter)
	{
		return $this->updateEntity($stepParameterId, $stepParameter);
	}
}
