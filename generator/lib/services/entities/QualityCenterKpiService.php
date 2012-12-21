<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterKpi.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterKpiFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterKpiService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'kpi';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterKpi($xml);
	}
	
	/**
	 * @param QualityCenterKpi $kpi
	 * @return QualityCenterKpi
	 */
	public function create(QualityCenterKpi $kpi)
	{
		return $this->createEntity($kpi);
	}
	
	/**
	 * @param int $kpiId
	 */
	public function delete($kpiId)
	{
		$this->deleteEntity($kpiId);
	}
	
	/**
	 * @param int $kpiId
	 * @return QualityCenterKpi
	 */
	public function get($kpiId)
	{
		return $this->getEntity($kpiId);
	}
	
	/**
	 * @param QualityCenterKpiFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterKpi>
	 */
	public function search(QualityCenterKpiFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $kpiId
	 * @param QualityCenterKpi $kpi
	 * @return QualityCenterKpi
	 */
	public function update($kpiId, QualityCenterKpi $kpi)
	{
		return $this->updateEntity($kpiId, $kpi);
	}
}
