<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterDefect.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterDefectFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterDefectService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'defect';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterDefect($xml);
	}
	
	/**
	 * @param QualityCenterDefect $defect
	 * @return QualityCenterDefect
	 */
	public function create(QualityCenterDefect $defect)
	{
		return $this->createEntity($defect);
	}
	
	/**
	 * @param int $defectId
	 */
	public function delete($defectId)
	{
		$this->deleteEntity($defectId);
	}
	
	/**
	 * @param int $defectId
	 * @return QualityCenterDefect
	 */
	public function get($defectId)
	{
		return $this->getEntity($defectId);
	}
	
	/**
	 * @param QualityCenterDefectFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterDefect>
	 */
	public function search(QualityCenterDefectFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $defectId
	 * @param QualityCenterDefect $defect
	 * @return QualityCenterDefect
	 */
	public function update($defectId, QualityCenterDefect $defect)
	{
		return $this->updateEntity($defectId, $defect);
	}
}
