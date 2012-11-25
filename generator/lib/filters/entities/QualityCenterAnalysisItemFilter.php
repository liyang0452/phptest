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
class QualityCenterAnalysisItemFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'parent-id',
			'id',
			'description',
			'filter-data',
			'is-public',
			'last-modified',
			'layout-data',
			'modified-by',
			'module',
			'name',
			'owner',
			'sub-type',
			'type',
			'ver-stamp',
		);
	}
	
	/**
	 * Get Analysis Item Folder ID
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
	 * Set Analysis Item Folder ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Analysis Item ID
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
	 * Set Analysis Item ID
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
	 * Get Filter Data
	 * @return string
	 */
	public function getFilterData()
	{
		if(!isset($this->fields['filter-data']))
			return null;
			
		$filterData = $this->fields['filter-data'];
		return $filterData;
	}
	
	/**
	 * Set Filter Data
	 * @param string $filterData
	 */
	public function setFilterData($filterData)
	{
		return $this->fields['filter-data'] = $filterData;
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
	 * Get Layout Data
	 * @return string
	 */
	public function getLayoutData()
	{
		if(!isset($this->fields['layout-data']))
			return null;
			
		$layoutData = $this->fields['layout-data'];
		return $layoutData;
	}
	
	/**
	 * Set Layout Data
	 * @param string $layoutData
	 */
	public function setLayoutData($layoutData)
	{
		return $this->fields['layout-data'] = $layoutData;
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
	 * Get Module
	 * @return string
	 */
	public function getModule()
	{
		if(!isset($this->fields['module']))
			return null;
			
		$module = $this->fields['module'];
		return $module;
	}
	
	/**
	 * Set Module
	 * @param string $module
	 */
	public function setModule($module)
	{
		if(strlen($module) > 255)
			throw new QualityCenterInputException("Input [Module] value [$module] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($module), 255);
		
		return $this->fields['module'] = $module;
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
	 * Get Sub Type
	 * @return string
	 */
	public function getSubType()
	{
		if(!isset($this->fields['sub-type']))
			return null;
			
		$subType = $this->fields['sub-type'];
		return $subType;
	}
	
	/**
	 * Set Sub Type
	 * @param string $subType
	 */
	public function setSubType($subType)
	{
		if(strlen($subType) > 60)
			throw new QualityCenterInputException("Input [SubType] value [$subType] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($subType), 60);
		
		return $this->fields['sub-type'] = $subType;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		if(!isset($this->fields['type']))
			return null;
			
		$type = $this->fields['type'];
		return $type;
	}
	
	/**
	 * Set Type
	 * @param string $type
	 */
	public function setType($type)
	{
		if(strlen($type) > 60)
			throw new QualityCenterInputException("Input [Type] value [$type] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($type), 60);
		
		return $this->fields['type'] = $type;
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
