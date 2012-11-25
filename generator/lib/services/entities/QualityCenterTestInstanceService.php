<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTestInstance.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestInstanceFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestInstanceService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-instance';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTestInstance($xml);
	}
	
	/**
	 * @param QualityCenterTestInstance $testInstance
	 * @return QualityCenterTestInstance
	 */
	public function create(QualityCenterTestInstance $testInstance)
	{
		return $this->createEntity($testInstance);
	}
	
	/**
	 * @param int $testInstanceId
	 */
	public function delete($testInstanceId)
	{
		$this->deleteEntity($testInstanceId);
	}
	
	/**
	 * @param int $testInstanceId
	 * @return QualityCenterTestInstance
	 */
	public function get($testInstanceId)
	{
		return $this->getEntity($testInstanceId);
	}
	
	/**
	 * @param QualityCenterTestInstanceFilter $filter
	 * @return array<QualityCenterTestInstance>
	 */
	public function search(QualityCenterTestInstanceFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $testInstanceId
	 * @param QualityCenterTestInstance $testInstance
	 * @return QualityCenterTestInstance
	 */
	public function update($testInstanceId, QualityCenterTestInstance $testInstance)
	{
		return $this->updateEntity($testInstanceId, $testInstance);
	}
}
