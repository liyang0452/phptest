<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRequirement.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterRequirementFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterRequirementService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'requirement';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRequirement($xml);
	}
	
	/**
	 * @param QualityCenterRequirement $requirement
	 * @return QualityCenterRequirement
	 */
	public function create(QualityCenterRequirement $requirement)
	{
		return $this->createEntity($requirement);
	}
	
	/**
	 * @param int $requirementId
	 */
	public function delete($requirementId)
	{
		$this->deleteEntity($requirementId);
	}
	
	/**
	 * @param int $requirementId
	 * @return QualityCenterRequirement
	 */
	public function get($requirementId)
	{
		return $this->getEntity($requirementId);
	}
	
	/**
	 * @param QualityCenterRequirementFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterRequirement>
	 */
	public function search(QualityCenterRequirementFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $requirementId
	 * @param QualityCenterRequirement $requirement
	 * @return QualityCenterRequirement
	 */
	public function update($requirementId, QualityCenterRequirement $requirement)
	{
		return $this->updateEntity($requirementId, $requirement);
	}
}
