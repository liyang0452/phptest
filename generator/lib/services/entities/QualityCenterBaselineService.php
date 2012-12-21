<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBaseline.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBaselineFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBaselineService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'baseline';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBaseline($xml);
	}
	
	/**
	 * @param QualityCenterBaseline $baseline
	 * @return QualityCenterBaseline
	 */
	public function create(QualityCenterBaseline $baseline)
	{
		return $this->createEntity($baseline);
	}
	
	/**
	 * @param int $baselineId
	 */
	public function delete($baselineId)
	{
		$this->deleteEntity($baselineId);
	}
	
	/**
	 * @param int $baselineId
	 * @return QualityCenterBaseline
	 */
	public function get($baselineId)
	{
		return $this->getEntity($baselineId);
	}
	
	/**
	 * @param QualityCenterBaselineFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterBaseline>
	 */
	public function search(QualityCenterBaselineFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $baselineId
	 * @param QualityCenterBaseline $baseline
	 * @return QualityCenterBaseline
	 */
	public function update($baselineId, QualityCenterBaseline $baseline)
	{
		return $this->updateEntity($baselineId, $baseline);
	}
}
