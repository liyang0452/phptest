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
class QualityCenterDashboardPageItemFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'analysis-item-id',
			'parent-id',
			'id',
			'position-column',
			'height',
			'position-row',
			'width',
			'ver-stamp',
		);
	}
	
	/**
	 * Get Analysis Item ID
	 * @return string
	 */
	public function getAnalysisItemId()
	{
		if(!isset($this->fields['analysis-item-id']))
			return null;
			
		$analysisItemId = $this->fields['analysis-item-id'];
		return $analysisItemId;
	}
	
	/**
	 * Set Analysis Item ID
	 * @param string $analysisItemId
	 */
	public function setAnalysisItemId($analysisItemId)
	{
		return $this->fields['analysis-item-id'] = $analysisItemId;
	}
	
	/**
	 * Get Dashboard Page ID
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
	 * Set Dashboard Page ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Dashboard Page Item ID
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
	 * Set Dashboard Page Item ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Item column number on page
	 * @return string
	 */
	public function getPositionColumn()
	{
		if(!isset($this->fields['position-column']))
			return null;
			
		$positionColumn = $this->fields['position-column'];
		return $positionColumn;
	}
	
	/**
	 * Set Item column number on page
	 * @param string $positionColumn
	 */
	public function setPositionColumn($positionColumn)
	{
		return $this->fields['position-column'] = $positionColumn;
	}
	
	/**
	 * Get Item height on page
	 * @return string
	 */
	public function getHeight()
	{
		if(!isset($this->fields['height']))
			return null;
			
		$height = $this->fields['height'];
		return $height;
	}
	
	/**
	 * Set Item height on page
	 * @param string $height
	 */
	public function setHeight($height)
	{
		return $this->fields['height'] = $height;
	}
	
	/**
	 * Get Item row number on page
	 * @return string
	 */
	public function getPositionRow()
	{
		if(!isset($this->fields['position-row']))
			return null;
			
		$positionRow = $this->fields['position-row'];
		return $positionRow;
	}
	
	/**
	 * Set Item row number on page
	 * @param string $positionRow
	 */
	public function setPositionRow($positionRow)
	{
		return $this->fields['position-row'] = $positionRow;
	}
	
	/**
	 * Get Item width on page
	 * @return string
	 */
	public function getWidth()
	{
		if(!isset($this->fields['width']))
			return null;
			
		$width = $this->fields['width'];
		return $width;
	}
	
	/**
	 * Set Item width on page
	 * @param string $width
	 */
	public function setWidth($width)
	{
		return $this->fields['width'] = $width;
	}
	
	/**
	 * Get Version Stamp
	 * @return string
	 */
	public function getVerStamp()
	{
		if(!isset($this->fields['ver-stamp']))
			return null;
			
		$verStamp = $this->fields['ver-stamp'];
		return $verStamp;
	}
	
	/**
	 * Set Version Stamp
	 * @param string $verStamp
	 */
	public function setVerStamp($verStamp)
	{
		return $this->fields['ver-stamp'] = $verStamp;
	}
	
}
