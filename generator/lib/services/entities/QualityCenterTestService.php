<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTest.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTest($xml);
	}
	
	/**
	 * @param QualityCenterTest $test
	 * @return QualityCenterTest
	 */
	public function create(QualityCenterTest $test)
	{
		return $this->createEntity($test);
	}
	
	/**
	 * @param int $testId
	 */
	public function delete($testId)
	{
		$this->deleteEntity($testId);
	}
	
	/**
	 * @param int $testId
	 * @return QualityCenterTest
	 */
	public function get($testId)
	{
		return $this->getEntity($testId);
	}
	
	/**
	 * @param QualityCenterTestFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterTest>
	 */
	public function search(QualityCenterTestFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $testId
	 * @param QualityCenterTest $test
	 * @return QualityCenterTest
	 */
	public function update($testId, QualityCenterTest $test)
	{
		return $this->updateEntity($testId, $test);
	}
}
