<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterMilestone.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterMilestoneFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterMilestoneService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'milestone';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterMilestone($xml);
	}
	
	/**
	 * @param QualityCenterMilestone $milestone
	 * @return QualityCenterMilestone
	 */
	public function create(QualityCenterMilestone $milestone)
	{
		return $this->createEntity($milestone);
	}
	
	/**
	 * @param int $milestoneId
	 */
	public function delete($milestoneId)
	{
		$this->deleteEntity($milestoneId);
	}
	
	/**
	 * @param int $milestoneId
	 * @return QualityCenterMilestone
	 */
	public function get($milestoneId)
	{
		return $this->getEntity($milestoneId);
	}
	
	/**
	 * @param QualityCenterMilestoneFilter $filter
	 * @return array<QualityCenterMilestone>
	 */
	public function search(QualityCenterMilestoneFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $milestoneId
	 * @param QualityCenterMilestone $milestone
	 * @return QualityCenterMilestone
	 */
	public function update($milestoneId, QualityCenterMilestone $milestone)
	{
		return $this->updateEntity($milestoneId, $milestone);
	}
}
