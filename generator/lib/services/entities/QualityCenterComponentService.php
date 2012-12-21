<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterComponent.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterComponentFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterComponentService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'component';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterComponent($xml);
	}
	
	/**
	 * @param QualityCenterComponent $component
	 * @return QualityCenterComponent
	 */
	public function create(QualityCenterComponent $component)
	{
		return $this->createEntity($component);
	}
	
	/**
	 * @param int $componentId
	 */
	public function delete($componentId)
	{
		$this->deleteEntity($componentId);
	}
	
	/**
	 * @param int $componentId
	 * @return QualityCenterComponent
	 */
	public function get($componentId)
	{
		return $this->getEntity($componentId);
	}
	
	/**
	 * @param QualityCenterComponentFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterComponent>
	 */
	public function search(QualityCenterComponentFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $componentId
	 * @param QualityCenterComponent $component
	 * @return QualityCenterComponent
	 */
	public function update($componentId, QualityCenterComponent $component)
	{
		return $this->updateEntity($componentId, $component);
	}
}
