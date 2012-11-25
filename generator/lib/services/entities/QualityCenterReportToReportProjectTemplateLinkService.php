<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterReportToReportProjectTemplateLink.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterReportToReportProjectTemplateLinkFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterReportToReportProjectTemplateLinkService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'report-to-report-project-template-link';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterReportToReportProjectTemplateLink($xml);
	}
	
	/**
	 * @param QualityCenterReportToReportProjectTemplateLink $reportToReportProjectTemplateLink
	 * @return QualityCenterReportToReportProjectTemplateLink
	 */
	public function create(QualityCenterReportToReportProjectTemplateLink $reportToReportProjectTemplateLink)
	{
		return $this->createEntity($reportToReportProjectTemplateLink);
	}
	
	/**
	 * @param int $reportToReportProjectTemplateLinkId
	 */
	public function delete($reportToReportProjectTemplateLinkId)
	{
		$this->deleteEntity($reportToReportProjectTemplateLinkId);
	}
	
	/**
	 * @param int $reportToReportProjectTemplateLinkId
	 * @return QualityCenterReportToReportProjectTemplateLink
	 */
	public function get($reportToReportProjectTemplateLinkId)
	{
		return $this->getEntity($reportToReportProjectTemplateLinkId);
	}
	
	/**
	 * @param QualityCenterReportToReportProjectTemplateLinkFilter $filter
	 * @return array<QualityCenterReportToReportProjectTemplateLink>
	 */
	public function search(QualityCenterReportToReportProjectTemplateLinkFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $reportToReportProjectTemplateLinkId
	 * @param QualityCenterReportToReportProjectTemplateLink $reportToReportProjectTemplateLink
	 * @return QualityCenterReportToReportProjectTemplateLink
	 */
	public function update($reportToReportProjectTemplateLinkId, QualityCenterReportToReportProjectTemplateLink $reportToReportProjectTemplateLink)
	{
		return $this->updateEntity($reportToReportProjectTemplateLinkId, $reportToReportProjectTemplateLink);
	}
}
