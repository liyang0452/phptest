<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterReleaseCycle.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterReleaseCycleFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterReleaseCycleService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'release-cycle';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterReleaseCycle($xml);
	}
	
	/**
	 * @param QualityCenterReleaseCycle $releaseCycle
	 * @return QualityCenterReleaseCycle
	 */
	public function create(QualityCenterReleaseCycle $releaseCycle)
	{
		return $this->createEntity($releaseCycle);
	}
	
	/**
	 * @param int $releaseCycleId
	 */
	public function delete($releaseCycleId)
	{
		$this->deleteEntity($releaseCycleId);
	}
	
	/**
	 * @param int $releaseCycleId
	 * @return QualityCenterReleaseCycle
	 */
	public function get($releaseCycleId)
	{
		return $this->getEntity($releaseCycleId);
	}
	
	/**
	 * @param QualityCenterReleaseCycleFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterReleaseCycle>
	 */
	public function search(QualityCenterReleaseCycleFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $releaseCycleId
	 * @param QualityCenterReleaseCycle $releaseCycle
	 * @return QualityCenterReleaseCycle
	 */
	public function update($releaseCycleId, QualityCenterReleaseCycle $releaseCycle)
	{
		return $this->updateEntity($releaseCycleId, $releaseCycle);
	}
}
