<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterComponentParam.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterComponentParamFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterComponentParamService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'component-param';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterComponentParam($xml);
	}
	
	/**
	 * @param QualityCenterComponentParam $componentParam
	 * @return QualityCenterComponentParam
	 */
	public function create(QualityCenterComponentParam $componentParam)
	{
		return $this->createEntity($componentParam);
	}
	
	/**
	 * @param int $componentParamId
	 */
	public function delete($componentParamId)
	{
		$this->deleteEntity($componentParamId);
	}
	
	/**
	 * @param int $componentParamId
	 * @return QualityCenterComponentParam
	 */
	public function get($componentParamId)
	{
		return $this->getEntity($componentParamId);
	}
	
	/**
	 * @param QualityCenterComponentParamFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterComponentParam>
	 */
	public function search(QualityCenterComponentParamFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $componentParamId
	 * @param QualityCenterComponentParam $componentParam
	 * @return QualityCenterComponentParam
	 */
	public function update($componentParamId, QualityCenterComponentParam $componentParam)
	{
		return $this->updateEntity($componentParamId, $componentParam);
	}
}
