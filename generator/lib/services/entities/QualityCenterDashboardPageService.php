<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterDashboardPage.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterDashboardPageFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterDashboardPageService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'dashboard-page';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterDashboardPage($xml);
	}
	
	/**
	 * @param QualityCenterDashboardPage $dashboardPage
	 * @return QualityCenterDashboardPage
	 */
	public function create(QualityCenterDashboardPage $dashboardPage)
	{
		return $this->createEntity($dashboardPage);
	}
	
	/**
	 * @param int $dashboardPageId
	 */
	public function delete($dashboardPageId)
	{
		$this->deleteEntity($dashboardPageId);
	}
	
	/**
	 * @param int $dashboardPageId
	 * @return QualityCenterDashboardPage
	 */
	public function get($dashboardPageId)
	{
		return $this->getEntity($dashboardPageId);
	}
	
	/**
	 * @param QualityCenterDashboardPageFilter $filter
	 * @return array<QualityCenterDashboardPage>
	 */
	public function search(QualityCenterDashboardPageFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $dashboardPageId
	 * @param QualityCenterDashboardPage $dashboardPage
	 * @return QualityCenterDashboardPage
	 */
	public function update($dashboardPageId, QualityCenterDashboardPage $dashboardPage)
	{
		return $this->updateEntity($dashboardPageId, $dashboardPage);
	}
}
