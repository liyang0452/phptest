<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpIteration.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpIterationFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpIterationService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bp-iteration';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpIteration($xml);
	}
	
	/**
	 * @param QualityCenterBpIteration $bpIteration
	 * @return QualityCenterBpIteration
	 */
	public function create(QualityCenterBpIteration $bpIteration)
	{
		return $this->createEntity($bpIteration);
	}
	
	/**
	 * @param int $bpIterationId
	 */
	public function delete($bpIterationId)
	{
		$this->deleteEntity($bpIterationId);
	}
	
	/**
	 * @param int $bpIterationId
	 * @return QualityCenterBpIteration
	 */
	public function get($bpIterationId)
	{
		return $this->getEntity($bpIterationId);
	}
	
	/**
	 * @param QualityCenterBpIterationFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterBpIteration>
	 */
	public function search(QualityCenterBpIterationFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $bpIterationId
	 * @param QualityCenterBpIteration $bpIteration
	 * @return QualityCenterBpIteration
	 */
	public function update($bpIterationId, QualityCenterBpIteration $bpIteration)
	{
		return $this->updateEntity($bpIterationId, $bpIteration);
	}
}
