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
class QualityCenterTestSetFolder extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-set-folder';
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
	 * Get Modified
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
	 * Set Modified
	 * @param string $lastModified
	 */
	public function setLastModified($lastModified)
	{
		return $this->fields['last-modified'] = $lastModified;
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
	 * Get Number of sons
	 * @return string
	 */
	public function getNoOfSons()
	{
		if(!isset($this->fields['no-of-sons']))
			return null;
			
		$noOfSons = $this->fields['no-of-sons'];
		return $noOfSons;
	}
	
	/**
	 * Set Number of sons
	 * @param string $noOfSons
	 */
	public function setNoOfSons($noOfSons)
	{
		return $this->fields['no-of-sons'] = $noOfSons;
	}
	
	/**
	 * Get Target Cycle
	 * @return string
	 */
	public function getAssignRcyc()
	{
		if(!isset($this->fields['assign-rcyc']))
			return null;
			
		$assignRcyc = $this->fields['assign-rcyc'];
		return $assignRcyc;
	}
	
	/**
	 * Set Target Cycle
	 * @param string $assignRcyc
	 */
	public function setAssignRcyc($assignRcyc)
	{
		return $this->fields['assign-rcyc'] = $assignRcyc;
	}
	
	/**
	 * Get Test Set Folder Father ID
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
	 * Set Test Set Folder Father ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Test Set Folder ID
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
	 * Set Test Set Folder ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Test Set Folder Order ID
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
	 * Set Test Set Folder Order ID
	 * @param string $viewOrder
	 */
	public function setViewOrder($viewOrder)
	{
		return $this->fields['view-order'] = $viewOrder;
	}
	
	/**
	 * Get Test Set Folder Path
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
	 * Set Test Set Folder Path
	 * @param string $hierarchicalPath
	 */
	public function setHierarchicalPath($hierarchicalPath)
	{
		if(strlen($hierarchicalPath) > 255)
			throw new QualityCenterInputException("Input [HierarchicalPath] value [$hierarchicalPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($hierarchicalPath), 255);
		
		return $this->fields['hierarchical-path'] = $hierarchicalPath;
	}
	
	/**
	 * Get WorkFlow
	 * @return string
	 */
	public function getWorkflow()
	{
		if(!isset($this->fields['workflow']))
			return null;
			
		$workflow = $this->fields['workflow'];
		return $workflow;
	}
	
	/**
	 * Set WorkFlow
	 * @param string $workflow
	 */
	public function setWorkflow($workflow)
	{
		return $this->fields['workflow'] = $workflow;
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
	
}
