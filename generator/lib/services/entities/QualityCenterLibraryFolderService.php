<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterLibraryFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterLibraryFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterLibraryFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'library-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterLibraryFolder($xml);
	}
	
	/**
	 * @param QualityCenterLibraryFolder $libraryFolder
	 * @return QualityCenterLibraryFolder
	 */
	public function create(QualityCenterLibraryFolder $libraryFolder)
	{
		return $this->createEntity($libraryFolder);
	}
	
	/**
	 * @param int $libraryFolderId
	 */
	public function delete($libraryFolderId)
	{
		$this->deleteEntity($libraryFolderId);
	}
	
	/**
	 * @param int $libraryFolderId
	 * @return QualityCenterLibraryFolder
	 */
	public function get($libraryFolderId)
	{
		return $this->getEntity($libraryFolderId);
	}
	
	/**
	 * @param QualityCenterLibraryFolderFilter $filter
	 * @return array<QualityCenterLibraryFolder>
	 */
	public function search(QualityCenterLibraryFolderFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $libraryFolderId
	 * @param QualityCenterLibraryFolder $libraryFolder
	 * @return QualityCenterLibraryFolder
	 */
	public function update($libraryFolderId, QualityCenterLibraryFolder $libraryFolder)
	{
		return $this->updateEntity($libraryFolderId, $libraryFolder);
	}
}
