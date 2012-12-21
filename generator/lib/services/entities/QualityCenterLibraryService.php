<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterLibrary.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterLibraryFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterLibraryService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'library';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterLibrary($xml);
	}
	
	/**
	 * @param QualityCenterLibrary $library
	 * @return QualityCenterLibrary
	 */
	public function create(QualityCenterLibrary $library)
	{
		return $this->createEntity($library);
	}
	
	/**
	 * @param int $libraryId
	 */
	public function delete($libraryId)
	{
		$this->deleteEntity($libraryId);
	}
	
	/**
	 * @param int $libraryId
	 * @return QualityCenterLibrary
	 */
	public function get($libraryId)
	{
		return $this->getEntity($libraryId);
	}
	
	/**
	 * @param QualityCenterLibraryFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterLibrary>
	 */
	public function search(QualityCenterLibraryFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $libraryId
	 * @param QualityCenterLibrary $library
	 * @return QualityCenterLibrary
	 */
	public function update($libraryId, QualityCenterLibrary $library)
	{
		return $this->updateEntity($libraryId, $library);
	}
}
