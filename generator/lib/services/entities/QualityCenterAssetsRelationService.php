<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAssetsRelation.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAssetsRelationFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAssetsRelationService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'assets-relation';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAssetsRelation($xml);
	}
	
	/**
	 * @param QualityCenterAssetsRelation $assetsRelation
	 * @return QualityCenterAssetsRelation
	 */
	public function create(QualityCenterAssetsRelation $assetsRelation)
	{
		return $this->createEntity($assetsRelation);
	}
	
	/**
	 * @param int $assetsRelationId
	 */
	public function delete($assetsRelationId)
	{
		$this->deleteEntity($assetsRelationId);
	}
	
	/**
	 * @param int $assetsRelationId
	 * @return QualityCenterAssetsRelation
	 */
	public function get($assetsRelationId)
	{
		return $this->getEntity($assetsRelationId);
	}
	
	/**
	 * @param QualityCenterAssetsRelationFilter $filter
	 * @return array<QualityCenterAssetsRelation>
	 */
	public function search(QualityCenterAssetsRelationFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $assetsRelationId
	 * @param QualityCenterAssetsRelation $assetsRelation
	 * @return QualityCenterAssetsRelation
	 */
	public function update($assetsRelationId, QualityCenterAssetsRelation $assetsRelation)
	{
		return $this->updateEntity($assetsRelationId, $assetsRelation);
	}
}
