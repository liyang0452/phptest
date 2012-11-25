<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterComponentFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterComponentFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterComponentFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'component-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterComponentFolder($xml);
	}
	
	/**
	 * @param QualityCenterComponentFolder $componentFolder
	 * @return QualityCenterComponentFolder
	 */
	public function create(QualityCenterComponentFolder $componentFolder)
	{
		return $this->createEntity($componentFolder);
	}
	
	/**
	 * @param int $componentFolderId
	 */
	public function delete($componentFolderId)
	{
		$this->deleteEntity($componentFolderId);
	}
	
	/**
	 * @param int $componentFolderId
	 * @return QualityCenterComponentFolder
	 */
	public function get($componentFolderId)
	{
		return $this->getEntity($componentFolderId);
	}
	
	/**
	 * @param QualityCenterComponentFolderFilter $filter
	 * @return array<QualityCenterComponentFolder>
	 */
	public function search(QualityCenterComponentFolderFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $componentFolderId
	 * @param QualityCenterComponentFolder $componentFolder
	 * @return QualityCenterComponentFolder
	 */
	public function update($componentFolderId, QualityCenterComponentFolder $componentFolder)
	{
		return $this->updateEntity($componentFolderId, $componentFolder);
	}
}
