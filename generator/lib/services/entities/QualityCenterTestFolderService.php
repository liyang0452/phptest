<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTestFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTestFolder($xml);
	}
	
	/**
	 * @param QualityCenterTestFolder $testFolder
	 * @return QualityCenterTestFolder
	 */
	public function create(QualityCenterTestFolder $testFolder)
	{
		return $this->createEntity($testFolder);
	}
	
	/**
	 * @param int $testFolderId
	 */
	public function delete($testFolderId)
	{
		$this->deleteEntity($testFolderId);
	}
	
	/**
	 * @param int $testFolderId
	 * @return QualityCenterTestFolder
	 */
	public function get($testFolderId)
	{
		return $this->getEntity($testFolderId);
	}
	
	/**
	 * @param QualityCenterTestFolderFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterTestFolder>
	 */
	public function search(QualityCenterTestFolderFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $testFolderId
	 * @param QualityCenterTestFolder $testFolder
	 * @return QualityCenterTestFolder
	 */
	public function update($testFolderId, QualityCenterTestFolder $testFolder)
	{
		return $this->updateEntity($testFolderId, $testFolder);
	}
}
