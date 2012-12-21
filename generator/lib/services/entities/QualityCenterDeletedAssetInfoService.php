<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterDeletedAssetInfo.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterDeletedAssetInfoFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterDeletedAssetInfoService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'deleted-asset-info';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterDeletedAssetInfo($xml);
	}
	
	/**
	 * @param QualityCenterDeletedAssetInfo $deletedAssetInfo
	 * @return QualityCenterDeletedAssetInfo
	 */
	public function create(QualityCenterDeletedAssetInfo $deletedAssetInfo)
	{
		return $this->createEntity($deletedAssetInfo);
	}
	
	/**
	 * @param int $deletedAssetInfoId
	 */
	public function delete($deletedAssetInfoId)
	{
		$this->deleteEntity($deletedAssetInfoId);
	}
	
	/**
	 * @param int $deletedAssetInfoId
	 * @return QualityCenterDeletedAssetInfo
	 */
	public function get($deletedAssetInfoId)
	{
		return $this->getEntity($deletedAssetInfoId);
	}
	
	/**
	 * @param QualityCenterDeletedAssetInfoFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterDeletedAssetInfo>
	 */
	public function search(QualityCenterDeletedAssetInfoFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $deletedAssetInfoId
	 * @param QualityCenterDeletedAssetInfo $deletedAssetInfo
	 * @return QualityCenterDeletedAssetInfo
	 */
	public function update($deletedAssetInfoId, QualityCenterDeletedAssetInfo $deletedAssetInfo)
	{
		return $this->updateEntity($deletedAssetInfoId, $deletedAssetInfo);
	}
}
