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
class QualityCenterRelease extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'release';
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
	 * Get Count of milestone in release
	 * @return string
	 */
	public function getMilestonesCount()
	{
		if(!isset($this->fields['milestones-count']))
			return null;
			
		$milestonesCount = $this->fields['milestones-count'];
		return $milestonesCount;
	}
	
	/**
	 * Set Count of milestone in release
	 * @param string $milestonesCount
	 */
	public function setMilestonesCount($milestonesCount)
	{
		if(strlen($milestonesCount) > 1)
			throw new QualityCenterInputException("Input [MilestonesCount] value [$milestonesCount] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($milestonesCount), 1);
		
		return $this->fields['milestones-count'] = $milestonesCount;
	}
	
	/**
	 * Get Count of scope items in release
	 * @return string
	 */
	public function getScopeItemsCount()
	{
		if(!isset($this->fields['scope-items-count']))
			return null;
			
		$scopeItemsCount = $this->fields['scope-items-count'];
		return $scopeItemsCount;
	}
	
	/**
	 * Set Count of scope items in release
	 * @param string $scopeItemsCount
	 */
	public function setScopeItemsCount($scopeItemsCount)
	{
		if(strlen($scopeItemsCount) > 1)
			throw new QualityCenterInputException("Input [ScopeItemsCount] value [$scopeItemsCount] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($scopeItemsCount), 1);
		
		return $this->fields['scope-items-count'] = $scopeItemsCount;
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
	 * Get End Date as linux timestamp
	 * @return int
	 */
	public function getEndDate()
	{
		if(!isset($this->fields['end-date']))
			return null;
			
		$endDate = $this->fields['end-date'];
		$endDateDate = date_parse_from_format('Y-m-d', $endDate);
		$endDate = mktime(0, 0, 0, $endDateDate['month'], $endDateDate['day'], $endDateDate['year']);
		
		return $endDate;
	}
	
	/**
	 * Set End Date as linux timestamp
	 * @param int $endDate
	 */
	public function setEndDate($endDate)
	{
		$endDate = date('Y-m-d', $endDate);
		return $this->fields['end-date'] = $endDate;
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
	 * Get Release Folder ID
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
	 * Set Release Folder ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Release ID
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
	 * Set Release ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Release Status
	 * @return string
	 */
	public function getUser01()
	{
		if(!isset($this->fields['user-01']))
			return null;
			
		$user01 = $this->fields['user-01'];
		return $user01;
	}
	
	/**
	 * Set Release Status
	 * @param string $user01
	 */
	public function setUser01($user01)
	{
		$validValues = array(
			'Requirement Authoring',
			'Requirement Review',
			'Test Authoring',
		);
		if(!in_array($user01, $validValues))
			throw new QualityCenterInputException("Input [User01] value [$user01] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user01, $validValues);
		
		return $this->fields['user-01'] = $user01;
	}
	
	/**
	 * Get Requirement count
	 * @return string
	 */
	public function getReqCount()
	{
		if(!isset($this->fields['req-count']))
			return null;
			
		$reqCount = $this->fields['req-count'];
		return $reqCount;
	}
	
	/**
	 * Set Requirement count
	 * @param string $reqCount
	 */
	public function setReqCount($reqCount)
	{
		return $this->fields['req-count'] = $reqCount;
	}
	
	/**
	 * Get Start Date as linux timestamp
	 * @return int
	 */
	public function getStartDate()
	{
		if(!isset($this->fields['start-date']))
			return null;
			
		$startDate = $this->fields['start-date'];
		$startDateDate = date_parse_from_format('Y-m-d', $startDate);
		$startDate = mktime(0, 0, 0, $startDateDate['month'], $startDateDate['day'], $startDateDate['year']);
		
		return $startDate;
	}
	
	/**
	 * Set Start Date as linux timestamp
	 * @param int $startDate
	 */
	public function setStartDate($startDate)
	{
		$startDate = date('Y-m-d', $startDate);
		return $this->fields['start-date'] = $startDate;
	}
	
	/**
	 * Get Version
	 * @return string
	 */
	public function getUser02()
	{
		if(!isset($this->fields['user-02']))
			return null;
			
		$user02 = $this->fields['user-02'];
		return $user02;
	}
	
	/**
	 * Set Version
	 * @param string $user02
	 */
	public function setUser02($user02)
	{
		$validValues = array(
			'Eagle',
			'Falcon',
			'Gemini',
			'Post Eagle',
		);
		if(!in_array($user02, $validValues))
			throw new QualityCenterInputException("Input [User02] value [$user02] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user02, $validValues);
		
		return $this->fields['user-02'] = $user02;
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
