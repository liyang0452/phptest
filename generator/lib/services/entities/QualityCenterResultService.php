<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterResult.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterResultFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterResultService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'result';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterResult($xml);
	}
	
	/**
	 * @param QualityCenterResult $result
	 * @return QualityCenterResult
	 */
	public function create(QualityCenterResult $result)
	{
		return $this->createEntity($result);
	}
	
	/**
	 * @param int $resultId
	 */
	public function delete($resultId)
	{
		$this->deleteEntity($resultId);
	}
	
	/**
	 * @param int $resultId
	 * @return QualityCenterResult
	 */
	public function get($resultId)
	{
		return $this->getEntity($resultId);
	}
	
	/**
	 * @param QualityCenterResultFilter $filter
	 * @return array<QualityCenterResult>
	 */
	public function search(QualityCenterResultFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $resultId
	 * @param QualityCenterResult $result
	 * @return QualityCenterResult
	 */
	public function update($resultId, QualityCenterResult $result)
	{
		return $this->updateEntity($resultId, $result);
	}
}
