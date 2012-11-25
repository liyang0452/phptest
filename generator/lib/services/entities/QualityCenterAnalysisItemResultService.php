<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAnalysisItemResult.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAnalysisItemResultFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAnalysisItemResultService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'analysis-item-result';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAnalysisItemResult($xml);
	}
	
	/**
	 * @param QualityCenterAnalysisItemResult $analysisItemResult
	 * @return QualityCenterAnalysisItemResult
	 */
	public function create(QualityCenterAnalysisItemResult $analysisItemResult)
	{
		return $this->createEntity($analysisItemResult);
	}
	
	/**
	 * @param int $analysisItemResultId
	 */
	public function delete($analysisItemResultId)
	{
		$this->deleteEntity($analysisItemResultId);
	}
	
	/**
	 * @param int $analysisItemResultId
	 * @return QualityCenterAnalysisItemResult
	 */
	public function get($analysisItemResultId)
	{
		return $this->getEntity($analysisItemResultId);
	}
	
	/**
	 * @param QualityCenterAnalysisItemResultFilter $filter
	 * @return array<QualityCenterAnalysisItemResult>
	 */
	public function search(QualityCenterAnalysisItemResultFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $analysisItemResultId
	 * @param QualityCenterAnalysisItemResult $analysisItemResult
	 * @return QualityCenterAnalysisItemResult
	 */
	public function update($analysisItemResultId, QualityCenterAnalysisItemResult $analysisItemResult)
	{
		return $this->updateEntity($analysisItemResultId, $analysisItemResult);
	}
}
