<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpmElement.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpmElementFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpmElementService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bpm-element';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpmElement($xml);
	}
	
	/**
	 * @param QualityCenterBpmElement $bpmElement
	 * @return QualityCenterBpmElement
	 */
	public function create(QualityCenterBpmElement $bpmElement)
	{
		return $this->createEntity($bpmElement);
	}
	
	/**
	 * @param int $bpmElementId
	 */
	public function delete($bpmElementId)
	{
		$this->deleteEntity($bpmElementId);
	}
	
	/**
	 * @param int $bpmElementId
	 * @return QualityCenterBpmElement
	 */
	public function get($bpmElementId)
	{
		return $this->getEntity($bpmElementId);
	}
	
	/**
	 * @param QualityCenterBpmElementFilter $filter
	 * @return array<QualityCenterBpmElement>
	 */
	public function search(QualityCenterBpmElementFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $bpmElementId
	 * @param QualityCenterBpmElement $bpmElement
	 * @return QualityCenterBpmElement
	 */
	public function update($bpmElementId, QualityCenterBpmElement $bpmElement)
	{
		return $this->updateEntity($bpmElementId, $bpmElement);
	}
}
