<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterKpiMsi.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterKpiMsiFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterKpiMsiService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'kpiMsi';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterKpiMsi($xml);
	}
	
	/**
	 * @param QualityCenterKpiMsi $kpiMsi
	 * @return QualityCenterKpiMsi
	 */
	public function create(QualityCenterKpiMsi $kpiMsi)
	{
		return $this->createEntity($kpiMsi);
	}
	
	/**
	 * @param int $kpiMsiId
	 */
	public function delete($kpiMsiId)
	{
		$this->deleteEntity($kpiMsiId);
	}
	
	/**
	 * @param int $kpiMsiId
	 * @return QualityCenterKpiMsi
	 */
	public function get($kpiMsiId)
	{
		return $this->getEntity($kpiMsiId);
	}
	
	/**
	 * @param QualityCenterKpiMsiFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterKpiMsi>
	 */
	public function search(QualityCenterKpiMsiFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $kpiMsiId
	 * @param QualityCenterKpiMsi $kpiMsi
	 * @return QualityCenterKpiMsi
	 */
	public function update($kpiMsiId, QualityCenterKpiMsi $kpiMsi)
	{
		return $this->updateEntity($kpiMsiId, $kpiMsi);
	}
}
