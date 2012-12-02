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
class QualityCenterAttachment extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'attachment';
	}
	
	/**
	 * Get Attachment Current Version
	 * @return string
	 */
	public function getVcCurVer()
	{
		if(!isset($this->fields['vc-cur-ver']))
			return null;
			
		$vcCurVer = $this->fields['vc-cur-ver'];
		return $vcCurVer;
	}
	
	/**
	 * Set Attachment Current Version
	 * @param string $vcCurVer
	 */
	public function setVcCurVer($vcCurVer)
	{
		if(strlen($vcCurVer) > 50)
			throw new QualityCenterInputException("Input [VcCurVer] value [$vcCurVer] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($vcCurVer), 50);
		
		return $this->fields['vc-cur-ver'] = $vcCurVer;
	}
	
	/**
	 * Get Attachment Order
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
	 * Set Attachment Order
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get File Size
	 * @return string
	 */
	public function getFileSize()
	{
		if(!isset($this->fields['file-size']))
			return null;
			
		$fileSize = $this->fields['file-size'];
		return $fileSize;
	}
	
	/**
	 * Set File Size
	 * @param string $fileSize
	 */
	public function setFileSize($fileSize)
	{
		return $this->fields['file-size'] = $fileSize;
	}
	
	/**
	 * Get Last Modified
	 * @return string
	 */
	public function getLastModified()
	{
		if(!isset($this->fields['last-modified']))
			return null;
			
		$lastModified = $this->fields['last-modified'];
		return $lastModified;
	}
	
	/**
	 * Set Last Modified
	 * @param string $lastModified
	 */
	public function setLastModified($lastModified)
	{
		return $this->fields['last-modified'] = $lastModified;
	}
	
	/**
	 * Get Owner ID
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
	 * Set Owner ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		if(strlen($parentId) > 40)
			throw new QualityCenterInputException("Input [ParentId] value [$parentId] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($parentId), 40);
		
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Owner Type
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
	 * Set Owner Type
	 * @param string $parentType
	 */
	public function setParentType($parentType)
	{
		if(strlen($parentType) > 10)
			throw new QualityCenterInputException("Input [ParentType] value [$parentType] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($parentType), 10);
		
		return $this->fields['parent-type'] = $parentType;
	}
	
	/**
	 * Get Reference Description
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
	 * Set Reference Description
	 * @param string $description
	 */
	public function setDescription($description)
	{
		return $this->fields['description'] = $description;
	}
	
	/**
	 * Get Reference Name
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
	 * Set Reference Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Reference Sub Type
	 * @return string
	 */
	public function getRefSubtype()
	{
		if(!isset($this->fields['ref-subtype']))
			return null;
			
		$refSubtype = $this->fields['ref-subtype'];
		return $refSubtype;
	}
	
	/**
	 * Set Reference Sub Type
	 * @param string $refSubtype
	 */
	public function setRefSubtype($refSubtype)
	{
		return $this->fields['ref-subtype'] = $refSubtype;
	}
	
	/**
	 * Get Reference Type
	 * @return string
	 */
	public function getRefType()
	{
		if(!isset($this->fields['ref-type']))
			return null;
			
		$refType = $this->fields['ref-type'];
		return $refType;
	}
	
	/**
	 * Set Reference Type
	 * @param string $refType
	 */
	public function setRefType($refType)
	{
		if(strlen($refType) > 20)
			throw new QualityCenterInputException("Input [RefType] value [$refType] excceeded maximum length [20]", QualityCenterInputException::SIZE, strlen($refType), 20);
		
		return $this->fields['ref-type'] = $refType;
	}
	
	/**
	 * Get Version Checked Out By
	 * @return string
	 */
	public function getVcUserName()
	{
		if(!isset($this->fields['vc-user-name']))
			return null;
			
		$vcUserName = $this->fields['vc-user-name'];
		return $vcUserName;
	}
	
	/**
	 * Set Version Checked Out By
	 * @param string $vcUserName
	 */
	public function setVcUserName($vcUserName)
	{
		return $this->fields['vc-user-name'] = $vcUserName;
	}
	
}
