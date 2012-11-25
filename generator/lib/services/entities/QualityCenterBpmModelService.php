<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpmModel.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpmModelFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpmModelService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bpm-model';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpmModel($xml);
	}
	
	/**
	 * @param QualityCenterBpmModel $bpmModel
	 * @return QualityCenterBpmModel
	 */
	public function create(QualityCenterBpmModel $bpmModel)
	{
		return $this->createEntity($bpmModel);
	}
	
	/**
	 * @param int $bpmModelId
	 */
	public function delete($bpmModelId)
	{
		$this->deleteEntity($bpmModelId);
	}
	
	/**
	 * @param int $bpmModelId
	 * @return QualityCenterBpmModel
	 */
	public function get($bpmModelId)
	{
		return $this->getEntity($bpmModelId);
	}
	
	/**
	 * @param QualityCenterBpmModelFilter $filter
	 * @return array<QualityCenterBpmModel>
	 */
	public function search(QualityCenterBpmModelFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $bpmModelId
	 * @param QualityCenterBpmModel $bpmModel
	 * @return QualityCenterBpmModel
	 */
	public function update($bpmModelId, QualityCenterBpmModel $bpmModel)
	{
		return $this->updateEntity($bpmModelId, $bpmModel);
	}
}
