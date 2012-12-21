<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterReportUserTemplate.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterReportUserTemplateFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterReportUserTemplateService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'report-user-template';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterReportUserTemplate($xml);
	}
	
	/**
	 * @param QualityCenterReportUserTemplate $reportUserTemplate
	 * @return QualityCenterReportUserTemplate
	 */
	public function create(QualityCenterReportUserTemplate $reportUserTemplate)
	{
		return $this->createEntity($reportUserTemplate);
	}
	
	/**
	 * @param int $reportUserTemplateId
	 */
	public function delete($reportUserTemplateId)
	{
		$this->deleteEntity($reportUserTemplateId);
	}
	
	/**
	 * @param int $reportUserTemplateId
	 * @return QualityCenterReportUserTemplate
	 */
	public function get($reportUserTemplateId)
	{
		return $this->getEntity($reportUserTemplateId);
	}
	
	/**
	 * @param QualityCenterReportUserTemplateFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterReportUserTemplate>
	 */
	public function search(QualityCenterReportUserTemplateFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $reportUserTemplateId
	 * @param QualityCenterReportUserTemplate $reportUserTemplate
	 * @return QualityCenterReportUserTemplate
	 */
	public function update($reportUserTemplateId, QualityCenterReportUserTemplate $reportUserTemplate)
	{
		return $this->updateEntity($reportUserTemplateId, $reportUserTemplate);
	}
}
