<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterBpmFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterBpmFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterBpmFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bpm-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterBpmFolder($xml);
	}
	
	/**
	 * @param QualityCenterBpmFolder $bpmFolder
	 * @return QualityCenterBpmFolder
	 */
	public function create(QualityCenterBpmFolder $bpmFolder)
	{
		return $this->createEntity($bpmFolder);
	}
	
	/**
	 * @param int $bpmFolderId
	 */
	public function delete($bpmFolderId)
	{
		$this->deleteEntity($bpmFolderId);
	}
	
	/**
	 * @param int $bpmFolderId
	 * @return QualityCenterBpmFolder
	 */
	public function get($bpmFolderId)
	{
		return $this->getEntity($bpmFolderId);
	}
	
	/**
	 * @param QualityCenterBpmFolderFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterBpmFolder>
	 */
	public function search(QualityCenterBpmFolderFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $bpmFolderId
	 * @param QualityCenterBpmFolder $bpmFolder
	 * @return QualityCenterBpmFolder
	 */
	public function update($bpmFolderId, QualityCenterBpmFolder $bpmFolder)
	{
		return $this->updateEntity($bpmFolderId, $bpmFolder);
	}
}
