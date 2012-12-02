<?php
/**
 * @package External
 * @subpackage qc.filters
 */
require_once __DIR__ . '/../QualityCenterFilter.php';
require_once __DIR__ . '/../expressions/QualityCenterExpression.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterMsiFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'description',
			'id',
			'label',
			'parent-id',
			'vts',
			'scope-item-id',
			'ver-stamp',
		);
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		if(!isset($this->fields['description']))
			return null;
			
		$description = $this->fields['description'];
		return $description;
	}
	
	/**
	 * Set Description
	 * @param string $description
	 */
	public function setDescription($description)
	{
		return $this->fields['description'] = $description;
	}
	
	/**
	 * Get ID
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
	 * Set ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Label
	 * @return string
	 */
	public function getLabel()
	{
		if(!isset($this->fields['label']))
			return null;
			
		$label = $this->fields['label'];
		return $label;
	}
	
	/**
	 * Set Label
	 * @param string $label
	 */
	public function setLabel($label)
	{
		if(strlen($label) > 20)
			throw new QualityCenterInputException("Input [Label] value [$label] excceeded maximum length [20]", QualityCenterInputException::SIZE, strlen($label), 20);
		
		return $this->fields['label'] = $label;
	}
	
	/**
	 * Get Milestone ID
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
	 * Set Milestone ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Modified
	 * @return string
	 */
	public function getVts()
	{
		if(!isset($this->fields['vts']))
			return null;
			
		$vts = $this->fields['vts'];
		return $vts;
	}
	
	/**
	 * Set Modified
	 * @param string $vts
	 */
	public function setVts($vts)
	{
		return $this->fields['vts'] = $vts;
	}
	
	/**
	 * Get Scope Item ID
	 * @return string
	 */
	public function getScopeItemId()
	{
		if(!isset($this->fields['scope-item-id']))
			return null;
			
		$scopeItemId = $this->fields['scope-item-id'];
		return $scopeItemId;
	}
	
	/**
	 * Set Scope Item ID
	 * @param string $scopeItemId
	 */
	public function setScopeItemId($scopeItemId)
	{
		return $this->fields['scope-item-id'] = $scopeItemId;
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
