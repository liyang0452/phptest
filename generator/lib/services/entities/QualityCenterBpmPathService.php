<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpmPath.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpmPathFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpmPathService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bpm-path';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpmPath($xml);
	}
	
	/**
	 * @param QualityCenterBpmPath $bpmPath
	 * @return QualityCenterBpmPath
	 */
	public function create(QualityCenterBpmPath $bpmPath)
	{
		return $this->createEntity($bpmPath);
	}
	
	/**
	 * @param int $bpmPathId
	 */
	public function delete($bpmPathId)
	{
		$this->deleteEntity($bpmPathId);
	}
	
	/**
	 * @param int $bpmPathId
	 * @return QualityCenterBpmPath
	 */
	public function get($bpmPathId)
	{
		return $this->getEntity($bpmPathId);
	}
	
	/**
	 * @param QualityCenterBpmPathFilter $filter
	 * @return array<QualityCenterBpmPath>
	 */
	public function search(QualityCenterBpmPathFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $bpmPathId
	 * @param QualityCenterBpmPath $bpmPath
	 * @return QualityCenterBpmPath
	 */
	public function update($bpmPathId, QualityCenterBpmPath $bpmPath)
	{
		return $this->updateEntity($bpmPathId, $bpmPath);
	}
}
