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
class QualityCenterFavoriteFolderFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'path',
			'id',
			'is-public',
			'module-id',
			'name',
			'owner',
			'parent-id',
			'ver-stamp',
		);
	}
	
	/**
	 * Get Favorite folder Path
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
	 * Set Favorite folder Path
	 * @param string $path
	 */
	public function setPath($path)
	{
		if(strlen($path) > 255)
			throw new QualityCenterInputException("Input [Path] value [$path] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($path), 255);
		
		return $this->fields['path'] = $path;
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
	 * Get Module
	 * @return string
	 */
	public function getModuleId()
	{
		if(!isset($this->fields['module-id']))
			return null;
			
		$moduleId = $this->fields['module-id'];
		return $moduleId;
	}
	
	/**
	 * Set Module
	 * @param string $moduleId
	 */
	public function setModuleId($moduleId)
	{
		if(strlen($moduleId) > 50)
			throw new QualityCenterInputException("Input [ModuleId] value [$moduleId] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($moduleId), 50);
		
		return $this->fields['module-id'] = $moduleId;
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
