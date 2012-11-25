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
class QualityCenterReleaseCycle extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'release-cycle';
	}
	
	/**
	 * Get 1. Login version
	 * @return string
	 */
	public function getUser08()
	{
		if(!isset($this->fields['user-08']))
			return null;
			
		$user08 = $this->fields['user-08'];
		return $user08;
	}
	
	/**
	 * Set 1. Login version
	 * @param string $user08
	 */
	public function setUser08($user08)
	{
		if(strlen($user08) > 40)
			throw new QualityCenterInputException("Input [User08] value [$user08] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($user08), 40);
		
		return $this->fields['user-08'] = $user08;
	}
	
	/**
	 * Get 2. KMC version
	 * @return string
	 */
	public function getUser06()
	{
		if(!isset($this->fields['user-06']))
			return null;
			
		$user06 = $this->fields['user-06'];
		return $user06;
	}
	
	/**
	 * Set 2. KMC version
	 * @param string $user06
	 */
	public function setUser06($user06)
	{
		if(strlen($user06) > 40)
			throw new QualityCenterInputException("Input [User06] value [$user06] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($user06), 40);
		
		return $this->fields['user-06'] = $user06;
	}
	
	/**
	 * Get 3. KDP version
	 * @return string
	 */
	public function getUser07()
	{
		if(!isset($this->fields['user-07']))
			return null;
			
		$user07 = $this->fields['user-07'];
		return $user07;
	}
	
	/**
	 * Set 3. KDP version
	 * @param string $user07
	 */
	public function setUser07($user07)
	{
		if(strlen($user07) > 40)
			throw new QualityCenterInputException("Input [User07] value [$user07] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($user07), 40);
		
		return $this->fields['user-07'] = $user07;
	}
	
	/**
	 * Get 4. KCW version
	 * @return string
	 */
	public function getUser09()
	{
		if(!isset($this->fields['user-09']))
			return null;
			
		$user09 = $this->fields['user-09'];
		return $user09;
	}
	
	/**
	 * Set 4. KCW version
	 * @param string $user09
	 */
	public function setUser09($user09)
	{
		if(strlen($user09) > 40)
			throw new QualityCenterInputException("Input [User09] value [$user09] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($user09), 40);
		
		return $this->fields['user-09'] = $user09;
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
	 * Get Change Type
	 * @return string
	 */
	public function getUser04()
	{
		if(!isset($this->fields['user-04']))
			return null;
			
		$user04 = $this->fields['user-04'];
		return $user04;
	}
	
	/**
	 * Set Change Type
	 * @param string $user04
	 */
	public function setUser04($user04)
	{
		$validValues = array(
			'Hot fix',
			'New Drop to QA',
			'Patch',
			'Release',
		);
		if(!in_array($user04, $validValues))
			throw new QualityCenterInputException("Input [User04] value [$user04] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user04, $validValues);
		
		return $this->fields['user-04'] = $user04;
	}
	
	/**
	 * Get Cycle ID
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
	 * Set Cycle ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Cycle name
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
	 * Set Cycle name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
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
	 * Get Release ID
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
	 * Set Release ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
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
	 * Get Server Tag
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
	 * Set Server Tag
	 * @param string $user02
	 */
	public function setUser02($user02)
	{
		if(strlen($user02) > 40)
			throw new QualityCenterInputException("Input [User02] value [$user02] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($user02), 40);
		
		return $this->fields['user-02'] = $user02;
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
	 * Get Testset folder count
	 * @return string
	 */
	public function getCfCount()
	{
		if(!isset($this->fields['cf-count']))
			return null;
			
		$cfCount = $this->fields['cf-count'];
		return $cfCount;
	}
	
	/**
	 * Set Testset folder count
	 * @param string $cfCount
	 */
	public function setCfCount($cfCount)
	{
		return $this->fields['cf-count'] = $cfCount;
	}
	
	/**
	 * Get Updated Components
	 * @return string
	 */
	public function getUser05()
	{
		if(!isset($this->fields['user-05']))
			return null;
			
		$user05 = $this->fields['user-05'];
		return $user05;
	}
	
	/**
	 * Set Updated Components
	 * @param string $user05
	 */
	public function setUser05($user05)
	{
		$validValues = array(
			'3rd Parties',
			'Applications',
			'Documentation',
			'Front',
			'Professional Services',
			'Server',
		);
		if(!in_array($user05, $validValues))
			throw new QualityCenterInputException("Input [User05] value [$user05] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user05, $validValues);
		
		return $this->fields['user-05'] = $user05;
	}
	
	/**
	 * Get Version
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
	 * Set Version
	 * @param string $user01
	 */
	public function setUser01($user01)
	{
		$validValues = array(
			'Eagle',
			'Falcon',
			'Gemini',
			'Post Eagle',
		);
		if(!in_array($user01, $validValues))
			throw new QualityCenterInputException("Input [User01] value [$user01] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user01, $validValues);
		
		return $this->fields['user-01'] = $user01;
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
