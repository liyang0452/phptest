<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRepositoryItem.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterRepositoryItemFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterRepositoryItemService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'repository-item';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRepositoryItem($xml);
	}
	
	/**
	 * @param QualityCenterRepositoryItem $repositoryItem
	 * @return QualityCenterRepositoryItem
	 */
	public function create(QualityCenterRepositoryItem $repositoryItem)
	{
		return $this->createEntity($repositoryItem);
	}
	
	/**
	 * @param int $repositoryItemId
	 */
	public function delete($repositoryItemId)
	{
		$this->deleteEntity($repositoryItemId);
	}
	
	/**
	 * @param int $repositoryItemId
	 * @return QualityCenterRepositoryItem
	 */
	public function get($repositoryItemId)
	{
		return $this->getEntity($repositoryItemId);
	}
	
	/**
	 * @param QualityCenterRepositoryItemFilter $filter
	 * @return array<QualityCenterRepositoryItem>
	 */
	public function search(QualityCenterRepositoryItemFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $repositoryItemId
	 * @param QualityCenterRepositoryItem $repositoryItem
	 * @return QualityCenterRepositoryItem
	 */
	public function update($repositoryItemId, QualityCenterRepositoryItem $repositoryItem)
	{
		return $this->updateEntity($repositoryItemId, $repositoryItem);
	}
}
