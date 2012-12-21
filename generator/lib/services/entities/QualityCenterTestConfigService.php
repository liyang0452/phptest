<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTestConfig.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestConfigFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestConfigService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-config';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTestConfig($xml);
	}
	
	/**
	 * @param QualityCenterTestConfig $testConfig
	 * @return QualityCenterTestConfig
	 */
	public function create(QualityCenterTestConfig $testConfig)
	{
		return $this->createEntity($testConfig);
	}
	
	/**
	 * @param int $testConfigId
	 */
	public function delete($testConfigId)
	{
		$this->deleteEntity($testConfigId);
	}
	
	/**
	 * @param int $testConfigId
	 * @return QualityCenterTestConfig
	 */
	public function get($testConfigId)
	{
		return $this->getEntity($testConfigId);
	}
	
	/**
	 * @param QualityCenterTestConfigFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterTestConfig>
	 */
	public function search(QualityCenterTestConfigFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $testConfigId
	 * @param QualityCenterTestConfig $testConfig
	 * @return QualityCenterTestConfig
	 */
	public function update($testConfigId, QualityCenterTestConfig $testConfig)
	{
		return $this->updateEntity($testConfigId, $testConfig);
	}
}
