<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRunIteration.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterRunIterationFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterRunIterationService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'run-iteration';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRunIteration($xml);
	}
	
	/**
	 * @param QualityCenterRunIteration $runIteration
	 * @return QualityCenterRunIteration
	 */
	public function create(QualityCenterRunIteration $runIteration)
	{
		return $this->createEntity($runIteration);
	}
	
	/**
	 * @param int $runIterationId
	 */
	public function delete($runIterationId)
	{
		$this->deleteEntity($runIterationId);
	}
	
	/**
	 * @param int $runIterationId
	 * @return QualityCenterRunIteration
	 */
	public function get($runIterationId)
	{
		return $this->getEntity($runIterationId);
	}
	
	/**
	 * @param QualityCenterRunIterationFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterRunIteration>
	 */
	public function search(QualityCenterRunIterationFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $runIterationId
	 * @param QualityCenterRunIteration $runIteration
	 * @return QualityCenterRunIteration
	 */
	public function update($runIterationId, QualityCenterRunIteration $runIteration)
	{
		return $this->updateEntity($runIterationId, $runIteration);
	}
}
