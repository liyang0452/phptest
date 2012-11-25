<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterReleaseFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterReleaseFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterReleaseFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'release-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterReleaseFolder($xml);
	}
	
	/**
	 * @param QualityCenterReleaseFolder $releaseFolder
	 * @return QualityCenterReleaseFolder
	 */
	public function create(QualityCenterReleaseFolder $releaseFolder)
	{
		return $this->createEntity($releaseFolder);
	}
	
	/**
	 * @param int $releaseFolderId
	 */
	public function delete($releaseFolderId)
	{
		$this->deleteEntity($releaseFolderId);
	}
	
	/**
	 * @param int $releaseFolderId
	 * @return QualityCenterReleaseFolder
	 */
	public function get($releaseFolderId)
	{
		return $this->getEntity($releaseFolderId);
	}
	
	/**
	 * @param QualityCenterReleaseFolderFilter $filter
	 * @return array<QualityCenterReleaseFolder>
	 */
	public function search(QualityCenterReleaseFolderFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $releaseFolderId
	 * @param QualityCenterReleaseFolder $releaseFolder
	 * @return QualityCenterReleaseFolder
	 */
	public function update($releaseFolderId, QualityCenterReleaseFolder $releaseFolder)
	{
		return $this->updateEntity($releaseFolderId, $releaseFolder);
	}
}
