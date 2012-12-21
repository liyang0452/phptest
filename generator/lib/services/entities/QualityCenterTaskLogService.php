<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTaskLog.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTaskLogFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTaskLogService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'task-log';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTaskLog($xml);
	}
	
	/**
	 * @param QualityCenterTaskLog $taskLog
	 * @return QualityCenterTaskLog
	 */
	public function create(QualityCenterTaskLog $taskLog)
	{
		return $this->createEntity($taskLog);
	}
	
	/**
	 * @param int $taskLogId
	 */
	public function delete($taskLogId)
	{
		$this->deleteEntity($taskLogId);
	}
	
	/**
	 * @param int $taskLogId
	 * @return QualityCenterTaskLog
	 */
	public function get($taskLogId)
	{
		return $this->getEntity($taskLogId);
	}
	
	/**
	 * @param QualityCenterTaskLogFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterTaskLog>
	 */
	public function search(QualityCenterTaskLogFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $taskLogId
	 * @param QualityCenterTaskLog $taskLog
	 * @return QualityCenterTaskLog
	 */
	public function update($taskLogId, QualityCenterTaskLog $taskLog)
	{
		return $this->updateEntity($taskLogId, $taskLog);
	}
}
