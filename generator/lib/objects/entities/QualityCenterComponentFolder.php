<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class QualityCenterComponentFolder extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'component-folder';
	}
	
	/**
	 * Get Component Folder ID
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
	 * Set Component Folder ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
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
	 * Get Father ID
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
	 * Set Father ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Logical path
	 * @return string
	 */
	public function getLogicalPath()
	{
		if(!isset($this->fields['logical-path']))
			return null;
			
		$logicalPath = $this->fields['logical-path'];
		return $logicalPath;
	}
	
	/**
	 * Set Logical path
	 * @param string $logicalPath
	 */
	public function setLogicalPath($logicalPath)
	{
		if(strlen($logicalPath) > 255)
			throw new QualityCenterInputException("Input [LogicalPath] value [$logicalPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($logicalPath), 255);
		
		return $this->fields['logical-path'] = $logicalPath;
	}
	
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		if(!isset($this->fields['name']))
			return null;
			
		$name = $this->fields['name'];
		return $name;
	}
	
	/**
	 * Set Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Path
	 * @return string
	 */
	public function getHierarchicalPath()
	{
		if(!isset($this->fields['hierarchical-path']))
			return null;
			
		$hierarchicalPath = $this->fields['hierarchical-path'];
		return $hierarchicalPath;
	}
	
	/**
	 * Set Path
	 * @param string $hierarchicalPath
	 */
	public function setHierarchicalPath($hierarchicalPath)
	{
		if(strlen($hierarchicalPath) > 255)
			throw new QualityCenterInputException("Input [HierarchicalPath] value [$hierarchicalPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($hierarchicalPath), 255);
		
		return $this->fields['hierarchical-path'] = $hierarchicalPath;
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
