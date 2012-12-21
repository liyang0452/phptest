<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterDefectLink.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterDefectLinkFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterDefectLinkService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'defect-link';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterDefectLink($xml);
	}
	
	/**
	 * @param QualityCenterDefectLink $defectLink
	 * @return QualityCenterDefectLink
	 */
	public function create(QualityCenterDefectLink $defectLink)
	{
		return $this->createEntity($defectLink);
	}
	
	/**
	 * @param int $defectLinkId
	 */
	public function delete($defectLinkId)
	{
		$this->deleteEntity($defectLinkId);
	}
	
	/**
	 * @param int $defectLinkId
	 * @return QualityCenterDefectLink
	 */
	public function get($defectLinkId)
	{
		return $this->getEntity($defectLinkId);
	}
	
	/**
	 * @param QualityCenterDefectLinkFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterDefectLink>
	 */
	public function search(QualityCenterDefectLinkFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $defectLinkId
	 * @param QualityCenterDefectLink $defectLink
	 * @return QualityCenterDefectLink
	 */
	public function update($defectLinkId, QualityCenterDefectLink $defectLink)
	{
		return $this->updateEntity($defectLinkId, $defectLink);
	}
}
