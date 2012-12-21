<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterScopeItem.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterScopeItemFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterScopeItemService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'scope-item';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterScopeItem($xml);
	}
	
	/**
	 * @param QualityCenterScopeItem $scopeItem
	 * @return QualityCenterScopeItem
	 */
	public function create(QualityCenterScopeItem $scopeItem)
	{
		return $this->createEntity($scopeItem);
	}
	
	/**
	 * @param int $scopeItemId
	 */
	public function delete($scopeItemId)
	{
		$this->deleteEntity($scopeItemId);
	}
	
	/**
	 * @param int $scopeItemId
	 * @return QualityCenterScopeItem
	 */
	public function get($scopeItemId)
	{
		return $this->getEntity($scopeItemId);
	}
	
	/**
	 * @param QualityCenterScopeItemFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterScopeItem>
	 */
	public function search(QualityCenterScopeItemFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $scopeItemId
	 * @param QualityCenterScopeItem $scopeItem
	 * @return QualityCenterScopeItem
	 */
	public function update($scopeItemId, QualityCenterScopeItem $scopeItem)
	{
		return $this->updateEntity($scopeItemId, $scopeItem);
	}
}
