<?php
/**
 * @package External
 * @subpackage qc.filters
 */
require_once __DIR__ . '/../QualityCenterFilter.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterReportToReportProjectTemplateLinkFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'parent-id',
			'rpt-id',
			'id',
		);
	}
	
	/**
	 * Get Report To Report Project Template Link - Analysis Item ID
	 * @return string
	 */
	public function getParentId()
	{
		if(!isset($this->fields['parent-id']))
			return null;
			
		$parentId = $this->fields['parent-id'];
		return $parentId;
	}
	
	/**
	 * Set Report To Report Project Template Link - Analysis Item ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Report To Report Project Template Link - Project Template ID
	 * @return string
	 */
	public function getRptId()
	{
		if(!isset($this->fields['rpt-id']))
			return null;
			
		$rptId = $this->fields['rpt-id'];
		return $rptId;
	}
	
	/**
	 * Set Report To Report Project Template Link - Project Template ID
	 * @param string $rptId
	 */
	public function setRptId($rptId)
	{
		return $this->fields['rpt-id'] = $rptId;
	}
	
	/**
	 * Get Report To Report Project Template Link ID
	 * @return string
	 */
	public function getId()
	{
		if(!isset($this->fields['id']))
			return null;
			
		$id = $this->fields['id'];
		return $id;
	}
	
	/**
	 * Set Report To Report Project Template Link ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
}
