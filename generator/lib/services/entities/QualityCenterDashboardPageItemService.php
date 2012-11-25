<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterDashboardPageItem.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterDashboardPageItemFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterDashboardPageItemService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'dashboard-page-item';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterDashboardPageItem($xml);
	}
	
	/**
	 * @param QualityCenterDashboardPageItem $dashboardPageItem
	 * @return QualityCenterDashboardPageItem
	 */
	public function create(QualityCenterDashboardPageItem $dashboardPageItem)
	{
		return $this->createEntity($dashboardPageItem);
	}
	
	/**
	 * @param int $dashboardPageItemId
	 */
	public function delete($dashboardPageItemId)
	{
		$this->deleteEntity($dashboardPageItemId);
	}
	
	/**
	 * @param int $dashboardPageItemId
	 * @return QualityCenterDashboardPageItem
	 */
	public function get($dashboardPageItemId)
	{
		return $this->getEntity($dashboardPageItemId);
	}
	
	/**
	 * @param QualityCenterDashboardPageItemFilter $filter
	 * @return array<QualityCenterDashboardPageItem>
	 */
	public function search(QualityCenterDashboardPageItemFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $dashboardPageItemId
	 * @param QualityCenterDashboardPageItem $dashboardPageItem
	 * @return QualityCenterDashboardPageItem
	 */
	public function update($dashboardPageItemId, QualityCenterDashboardPageItem $dashboardPageItem)
	{
		return $this->updateEntity($dashboardPageItemId, $dashboardPageItem);
	}
}
