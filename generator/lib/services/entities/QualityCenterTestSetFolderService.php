<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterTestSetFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterTestSetFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterTestSetFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-set-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterTestSetFolder($xml);
	}
	
	/**
	 * @param QualityCenterTestSetFolder $testSetFolder
	 * @return QualityCenterTestSetFolder
	 */
	public function create(QualityCenterTestSetFolder $testSetFolder)
	{
		return $this->createEntity($testSetFolder);
	}
	
	/**
	 * @param int $testSetFolderId
	 */
	public function delete($testSetFolderId)
	{
		$this->deleteEntity($testSetFolderId);
	}
	
	/**
	 * @param int $testSetFolderId
	 * @return QualityCenterTestSetFolder
	 */
	public function get($testSetFolderId)
	{
		return $this->getEntity($testSetFolderId);
	}
	
	/**
	 * @param QualityCenterTestSetFolderFilter $filter
	 * @return array<QualityCenterTestSetFolder>
	 */
	public function search(QualityCenterTestSetFolderFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $testSetFolderId
	 * @param QualityCenterTestSetFolder $testSetFolder
	 * @return QualityCenterTestSetFolder
	 */
	public function update($testSetFolderId, QualityCenterTestSetFolder $testSetFolder)
	{
		return $this->updateEntity($testSetFolderId, $testSetFolder);
	}
}
