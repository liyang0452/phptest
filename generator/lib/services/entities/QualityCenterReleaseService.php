<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRelease.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterReleaseFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterReleaseService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'release';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRelease($xml);
	}
	
	/**
	 * @param QualityCenterRelease $release
	 * @return QualityCenterRelease
	 */
	public function create(QualityCenterRelease $release)
	{
		return $this->createEntity($release);
	}
	
	/**
	 * @param int $releaseId
	 */
	public function delete($releaseId)
	{
		$this->deleteEntity($releaseId);
	}
	
	/**
	 * @param int $releaseId
	 * @return QualityCenterRelease
	 */
	public function get($releaseId)
	{
		return $this->getEntity($releaseId);
	}
	
	/**
	 * @param QualityCenterReleaseFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterRelease>
	 */
	public function search(QualityCenterReleaseFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $releaseId
	 * @param QualityCenterRelease $release
	 * @return QualityCenterRelease
	 */
	public function update($releaseId, QualityCenterRelease $release)
	{
		return $this->updateEntity($releaseId, $release);
	}
}
