<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterLibraryPart.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterLibraryPartFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterLibraryPartService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'library-part';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterLibraryPart($xml);
	}
	
	/**
	 * @param QualityCenterLibraryPart $libraryPart
	 * @return QualityCenterLibraryPart
	 */
	public function create(QualityCenterLibraryPart $libraryPart)
	{
		return $this->createEntity($libraryPart);
	}
	
	/**
	 * @param int $libraryPartId
	 */
	public function delete($libraryPartId)
	{
		$this->deleteEntity($libraryPartId);
	}
	
	/**
	 * @param int $libraryPartId
	 * @return QualityCenterLibraryPart
	 */
	public function get($libraryPartId)
	{
		return $this->getEntity($libraryPartId);
	}
	
	/**
	 * @param QualityCenterLibraryPartFilter $filter
	 * @return array<QualityCenterLibraryPart>
	 */
	public function search(QualityCenterLibraryPartFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $libraryPartId
	 * @param QualityCenterLibraryPart $libraryPart
	 * @return QualityCenterLibraryPart
	 */
	public function update($libraryPartId, QualityCenterLibraryPart $libraryPart)
	{
		return $this->updateEntity($libraryPartId, $libraryPart);
	}
}
