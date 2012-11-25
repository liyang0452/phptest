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
class QualityCenterLibraryPartFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'assigned-root-key',
			'description',
			'root-filter',
			'name',
			'lib-id',
			'id',
			'root-key',
			'root-entity',
			'ver-stamp',
		);
	}
	
	/**
	 * Get Assigned to Root Entity ID
	 * @return string
	 */
	public function getAssignedRootKey()
	{
		if(!isset($this->fields['assigned-root-key']))
			return null;
			
		$assignedRootKey = $this->fields['assigned-root-key'];
		return $assignedRootKey;
	}
	
	/**
	 * Set Assigned to Root Entity ID
	 * @param string $assignedRootKey
	 */
	public function setAssignedRootKey($assignedRootKey)
	{
		if(strlen($assignedRootKey) > 40)
			throw new QualityCenterInputException("Input [AssignedRootKey] value [$assignedRootKey] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($assignedRootKey), 40);
		
		return $this->fields['assigned-root-key'] = $assignedRootKey;
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
	public function getRootFilter()
	{
		if(!isset($this->fields['root-filter']))
			return null;
			
		$rootFilter = $this->fields['root-filter'];
		return $rootFilter;
	}
	
	/**
	 * Set Filter Data
	 * @param string $rootFilter
	 */
	public function setRootFilter($rootFilter)
	{
		return $this->fields['root-filter'] = $rootFilter;
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
	 * Get Owner Library ID
	 * @return string
	 */
	public function getLibId()
	{
		if(!isset($this->fields['lib-id']))
			return null;
			
		$libId = $this->fields['lib-id'];
		return $libId;
	}
	
	/**
	 * Set Owner Library ID
	 * @param string $libId
	 */
	public function setLibId($libId)
	{
		return $this->fields['lib-id'] = $libId;
	}
	
	/**
	 * Get Part ID
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
	 * Set Part ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Root Entity ID
	 * @return string
	 */
	public function getRootKey()
	{
		if(!isset($this->fields['root-key']))
			return null;
			
		$rootKey = $this->fields['root-key'];
		return $rootKey;
	}
	
	/**
	 * Set Root Entity ID
	 * @param string $rootKey
	 */
	public function setRootKey($rootKey)
	{
		if(strlen($rootKey) > 40)
			throw new QualityCenterInputException("Input [RootKey] value [$rootKey] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($rootKey), 40);
		
		return $this->fields['root-key'] = $rootKey;
	}
	
	/**
	 * Get Root Entity Type
	 * @return string
	 */
	public function getRootEntity()
	{
		if(!isset($this->fields['root-entity']))
			return null;
			
		$rootEntity = $this->fields['root-entity'];
		return $rootEntity;
	}
	
	/**
	 * Set Root Entity Type
	 * @param string $rootEntity
	 */
	public function setRootEntity($rootEntity)
	{
		if(strlen($rootEntity) > 30)
			throw new QualityCenterInputException("Input [RootEntity] value [$rootEntity] excceeded maximum length [30]", QualityCenterInputException::SIZE, strlen($rootEntity), 30);
		
		return $this->fields['root-entity'] = $rootEntity;
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
