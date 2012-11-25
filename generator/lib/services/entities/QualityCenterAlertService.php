<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAlert.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAlertFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAlertService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'alert';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAlert($xml);
	}
	
	/**
	 * @param QualityCenterAlert $alert
	 * @return QualityCenterAlert
	 */
	public function create(QualityCenterAlert $alert)
	{
		return $this->createEntity($alert);
	}
	
	/**
	 * @param int $alertId
	 */
	public function delete($alertId)
	{
		$this->deleteEntity($alertId);
	}
	
	/**
	 * @param int $alertId
	 * @return QualityCenterAlert
	 */
	public function get($alertId)
	{
		return $this->getEntity($alertId);
	}
	
	/**
	 * @param QualityCenterAlertFilter $filter
	 * @return array<QualityCenterAlert>
	 */
	public function search(QualityCenterAlertFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $alertId
	 * @param QualityCenterAlert $alert
	 * @return QualityCenterAlert
	 */
	public function update($alertId, QualityCenterAlert $alert)
	{
		return $this->updateEntity($alertId, $alert);
	}
}
