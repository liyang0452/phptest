<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpParam.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpParamFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpParamService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bp-param';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpParam($xml);
	}
	
	/**
	 * @param QualityCenterBpParam $bpParam
	 * @return QualityCenterBpParam
	 */
	public function create(QualityCenterBpParam $bpParam)
	{
		return $this->createEntity($bpParam);
	}
	
	/**
	 * @param int $bpParamId
	 */
	public function delete($bpParamId)
	{
		$this->deleteEntity($bpParamId);
	}
	
	/**
	 * @param int $bpParamId
	 * @return QualityCenterBpParam
	 */
	public function get($bpParamId)
	{
		return $this->getEntity($bpParamId);
	}
	
	/**
	 * @param QualityCenterBpParamFilter $filter
	 * @return array<QualityCenterBpParam>
	 */
	public function search(QualityCenterBpParamFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $bpParamId
	 * @param QualityCenterBpParam $bpParam
	 * @return QualityCenterBpParam
	 */
	public function update($bpParamId, QualityCenterBpParam $bpParam)
	{
		return $this->updateEntity($bpParamId, $bpParam);
	}
}
