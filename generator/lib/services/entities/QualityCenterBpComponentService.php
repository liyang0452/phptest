<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpComponent.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpComponentFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpComponentService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bp-component';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpComponent($xml);
	}
	
	/**
	 * @param QualityCenterBpComponent $bpComponent
	 * @return QualityCenterBpComponent
	 */
	public function create(QualityCenterBpComponent $bpComponent)
	{
		return $this->createEntity($bpComponent);
	}
	
	/**
	 * @param int $bpComponentId
	 */
	public function delete($bpComponentId)
	{
		$this->deleteEntity($bpComponentId);
	}
	
	/**
	 * @param int $bpComponentId
	 * @return QualityCenterBpComponent
	 */
	public function get($bpComponentId)
	{
		return $this->getEntity($bpComponentId);
	}
	
	/**
	 * @param QualityCenterBpComponentFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterBpComponent>
	 */
	public function search(QualityCenterBpComponentFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $bpComponentId
	 * @param QualityCenterBpComponent $bpComponent
	 * @return QualityCenterBpComponent
	 */
	public function update($bpComponentId, QualityCenterBpComponent $bpComponent)
	{
		return $this->updateEntity($bpComponentId, $bpComponent);
	}
}
