<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpmLink.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpmLinkFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpmLinkService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bpm-link';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpmLink($xml);
	}
	
	/**
	 * @param QualityCenterBpmLink $bpmLink
	 * @return QualityCenterBpmLink
	 */
	public function create(QualityCenterBpmLink $bpmLink)
	{
		return $this->createEntity($bpmLink);
	}
	
	/**
	 * @param int $bpmLinkId
	 */
	public function delete($bpmLinkId)
	{
		$this->deleteEntity($bpmLinkId);
	}
	
	/**
	 * @param int $bpmLinkId
	 * @return QualityCenterBpmLink
	 */
	public function get($bpmLinkId)
	{
		return $this->getEntity($bpmLinkId);
	}
	
	/**
	 * @param QualityCenterBpmLinkFilter $filter
	 * @return array<QualityCenterBpmLink>
	 */
	public function search(QualityCenterBpmLinkFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $bpmLinkId
	 * @param QualityCenterBpmLink $bpmLink
	 * @return QualityCenterBpmLink
	 */
	public function update($bpmLinkId, QualityCenterBpmLink $bpmLink)
	{
		return $this->updateEntity($bpmLinkId, $bpmLink);
	}
}
