<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAnalysisItemFolder.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAnalysisItemFolderFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAnalysisItemFolderService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'analysis-item-folder';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAnalysisItemFolder($xml);
	}
	
	/**
	 * @param QualityCenterAnalysisItemFolder $analysisItemFolder
	 * @return QualityCenterAnalysisItemFolder
	 */
	public function create(QualityCenterAnalysisItemFolder $analysisItemFolder)
	{
		return $this->createEntity($analysisItemFolder);
	}
	
	/**
	 * @param int $analysisItemFolderId
	 */
	public function delete($analysisItemFolderId)
	{
		$this->deleteEntity($analysisItemFolderId);
	}
	
	/**
	 * @param int $analysisItemFolderId
	 * @return QualityCenterAnalysisItemFolder
	 */
	public function get($analysisItemFolderId)
	{
		return $this->getEntity($analysisItemFolderId);
	}
	
	/**
	 * @param QualityCenterAnalysisItemFolderFilter $filter
	 * @return array<QualityCenterAnalysisItemFolder>
	 */
	public function search(QualityCenterAnalysisItemFolderFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $analysisItemFolderId
	 * @param QualityCenterAnalysisItemFolder $analysisItemFolder
	 * @return QualityCenterAnalysisItemFolder
	 */
	public function update($analysisItemFolderId, QualityCenterAnalysisItemFolder $analysisItemFolder)
	{
		return $this->updateEntity($analysisItemFolderId, $analysisItemFolder);
	}
}
