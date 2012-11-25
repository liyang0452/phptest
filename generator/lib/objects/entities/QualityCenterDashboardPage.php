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
class QualityCenterDashboardPage extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'dashboard-page';
	}
	
	/**
	 * Get Dashboard Folder ID
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
	 * Set Dashboard Folder ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Dashboard Page ID
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
	 * Set Dashboard Page ID
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
	 * Get Is Public
	 * @return string
	 */
	public function getIsPublic()
	{
		if(!isset($this->fields['is-public']))
			return null;
			
		$isPublic = $this->fields['is-public'];
		return $isPublic;
	}
	
	/**
	 * Set Is Public
	 * @param string $isPublic
	 */
	public function setIsPublic($isPublic)
	{
		if(strlen($isPublic) > 1)
			throw new QualityCenterInputException("Input [IsPublic] value [$isPublic] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isPublic), 1);
		
		return $this->fields['is-public'] = $isPublic;
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
	 * Get Modified By
	 * @return string
	 */
	public function getModifiedBy()
	{
		if(!isset($this->fields['modified-by']))
			return null;
			
		$modifiedBy = $this->fields['modified-by'];
		return $modifiedBy;
	}
	
	/**
	 * Set Modified By
	 * @param string $modifiedBy
	 */
	public function setModifiedBy($modifiedBy)
	{
		if(strlen($modifiedBy) > 60)
			throw new QualityCenterInputException("Input [ModifiedBy] value [$modifiedBy] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($modifiedBy), 60);
		
		return $this->fields['modified-by'] = $modifiedBy;
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
	 * Get Owner
	 * @return string
	 */
	public function getOwner()
	{
		if(!isset($this->fields['owner']))
			return null;
			
		$owner = $this->fields['owner'];
		return $owner;
	}
	
	/**
	 * Set Owner
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		if(strlen($owner) > 60)
			throw new QualityCenterInputException("Input [Owner] value [$owner] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($owner), 60);
		
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		if(!isset($this->fields['title']))
			return null;
			
		$title = $this->fields['title'];
		return $title;
	}
	
	/**
	 * Set Title
	 * @param string $title
	 */
	public function setTitle($title)
	{
		if(strlen($title) > 255)
			throw new QualityCenterInputException("Input [Title] value [$title] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($title), 255);
		
		return $this->fields['title'] = $title;
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
