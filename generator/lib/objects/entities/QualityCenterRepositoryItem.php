<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';
require_once __DIR__ . '/../../filters/expressions/QualityCenterExpression.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class QualityCenterRepositoryItem extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'repository-item';
	}
	
	/**
	 * Get Filter
	 * @return string
	 */
	public function getFilter()
	{
		if(!isset($this->fields['filter']))
			return null;
			
		$filter = $this->fields['filter'];
		return $filter;
	}
	
	/**
	 * Set Filter
	 * @param string $filter
	 */
	public function setFilter($filter)
	{
		return $this->fields['filter'] = $filter;
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
	 * Get Owner Id
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
	 * Set Owner Id
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Owner type
	 * @return string
	 */
	public function getParentType()
	{
		if(!isset($this->fields['parent-type']))
			return null;
			
		$parentType = $this->fields['parent-type'];
		return $parentType;
	}
	
	/**
	 * Set Owner type
	 * @param string $parentType
	 */
	public function setParentType($parentType)
	{
		if(strlen($parentType) > 40)
			throw new QualityCenterInputException("Input [ParentType] value [$parentType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($parentType), 40);
		
		return $this->fields['parent-type'] = $parentType;
	}
	
	/**
	 * Get Repository item path
	 * @return string
	 */
	public function getPath()
	{
		if(!isset($this->fields['path']))
			return null;
			
		$path = $this->fields['path'];
		return $path;
	}
	
	/**
	 * Set Repository item path
	 * @param string $path
	 */
	public function setPath($path)
	{
		if(strlen($path) > 255)
			throw new QualityCenterInputException("Input [Path] value [$path] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($path), 255);
		
		return $this->fields['path'] = $path;
	}
	
	/**
	 * Get Support Copy Paste
	 * @return string
	 */
	public function getSupportCopyPaste()
	{
		if(!isset($this->fields['support-copy-paste']))
			return null;
			
		$supportCopyPaste = $this->fields['support-copy-paste'];
		return $supportCopyPaste;
	}
	
	/**
	 * Set Support Copy Paste
	 * @param string $supportCopyPaste
	 */
	public function setSupportCopyPaste($supportCopyPaste)
	{
		return $this->fields['support-copy-paste'] = $supportCopyPaste;
	}
	
	/**
	 * Get Support Versioning
	 * @return string
	 */
	public function getSupportVersioning()
	{
		if(!isset($this->fields['support-versioning']))
			return null;
			
		$supportVersioning = $this->fields['support-versioning'];
		return $supportVersioning;
	}
	
	/**
	 * Set Support Versioning
	 * @param string $supportVersioning
	 */
	public function setSupportVersioning($supportVersioning)
	{
		return $this->fields['support-versioning'] = $supportVersioning;
	}
	
	/**
	 * Get Version Checked Out By
	 * @return string
	 */
	public function getVcCheckoutUserName()
	{
		if(!isset($this->fields['vc-checkout-user-name']))
			return null;
			
		$vcCheckoutUserName = $this->fields['vc-checkout-user-name'];
		return $vcCheckoutUserName;
	}
	
	/**
	 * Set Version Checked Out By
	 * @param string $vcCheckoutUserName
	 */
	public function setVcCheckoutUserName($vcCheckoutUserName)
	{
		return $this->fields['vc-checkout-user-name'] = $vcCheckoutUserName;
	}
	
}
