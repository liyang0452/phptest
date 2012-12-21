<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAuditProperty.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAuditPropertyFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAuditPropertyService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'audit-property';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAuditProperty($xml);
	}
	
	/**
	 * @param QualityCenterAuditProperty $auditProperty
	 * @return QualityCenterAuditProperty
	 */
	public function create(QualityCenterAuditProperty $auditProperty)
	{
		return $this->createEntity($auditProperty);
	}
	
	/**
	 * @param int $auditPropertyId
	 */
	public function delete($auditPropertyId)
	{
		$this->deleteEntity($auditPropertyId);
	}
	
	/**
	 * @param int $auditPropertyId
	 * @return QualityCenterAuditProperty
	 */
	public function get($auditPropertyId)
	{
		return $this->getEntity($auditPropertyId);
	}
	
	/**
	 * @param QualityCenterAuditPropertyFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterAuditProperty>
	 */
	public function search(QualityCenterAuditPropertyFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $auditPropertyId
	 * @param QualityCenterAuditProperty $auditProperty
	 * @return QualityCenterAuditProperty
	 */
	public function update($auditPropertyId, QualityCenterAuditProperty $auditProperty)
	{
		return $this->updateEntity($auditPropertyId, $auditProperty);
	}
}
