<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAuditLog.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAuditLogFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAuditLogService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'audit-log';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAuditLog($xml);
	}
	
	/**
	 * @param QualityCenterAuditLog $auditLog
	 * @return QualityCenterAuditLog
	 */
	public function create(QualityCenterAuditLog $auditLog)
	{
		return $this->createEntity($auditLog);
	}
	
	/**
	 * @param int $auditLogId
	 */
	public function delete($auditLogId)
	{
		$this->deleteEntity($auditLogId);
	}
	
	/**
	 * @param int $auditLogId
	 * @return QualityCenterAuditLog
	 */
	public function get($auditLogId)
	{
		return $this->getEntity($auditLogId);
	}
	
	/**
	 * @param QualityCenterAuditLogFilter $filter
	 * @return array<QualityCenterAuditLog>
	 */
	public function search(QualityCenterAuditLogFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $auditLogId
	 * @param QualityCenterAuditLog $auditLog
	 * @return QualityCenterAuditLog
	 */
	public function update($auditLogId, QualityCenterAuditLog $auditLog)
	{
		return $this->updateEntity($auditLogId, $auditLog);
	}
}
