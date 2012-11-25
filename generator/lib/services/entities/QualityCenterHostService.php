<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterHost.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterHostFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterHostService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'host';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterHost($xml);
	}
	
	/**
	 * @param QualityCenterHost $host
	 * @return QualityCenterHost
	 */
	public function create(QualityCenterHost $host)
	{
		return $this->createEntity($host);
	}
	
	/**
	 * @param int $hostId
	 */
	public function delete($hostId)
	{
		$this->deleteEntity($hostId);
	}
	
	/**
	 * @param int $hostId
	 * @return QualityCenterHost
	 */
	public function get($hostId)
	{
		return $this->getEntity($hostId);
	}
	
	/**
	 * @param QualityCenterHostFilter $filter
	 * @return array<QualityCenterHost>
	 */
	public function search(QualityCenterHostFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $hostId
	 * @param QualityCenterHost $host
	 * @return QualityCenterHost
	 */
	public function update($hostId, QualityCenterHost $host)
	{
		return $this->updateEntity($hostId, $host);
	}
}
