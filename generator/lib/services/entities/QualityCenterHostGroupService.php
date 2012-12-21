<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterHostGroup.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterHostGroupFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterHostGroupService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'host-group';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterHostGroup($xml);
	}
	
	/**
	 * @param QualityCenterHostGroup $hostGroup
	 * @return QualityCenterHostGroup
	 */
	public function create(QualityCenterHostGroup $hostGroup)
	{
		return $this->createEntity($hostGroup);
	}
	
	/**
	 * @param int $hostGroupId
	 */
	public function delete($hostGroupId)
	{
		$this->deleteEntity($hostGroupId);
	}
	
	/**
	 * @param int $hostGroupId
	 * @return QualityCenterHostGroup
	 */
	public function get($hostGroupId)
	{
		return $this->getEntity($hostGroupId);
	}
	
	/**
	 * @param QualityCenterHostGroupFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterHostGroup>
	 */
	public function search(QualityCenterHostGroupFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $hostGroupId
	 * @param QualityCenterHostGroup $hostGroup
	 * @return QualityCenterHostGroup
	 */
	public function update($hostGroupId, QualityCenterHostGroup $hostGroup)
	{
		return $this->updateEntity($hostGroupId, $hostGroup);
	}
}
