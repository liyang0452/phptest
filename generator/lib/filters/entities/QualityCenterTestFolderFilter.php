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
class QualityCenterTestFolderFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'hierarchical-path',
			'attachment',
			'description',
			'id',
			'name',
			'parent-id',
			'system',
			'view-order',
			'last-modified',
			'ver-stamp',
			'item-version',
		);
	}
	
	/**
	 * Get Absolute Path
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
	 * Set Absolute Path
	 * @param string $hierarchicalPath
	 */
	public function setHierarchicalPath($hierarchicalPath)
	{
		if(strlen($hierarchicalPath) > 255)
			throw new QualityCenterInputException("Input [HierarchicalPath] value [$hierarchicalPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($hierarchicalPath), 255);
		
		return $this->fields['hierarchical-path'] = $hierarchicalPath;
	}
	
	/**
	 * Get Attachment
	 * @return string
	 */
	public function getAttachment()
	{
		if(!isset($this->fields['attachment']))
			return null;
			
		$attachment = $this->fields['attachment'];
		return $attachment;
	}
	
	/**
	 * Set Attachment
	 * @param string $attachment
	 */
	public function setAttachment($attachment)
	{
		if(strlen($attachment) > 1)
			throw new QualityCenterInputException("Input [Attachment] value [$attachment] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($attachment), 1);
		
		return $this->fields['attachment'] = $attachment;
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
	 * Get Item Id
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
	 * Set Item Id
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
	 * Get Parent Folder
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
	 * Set Parent Folder
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get System
	 * @return string
	 */
	public function getSystem()
	{
		if(!isset($this->fields['system']))
			return null;
			
		$system = $this->fields['system'];
		return $system;
	}
	
	/**
	 * Set System
	 * @param string $system
	 */
	public function setSystem($system)
	{
		if(strlen($system) > 1)
			throw new QualityCenterInputException("Input [System] value [$system] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($system), 1);
		
		return $this->fields['system'] = $system;
	}
	
	/**
	 * Get View Order
	 * @return string
	 */
	public function getViewOrder()
	{
		if(!isset($this->fields['view-order']))
			return null;
			
		$viewOrder = $this->fields['view-order'];
		return $viewOrder;
	}
	
	/**
	 * Set View Order
	 * @param string $viewOrder
	 */
	public function setViewOrder($viewOrder)
	{
		return $this->fields['view-order'] = $viewOrder;
	}
	
	/**
	 * Get 
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
	 * Set 
	 * @param string $lastModified
	 */
	public function setLastModified($lastModified)
	{
		return $this->fields['last-modified'] = $lastModified;
	}
	
	/**
	 * Get 
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
	 * Set 
	 * @param string $verStamp
	 */
	public function setVerStamp($verStamp)
	{
		return $this->fields['ver-stamp'] = $verStamp;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getItemVersion()
	{
		if(!isset($this->fields['item-version']))
			return null;
			
		$itemVersion = $this->fields['item-version'];
		return $itemVersion;
	}
	
	/**
	 * Set 
	 * @param string $itemVersion
	 */
	public function setItemVersion($itemVersion)
	{
		return $this->fields['item-version'] = $itemVersion;
	}
	
}
