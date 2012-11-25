<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterMsi.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterMsiFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterMsiService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'msi';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterMsi($xml);
	}
	
	/**
	 * @param QualityCenterMsi $msi
	 * @return QualityCenterMsi
	 */
	public function create(QualityCenterMsi $msi)
	{
		return $this->createEntity($msi);
	}
	
	/**
	 * @param int $msiId
	 */
	public function delete($msiId)
	{
		$this->deleteEntity($msiId);
	}
	
	/**
	 * @param int $msiId
	 * @return QualityCenterMsi
	 */
	public function get($msiId)
	{
		return $this->getEntity($msiId);
	}
	
	/**
	 * @param QualityCenterMsiFilter $filter
	 * @return array<QualityCenterMsi>
	 */
	public function search(QualityCenterMsiFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $msiId
	 * @param QualityCenterMsi $msi
	 * @return QualityCenterMsi
	 */
	public function update($msiId, QualityCenterMsi $msi)
	{
		return $this->updateEntity($msiId, $msi);
	}
}
