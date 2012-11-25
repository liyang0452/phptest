<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRun.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterRunFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterRunService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'run';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRun($xml);
	}
	
	/**
	 * @param QualityCenterRun $run
	 * @return QualityCenterRun
	 */
	public function create(QualityCenterRun $run)
	{
		return $this->createEntity($run);
	}
	
	/**
	 * @param int $runId
	 */
	public function delete($runId)
	{
		$this->deleteEntity($runId);
	}
	
	/**
	 * @param int $runId
	 * @return QualityCenterRun
	 */
	public function get($runId)
	{
		return $this->getEntity($runId);
	}
	
	/**
	 * @param QualityCenterRunFilter $filter
	 * @return array<QualityCenterRun>
	 */
	public function search(QualityCenterRunFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $runId
	 * @param QualityCenterRun $run
	 * @return QualityCenterRun
	 */
	public function update($runId, QualityCenterRun $run)
	{
		return $this->updateEntity($runId, $run);
	}
}
