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
class QualityCenterBpmPath extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bpm-path';
	}
	
	/**
	 * Get Asset relation dependencies status
	 * @return string
	 */
	public function getHasDependencies()
	{
		if(!isset($this->fields['has-dependencies']))
			return null;
			
		$hasDependencies = $this->fields['has-dependencies'];
		return $hasDependencies;
	}
	
	/**
	 * Set Asset relation dependencies status
	 * @param string $hasDependencies
	 */
	public function setHasDependencies($hasDependencies)
	{
		if(strlen($hasDependencies) > 1)
			throw new QualityCenterInputException("Input [HasDependencies] value [$hasDependencies] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasDependencies), 1);
		
		return $this->fields['has-dependencies'] = $hasDependencies;
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
	 * Get Checksum
	 * @return string
	 */
	public function getChecksum()
	{
		if(!isset($this->fields['checksum']))
			return null;
			
		$checksum = $this->fields['checksum'];
		return $checksum;
	}
	
	/**
	 * Set Checksum
	 * @param string $checksum
	 */
	public function setChecksum($checksum)
	{
		return $this->fields['checksum'] = $checksum;
	}
	
	/**
	 * Get Comments
	 * @return string
	 */
	public function getComments()
	{
		if(!isset($this->fields['comments']))
			return null;
			
		$comments = $this->fields['comments'];
		return $comments;
	}
	
	/**
	 * Set Comments
	 * @param string $comments
	 */
	public function setComments($comments)
	{
		return $this->fields['comments'] = $comments;
	}
	
	/**
	 * Get Created By
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
	 * Set Created By
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Creation Date
	 * @return string
	 */
	public function getCreationTime()
	{
		if(!isset($this->fields['creation-time']))
			return null;
			
		$creationTime = $this->fields['creation-time'];
		return $creationTime;
	}
	
	/**
	 * Set Creation Date
	 * @param string $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		return $this->fields['creation-time'] = $creationTime;
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
	public function getVts()
	{
		if(!isset($this->fields['vts']))
			return null;
			
		$vts = $this->fields['vts'];
		return $vts;
	}
	
	/**
	 * Set Modified
	 * @param string $vts
	 */
	public function setVts($vts)
	{
		return $this->fields['vts'] = $vts;
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
	 * Get Number of Activities
	 * @return string
	 */
	public function getActivitiesCount()
	{
		if(!isset($this->fields['activities-count']))
			return null;
			
		$activitiesCount = $this->fields['activities-count'];
		return $activitiesCount;
	}
	
	/**
	 * Set Number of Activities
	 * @param string $activitiesCount
	 */
	public function setActivitiesCount($activitiesCount)
	{
		return $this->fields['activities-count'] = $activitiesCount;
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
	 * Get Path Description
	 * @return string
	 */
	public function getPathDescription()
	{
		if(!isset($this->fields['path-description']))
			return null;
			
		$pathDescription = $this->fields['path-description'];
		return $pathDescription;
	}
	
	/**
	 * Set Path Description
	 * @param string $pathDescription
	 */
	public function setPathDescription($pathDescription)
	{
		return $this->fields['path-description'] = $pathDescription;
	}
	
	/**
	 * Get Path ID
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
	 * Set Path ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Priority
	 * @return string
	 */
	public function getPriority()
	{
		if(!isset($this->fields['priority']))
			return null;
			
		$priority = $this->fields['priority'];
		return $priority;
	}
	
	/**
	 * Set Priority
	 * @param string $priority
	 */
	public function setPriority($priority)
	{
		return $this->fields['priority'] = $priority;
	}
	
	/**
	 * Get Representative Req ID
	 * @return string
	 */
	public function getRepReqId()
	{
		if(!isset($this->fields['rep-req-id']))
			return null;
			
		$repReqId = $this->fields['rep-req-id'];
		return $repReqId;
	}
	
	/**
	 * Set Representative Req ID
	 * @param string $repReqId
	 */
	public function setRepReqId($repReqId)
	{
		return $this->fields['rep-req-id'] = $repReqId;
	}
	
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		if(!isset($this->fields['status']))
			return null;
			
		$status = $this->fields['status'];
		return $status;
	}
	
	/**
	 * Set Status
	 * @param string $status
	 */
	public function setStatus($status)
	{
		if(strlen($status) > 40)
			throw new QualityCenterInputException("Input [Status] value [$status] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($status), 40);
		
		return $this->fields['status'] = $status;
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
	
	/**
	 * Get 
	 * @return string
	 */
	public function getTextSync()
	{
		if(!isset($this->fields['text-sync']))
			return null;
			
		$textSync = $this->fields['text-sync'];
		return $textSync;
	}
	
	/**
	 * Set 
	 * @param string $textSync
	 */
	public function setTextSync($textSync)
	{
		if(strlen($textSync) > 1)
			throw new QualityCenterInputException("Input [TextSync] value [$textSync] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($textSync), 1);
		
		return $this->fields['text-sync'] = $textSync;
	}
	
}
