<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterResourceFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterResourceFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterResourceFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'resource-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterResourceFolder($xml);
	}
	
	/**
	 * @param QualityCenterResourceFolder $resourceFolder
	 * @return QualityCenterResourceFolder
	 */
	public function create(QualityCenterResourceFolder $resourceFolder)
	{
		return $this->createEntity($resourceFolder);
	}
	
	/**
	 * @param int $resourceFolderId
	 */
	public function delete($resourceFolderId)
	{
		$this->deleteEntity($resourceFolderId);
	}
	
	/**
	 * @param int $resourceFolderId
	 * @return QualityCenterResourceFolder
	 */
	public function get($resourceFolderId)
	{
		return $this->getEntity($resourceFolderId);
	}
	
	/**
	 * @param QualityCenterResourceFolderFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterResourceFolder>
	 */
	public function search(QualityCenterResourceFolderFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $resourceFolderId
	 * @param QualityCenterResourceFolder $resourceFolder
	 * @return QualityCenterResourceFolder
	 */
	public function update($resourceFolderId, QualityCenterResourceFolder $resourceFolder)
	{
		return $this->updateEntity($resourceFolderId, $resourceFolder);
	}
}
