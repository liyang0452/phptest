<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterFavoriteFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterFavoriteFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterFavoriteFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'favorite-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterFavoriteFolder($xml);
	}
	
	/**
	 * @param QualityCenterFavoriteFolder $favoriteFolder
	 * @return QualityCenterFavoriteFolder
	 */
	public function create(QualityCenterFavoriteFolder $favoriteFolder)
	{
		return $this->createEntity($favoriteFolder);
	}
	
	/**
	 * @param int $favoriteFolderId
	 */
	public function delete($favoriteFolderId)
	{
		$this->deleteEntity($favoriteFolderId);
	}
	
	/**
	 * @param int $favoriteFolderId
	 * @return QualityCenterFavoriteFolder
	 */
	public function get($favoriteFolderId)
	{
		return $this->getEntity($favoriteFolderId);
	}
	
	/**
	 * @param QualityCenterFavoriteFolderFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterFavoriteFolder>
	 */
	public function search(QualityCenterFavoriteFolderFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $favoriteFolderId
	 * @param QualityCenterFavoriteFolder $favoriteFolder
	 * @return QualityCenterFavoriteFolder
	 */
	public function update($favoriteFolderId, QualityCenterFavoriteFolder $favoriteFolder)
	{
		return $this->updateEntity($favoriteFolderId, $favoriteFolder);
	}
}
