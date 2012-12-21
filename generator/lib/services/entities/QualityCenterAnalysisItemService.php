<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAnalysisItem.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAnalysisItemFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAnalysisItemService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'analysis-item';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAnalysisItem($xml);
	}
	
	/**
	 * @param QualityCenterAnalysisItem $analysisItem
	 * @return QualityCenterAnalysisItem
	 */
	public function create(QualityCenterAnalysisItem $analysisItem)
	{
		return $this->createEntity($analysisItem);
	}
	
	/**
	 * @param int $analysisItemId
	 */
	public function delete($analysisItemId)
	{
		$this->deleteEntity($analysisItemId);
	}
	
	/**
	 * @param int $analysisItemId
	 * @return QualityCenterAnalysisItem
	 */
	public function get($analysisItemId)
	{
		return $this->getEntity($analysisItemId);
	}
	
	/**
	 * @param QualityCenterAnalysisItemFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterAnalysisItem>
	 */
	public function search(QualityCenterAnalysisItemFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $analysisItemId
	 * @param QualityCenterAnalysisItem $analysisItem
	 * @return QualityCenterAnalysisItem
	 */
	public function update($analysisItemId, QualityCenterAnalysisItem $analysisItem)
	{
		return $this->updateEntity($analysisItemId, $analysisItem);
	}
}
