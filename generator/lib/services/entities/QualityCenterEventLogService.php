<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterEventLog.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterEventLogFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterEventLogService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'event-log';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterEventLog($xml);
	}
	
	/**
	 * @param QualityCenterEventLog $eventLog
	 * @return QualityCenterEventLog
	 */
	public function create(QualityCenterEventLog $eventLog)
	{
		return $this->createEntity($eventLog);
	}
	
	/**
	 * @param int $eventLogId
	 */
	public function delete($eventLogId)
	{
		$this->deleteEntity($eventLogId);
	}
	
	/**
	 * @param int $eventLogId
	 * @return QualityCenterEventLog
	 */
	public function get($eventLogId)
	{
		return $this->getEntity($eventLogId);
	}
	
	/**
	 * @param QualityCenterEventLogFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterEventLog>
	 */
	public function search(QualityCenterEventLogFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $eventLogId
	 * @param QualityCenterEventLog $eventLog
	 * @return QualityCenterEventLog
	 */
	public function update($eventLogId, QualityCenterEventLog $eventLog)
	{
		return $this->updateEntity($eventLogId, $eventLog);
	}
}
