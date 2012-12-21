<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTestParameter.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestParameterFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestParameterService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-parameter';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTestParameter($xml);
	}
	
	/**
	 * @param QualityCenterTestParameter $testParameter
	 * @return QualityCenterTestParameter
	 */
	public function create(QualityCenterTestParameter $testParameter)
	{
		return $this->createEntity($testParameter);
	}
	
	/**
	 * @param int $testParameterId
	 */
	public function delete($testParameterId)
	{
		$this->deleteEntity($testParameterId);
	}
	
	/**
	 * @param int $testParameterId
	 * @return QualityCenterTestParameter
	 */
	public function get($testParameterId)
	{
		return $this->getEntity($testParameterId);
	}
	
	/**
	 * @param QualityCenterTestParameterFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterTestParameter>
	 */
	public function search(QualityCenterTestParameterFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $testParameterId
	 * @param QualityCenterTestParameter $testParameter
	 * @return QualityCenterTestParameter
	 */
	public function update($testParameterId, QualityCenterTestParameter $testParameter)
	{
		return $this->updateEntity($testParameterId, $testParameter);
	}
}
