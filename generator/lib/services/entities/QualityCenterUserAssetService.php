<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterUserAsset.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterUserAssetFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterUserAssetService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'user-asset';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterUserAsset($xml);
	}
	
	/**
	 * @param QualityCenterUserAsset $userAsset
	 * @return QualityCenterUserAsset
	 */
	public function create(QualityCenterUserAsset $userAsset)
	{
		return $this->createEntity($userAsset);
	}
	
	/**
	 * @param int $userAssetId
	 */
	public function delete($userAssetId)
	{
		$this->deleteEntity($userAssetId);
	}
	
	/**
	 * @param int $userAssetId
	 * @return QualityCenterUserAsset
	 */
	public function get($userAssetId)
	{
		return $this->getEntity($userAssetId);
	}
	
	/**
	 * @param QualityCenterUserAssetFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterUserAsset>
	 */
	public function search(QualityCenterUserAssetFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $userAssetId
	 * @param QualityCenterUserAsset $userAsset
	 * @return QualityCenterUserAsset
	 */
	public function update($userAssetId, QualityCenterUserAsset $userAsset)
	{
		return $this->updateEntity($userAssetId, $userAsset);
	}
}
