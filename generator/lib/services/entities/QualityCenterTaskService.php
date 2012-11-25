<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTask.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTaskFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTaskService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'task';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTask($xml);
	}
	
	/**
	 * @param QualityCenterTask $task
	 * @return QualityCenterTask
	 */
	public function create(QualityCenterTask $task)
	{
		return $this->createEntity($task);
	}
	
	/**
	 * @param int $taskId
	 */
	public function delete($taskId)
	{
		$this->deleteEntity($taskId);
	}
	
	/**
	 * @param int $taskId
	 * @return QualityCenterTask
	 */
	public function get($taskId)
	{
		return $this->getEntity($taskId);
	}
	
	/**
	 * @param QualityCenterTaskFilter $filter
	 * @return array<QualityCenterTask>
	 */
	public function search(QualityCenterTaskFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $taskId
	 * @param QualityCenterTask $task
	 * @return QualityCenterTask
	 */
	public function update($taskId, QualityCenterTask $task)
	{
		return $this->updateEntity($taskId, $task);
	}
}
