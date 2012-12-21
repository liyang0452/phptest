<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterDashboardFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterDashboardFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterDashboardFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'dashboard-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterDashboardFolder($xml);
	}
	
	/**
	 * @param QualityCenterDashboardFolder $dashboardFolder
	 * @return QualityCenterDashboardFolder
	 */
	public function create(QualityCenterDashboardFolder $dashboardFolder)
	{
		return $this->createEntity($dashboardFolder);
	}
	
	/**
	 * @param int $dashboardFolderId
	 */
	public function delete($dashboardFolderId)
	{
		$this->deleteEntity($dashboardFolderId);
	}
	
	/**
	 * @param int $dashboardFolderId
	 * @return QualityCenterDashboardFolder
	 */
	public function get($dashboardFolderId)
	{
		return $this->getEntity($dashboardFolderId);
	}
	
	/**
	 * @param QualityCenterDashboardFolderFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterDashboardFolder>
	 */
	public function search(QualityCenterDashboardFolderFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $dashboardFolderId
	 * @param QualityCenterDashboardFolder $dashboardFolder
	 * @return QualityCenterDashboardFolder
	 */
	public function update($dashboardFolderId, QualityCenterDashboardFolder $dashboardFolder)
	{
		return $this->updateEntity($dashboardFolderId, $dashboardFolder);
	}
}
