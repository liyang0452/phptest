<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterFavorite.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterFavoriteFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterFavoriteService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'favorite';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterFavorite($xml);
	}
	
	/**
	 * @param QualityCenterFavorite $favorite
	 * @return QualityCenterFavorite
	 */
	public function create(QualityCenterFavorite $favorite)
	{
		return $this->createEntity($favorite);
	}
	
	/**
	 * @param int $favoriteId
	 */
	public function delete($favoriteId)
	{
		$this->deleteEntity($favoriteId);
	}
	
	/**
	 * @param int $favoriteId
	 * @return QualityCenterFavorite
	 */
	public function get($favoriteId)
	{
		return $this->getEntity($favoriteId);
	}
	
	/**
	 * @param QualityCenterFavoriteFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterFavorite>
	 */
	public function search(QualityCenterFavoriteFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $favoriteId
	 * @param QualityCenterFavorite $favorite
	 * @return QualityCenterFavorite
	 */
	public function update($favoriteId, QualityCenterFavorite $favorite)
	{
		return $this->updateEntity($favoriteId, $favorite);
	}
}
