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
class QualityCenterLibrary extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'library';
	}
	
	/**
	 * Get Asynchronous status
	 * @return string
	 */
	public function getAsynchStatus()
	{
		if(!isset($this->fields['asynch-status']))
			return null;
			
		$asynchStatus = $this->fields['asynch-status'];
		return $asynchStatus;
	}
	
	/**
	 * Set Asynchronous status
	 * @param string $asynchStatus
	 */
	public function setAsynchStatus($asynchStatus)
	{
		return $this->fields['asynch-status'] = $asynchStatus;
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
	 * Get Auto complete type
	 * @return string
	 */
	public function getAutocompleteType()
	{
		if(!isset($this->fields['autocomplete-type']))
			return null;
			
		$autocompleteType = $this->fields['autocomplete-type'];
		return $autocompleteType;
	}
	
	/**
	 * Set Auto complete type
	 * @param string $autocompleteType
	 */
	public function setAutocompleteType($autocompleteType)
	{
		return $this->fields['autocomplete-type'] = $autocompleteType;
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
	 * Get Created From Library Owner
	 * @return string
	 */
	public function getCfrCreatedBy()
	{
		if(!isset($this->fields['cfr-created-by']))
			return null;
			
		$cfrCreatedBy = $this->fields['cfr-created-by'];
		return $cfrCreatedBy;
	}
	
	/**
	 * Set Created From Library Owner
	 * @param string $cfrCreatedBy
	 */
	public function setCfrCreatedBy($cfrCreatedBy)
	{
		return $this->fields['cfr-created-by'] = $cfrCreatedBy;
	}
	
	/**
	 * Get Created from Baseline ID
	 * @return string
	 */
	public function getCfrBaselineId()
	{
		if(!isset($this->fields['cfr-baseline-id']))
			return null;
			
		$cfrBaselineId = $this->fields['cfr-baseline-id'];
		return $cfrBaselineId;
	}
	
	/**
	 * Set Created from Baseline ID
	 * @param string $cfrBaselineId
	 */
	public function setCfrBaselineId($cfrBaselineId)
	{
		return $this->fields['cfr-baseline-id'] = $cfrBaselineId;
	}
	
	/**
	 * Get Created from Baseline Name
	 * @return string
	 */
	public function getCfrBaselineOrigname()
	{
		if(!isset($this->fields['cfr-baseline-origname']))
			return null;
			
		$cfrBaselineOrigname = $this->fields['cfr-baseline-origname'];
		return $cfrBaselineOrigname;
	}
	
	/**
	 * Set Created from Baseline Name
	 * @param string $cfrBaselineOrigname
	 */
	public function setCfrBaselineOrigname($cfrBaselineOrigname)
	{
		if(strlen($cfrBaselineOrigname) > 255)
			throw new QualityCenterInputException("Input [CfrBaselineOrigname] value [$cfrBaselineOrigname] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($cfrBaselineOrigname), 255);
		
		return $this->fields['cfr-baseline-origname'] = $cfrBaselineOrigname;
	}
	
	/**
	 * Get Created from Domain Name
	 * @return string
	 */
	public function getCfrDomainName()
	{
		if(!isset($this->fields['cfr-domain-name']))
			return null;
			
		$cfrDomainName = $this->fields['cfr-domain-name'];
		return $cfrDomainName;
	}
	
	/**
	 * Set Created from Domain Name
	 * @param string $cfrDomainName
	 */
	public function setCfrDomainName($cfrDomainName)
	{
		if(strlen($cfrDomainName) > 255)
			throw new QualityCenterInputException("Input [CfrDomainName] value [$cfrDomainName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($cfrDomainName), 255);
		
		return $this->fields['cfr-domain-name'] = $cfrDomainName;
	}
	
	/**
	 * Get Created from Library ID
	 * @return string
	 */
	public function getCfrLibraryId()
	{
		if(!isset($this->fields['cfr-library-id']))
			return null;
			
		$cfrLibraryId = $this->fields['cfr-library-id'];
		return $cfrLibraryId;
	}
	
	/**
	 * Set Created from Library ID
	 * @param string $cfrLibraryId
	 */
	public function setCfrLibraryId($cfrLibraryId)
	{
		return $this->fields['cfr-library-id'] = $cfrLibraryId;
	}
	
	/**
	 * Get Created from Library Name
	 * @return string
	 */
	public function getCfrLibraryOrigname()
	{
		if(!isset($this->fields['cfr-library-origname']))
			return null;
			
		$cfrLibraryOrigname = $this->fields['cfr-library-origname'];
		return $cfrLibraryOrigname;
	}
	
	/**
	 * Set Created from Library Name
	 * @param string $cfrLibraryOrigname
	 */
	public function setCfrLibraryOrigname($cfrLibraryOrigname)
	{
		if(strlen($cfrLibraryOrigname) > 255)
			throw new QualityCenterInputException("Input [CfrLibraryOrigname] value [$cfrLibraryOrigname] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($cfrLibraryOrigname), 255);
		
		return $this->fields['cfr-library-origname'] = $cfrLibraryOrigname;
	}
	
	/**
	 * Get Created from Project Name
	 * @return string
	 */
	public function getCfrProjectName()
	{
		if(!isset($this->fields['cfr-project-name']))
			return null;
			
		$cfrProjectName = $this->fields['cfr-project-name'];
		return $cfrProjectName;
	}
	
	/**
	 * Set Created from Project Name
	 * @param string $cfrProjectName
	 */
	public function setCfrProjectName($cfrProjectName)
	{
		if(strlen($cfrProjectName) > 255)
			throw new QualityCenterInputException("Input [CfrProjectName] value [$cfrProjectName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($cfrProjectName), 255);
		
		return $this->fields['cfr-project-name'] = $cfrProjectName;
	}
	
	/**
	 * Get Created or Synchronized to Baseline ID
	 * @return string
	 */
	public function getLastSyncToBaselineId()
	{
		if(!isset($this->fields['last-sync-to-baseline-id']))
			return null;
			
		$lastSyncToBaselineId = $this->fields['last-sync-to-baseline-id'];
		return $lastSyncToBaselineId;
	}
	
	/**
	 * Set Created or Synchronized to Baseline ID
	 * @param string $lastSyncToBaselineId
	 */
	public function setLastSyncToBaselineId($lastSyncToBaselineId)
	{
		return $this->fields['last-sync-to-baseline-id'] = $lastSyncToBaselineId;
	}
	
	/**
	 * Get Creation Date as linux timestamp
	 * @return int
	 */
	public function getCreationDate()
	{
		if(!isset($this->fields['creation-date']))
			return null;
			
		$creationDate = $this->fields['creation-date'];
		$creationDateDate = date_parse_from_format('Y-m-d', $creationDate);
		$creationDate = mktime(0, 0, 0, $creationDateDate['month'], $creationDateDate['day'], $creationDateDate['year']);
		
		return $creationDate;
	}
	
	/**
	 * Set Creation Date as linux timestamp
	 * @param int $creationDate
	 */
	public function setCreationDate($creationDate)
	{
		$creationDate = date('Y-m-d', $creationDate);
		return $this->fields['creation-date'] = $creationDate;
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
	 * Get Last synchronization date as linux timestamp
	 * @return int
	 */
	public function getCfrLastSyncDate()
	{
		if(!isset($this->fields['cfr-last-sync-date']))
			return null;
			
		$cfrLastSyncDate = $this->fields['cfr-last-sync-date'];
		$cfrLastSyncDateDate = date_parse_from_format('Y-m-d', $cfrLastSyncDate);
		$cfrLastSyncDate = mktime(0, 0, 0, $cfrLastSyncDateDate['month'], $cfrLastSyncDateDate['day'], $cfrLastSyncDateDate['year']);
		
		return $cfrLastSyncDate;
	}
	
	/**
	 * Set Last synchronization date as linux timestamp
	 * @param int $cfrLastSyncDate
	 */
	public function setCfrLastSyncDate($cfrLastSyncDate)
	{
		$cfrLastSyncDate = date('Y-m-d', $cfrLastSyncDate);
		return $this->fields['cfr-last-sync-date'] = $cfrLastSyncDate;
	}
	
	/**
	 * Get Library ID
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
	 * Set Library ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Library Type
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
	 * Set Library Type
	 * @param string $type
	 */
	public function setType($type)
	{
		return $this->fields['type'] = $type;
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
