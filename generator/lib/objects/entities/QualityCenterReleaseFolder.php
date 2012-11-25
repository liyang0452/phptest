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
class QualityCenterReleaseFolder extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'release-folder';
	}
	
	/**
	 * Get Attachment
	 * @return string
	 */
	public function getHasAttachments()
	{
		if(!isset($this->fields['has-attachments']))
			return null;
			
		$hasAttachments = $this->fields['has-attachments'];
		return $hasAttachments;
	}
	
	/**
	 * Set Attachment
	 * @param string $hasAttachments
	 */
	public function setHasAttachments($hasAttachments)
	{
		if(strlen($hasAttachments) > 1)
			throw new QualityCenterInputException("Input [HasAttachments] value [$hasAttachments] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasAttachments), 1);
		
		return $this->fields['has-attachments'] = $hasAttachments;
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
	 * Get Folder ID
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
	 * Set Folder ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
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
	 * Get Parent ID
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
	 * Set Parent ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Release folder Path
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
	 * Set Release folder Path
	 * @param string $path
	 */
	public function setPath($path)
	{
		if(strlen($path) > 255)
			throw new QualityCenterInputException("Input [Path] value [$path] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($path), 255);
		
		return $this->fields['path'] = $path;
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
