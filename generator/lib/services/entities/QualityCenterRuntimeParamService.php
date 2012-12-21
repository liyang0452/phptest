<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRuntimeParam.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterRuntimeParamFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterRuntimeParamService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'runtime-param';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRuntimeParam($xml);
	}
	
	/**
	 * @param QualityCenterRuntimeParam $runtimeParam
	 * @return QualityCenterRuntimeParam
	 */
	public function create(QualityCenterRuntimeParam $runtimeParam)
	{
		return $this->createEntity($runtimeParam);
	}
	
	/**
	 * @param int $runtimeParamId
	 */
	public function delete($runtimeParamId)
	{
		$this->deleteEntity($runtimeParamId);
	}
	
	/**
	 * @param int $runtimeParamId
	 * @return QualityCenterRuntimeParam
	 */
	public function get($runtimeParamId)
	{
		return $this->getEntity($runtimeParamId);
	}
	
	/**
	 * @param QualityCenterRuntimeParamFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterRuntimeParam>
	 */
	public function search(QualityCenterRuntimeParamFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $runtimeParamId
	 * @param QualityCenterRuntimeParam $runtimeParam
	 * @return QualityCenterRuntimeParam
	 */
	public function update($runtimeParamId, QualityCenterRuntimeParam $runtimeParam)
	{
		return $this->updateEntity($runtimeParamId, $runtimeParam);
	}
}
