<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterResource.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterResourceFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterResourceService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'resource';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterResource($xml);
	}
	
	/**
	 * @param QualityCenterResource $resource
	 * @return QualityCenterResource
	 */
	public function create(QualityCenterResource $resource)
	{
		return $this->createEntity($resource);
	}
	
	/**
	 * @param int $resourceId
	 */
	public function delete($resourceId)
	{
		$this->deleteEntity($resourceId);
	}
	
	/**
	 * @param int $resourceId
	 * @return QualityCenterResource
	 */
	public function get($resourceId)
	{
		return $this->getEntity($resourceId);
	}
	
	/**
	 * @param QualityCenterResourceFilter $filter
	 * @return array<QualityCenterResource>
	 */
	public function search(QualityCenterResourceFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $resourceId
	 * @param QualityCenterResource $resource
	 * @return QualityCenterResource
	 */
	public function update($resourceId, QualityCenterResource $resource)
	{
		return $this->updateEntity($resourceId, $resource);
	}
}
