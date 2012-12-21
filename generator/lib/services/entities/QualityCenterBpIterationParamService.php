<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpIterationParam.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpIterationParamFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpIterationParamService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bp-iteration-param';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpIterationParam($xml);
	}
	
	/**
	 * @param QualityCenterBpIterationParam $bpIterationParam
	 * @return QualityCenterBpIterationParam
	 */
	public function create(QualityCenterBpIterationParam $bpIterationParam)
	{
		return $this->createEntity($bpIterationParam);
	}
	
	/**
	 * @param int $bpIterationParamId
	 */
	public function delete($bpIterationParamId)
	{
		$this->deleteEntity($bpIterationParamId);
	}
	
	/**
	 * @param int $bpIterationParamId
	 * @return QualityCenterBpIterationParam
	 */
	public function get($bpIterationParamId)
	{
		return $this->getEntity($bpIterationParamId);
	}
	
	/**
	 * @param QualityCenterBpIterationParamFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterBpIterationParam>
	 */
	public function search(QualityCenterBpIterationParamFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $bpIterationParamId
	 * @param QualityCenterBpIterationParam $bpIterationParam
	 * @return QualityCenterBpIterationParam
	 */
	public function update($bpIterationParamId, QualityCenterBpIterationParam $bpIterationParam)
	{
		return $this->updateEntity($bpIterationParamId, $bpIterationParam);
	}
}
