<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterRequirementCoverage.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterRequirementCoverageFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterRequirementCoverageService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'requirement-coverage';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterRequirementCoverage($xml);
	}
	
	/**
	 * @param QualityCenterRequirementCoverage $requirementCoverage
	 * @return QualityCenterRequirementCoverage
	 */
	public function create(QualityCenterRequirementCoverage $requirementCoverage)
	{
		return $this->createEntity($requirementCoverage);
	}
	
	/**
	 * @param int $requirementCoverageId
	 */
	public function delete($requirementCoverageId)
	{
		$this->deleteEntity($requirementCoverageId);
	}
	
	/**
	 * @param int $requirementCoverageId
	 * @return QualityCenterRequirementCoverage
	 */
	public function get($requirementCoverageId)
	{
		return $this->getEntity($requirementCoverageId);
	}
	
	/**
	 * @param QualityCenterRequirementCoverageFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterRequirementCoverage>
	 */
	public function search(QualityCenterRequirementCoverageFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $requirementCoverageId
	 * @param QualityCenterRequirementCoverage $requirementCoverage
	 * @return QualityCenterRequirementCoverage
	 */
	public function update($requirementCoverageId, QualityCenterRequirementCoverage $requirementCoverage)
	{
		return $this->updateEntity($requirementCoverageId, $requirementCoverage);
	}
}
