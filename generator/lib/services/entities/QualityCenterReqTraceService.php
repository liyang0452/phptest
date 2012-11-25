<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterReqTrace.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterReqTraceFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterReqTraceService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'req-trace';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterReqTrace($xml);
	}
	
	/**
	 * @param QualityCenterReqTrace $reqTrace
	 * @return QualityCenterReqTrace
	 */
	public function create(QualityCenterReqTrace $reqTrace)
	{
		return $this->createEntity($reqTrace);
	}
	
	/**
	 * @param int $reqTraceId
	 */
	public function delete($reqTraceId)
	{
		$this->deleteEntity($reqTraceId);
	}
	
	/**
	 * @param int $reqTraceId
	 * @return QualityCenterReqTrace
	 */
	public function get($reqTraceId)
	{
		return $this->getEntity($reqTraceId);
	}
	
	/**
	 * @param QualityCenterReqTraceFilter $filter
	 * @return array<QualityCenterReqTrace>
	 */
	public function search(QualityCenterReqTraceFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $reqTraceId
	 * @param QualityCenterReqTrace $reqTrace
	 * @return QualityCenterReqTrace
	 */
	public function update($reqTraceId, QualityCenterReqTrace $reqTrace)
	{
		return $this->updateEntity($reqTraceId, $reqTrace);
	}
}
