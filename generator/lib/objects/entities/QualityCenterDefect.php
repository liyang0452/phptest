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
class QualityCenterDefect extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'defect';
	}
	
	/**
	 * Get Actual Fix Time
	 * @return string
	 */
	public function getActualFixTime()
	{
		if(!isset($this->fields['actual-fix-time']))
			return null;
			
		$actualFixTime = $this->fields['actual-fix-time'];
		return $actualFixTime;
	}
	
	/**
	 * Set Actual Fix Time
	 * @param string $actualFixTime
	 */
	public function setActualFixTime($actualFixTime)
	{
		return $this->fields['actual-fix-time'] = $actualFixTime;
	}
	
	/**
	 * Get Applications
	 * @return string
	 */
	public function getUser16()
	{
		if(!isset($this->fields['user-16']))
			return null;
			
		$user16 = $this->fields['user-16'];
		return $user16;
	}
	
	/**
	 * Set Applications
	 * @param string $user16
	 */
	public function setUser16($user16)
	{
		$validValues = array(
			'1. Media Space',
			'2. Extensions',
			'3. Desktop Uploader (KEU)',
			'4. Simple Uploader (KSU)',
		);
		if(!in_array($user16, $validValues))
			throw new QualityCenterInputException("Input [User16] value [$user16] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user16, $validValues);
		
		return $this->fields['user-16'] = $user16;
	}
	
	/**
	 * Get Assigned To
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
	 * Set Assigned To
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
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
	 * Get Browser
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
	 * Set Browser
	 * @param string $user05
	 */
	public function setUser05($user05)
	{
		$validValues = array(
			'Chrome (Latest)',
			'FF 10.0',
			'FF 11',
			'FF 12',
			'FF 13',
			'FF 3.6',
			'FF 4.0',
			'FF 8.0',
			'FF 9.0',
			'FF Latest',
			'IE 10',
			'IE 7',
			'IE 8 (Comp. mode)',
			'IE 9 (Comp. mode)',
			'Safari 3.2',
			'Safari 5.1',
			'Safari 5.5',
			'Safari 6.0',
			'_N/A_',
		);
		if(!in_array($user05, $validValues))
			throw new QualityCenterInputException("Input [User05] value [$user05] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user05, $validValues);
		
		return $this->fields['user-05'] = $user05;
	}
	
	/**
	 * Get Clarizen-ID
	 * @return string
	 */
	public function getUser22()
	{
		if(!isset($this->fields['user-22']))
			return null;
			
		$user22 = $this->fields['user-22'];
		return $user22;
	}
	
	/**
	 * Set Clarizen-ID
	 * @param string $user22
	 */
	public function setUser22($user22)
	{
		if(strlen($user22) > 255)
			throw new QualityCenterInputException("Input [User22] value [$user22] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($user22), 255);
		
		return $this->fields['user-22'] = $user22;
	}
	
	/**
	 * Get Class of Service
	 * @return string
	 */
	public function getUser25()
	{
		if(!isset($this->fields['user-25']))
			return null;
			
		$user25 = $this->fields['user-25'];
		return $user25;
	}
	
	/**
	 * Set Class of Service
	 * @param string $user25
	 */
	public function setUser25($user25)
	{
		$validValues = array(
			'1-Silver',
			'2-Gold',
			'3-Platinum',
			'4-Free Trail',
		);
		if(!in_array($user25, $validValues))
			throw new QualityCenterInputException("Input [User25] value [$user25] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user25, $validValues);
		
		return $this->fields['user-25'] = $user25;
	}
	
	/**
	 * Get Closed in Version
	 * @return string
	 */
	public function getClosingVersion()
	{
		if(!isset($this->fields['closing-version']))
			return null;
			
		$closingVersion = $this->fields['closing-version'];
		return $closingVersion;
	}
	
	/**
	 * Set Closed in Version
	 * @param string $closingVersion
	 */
	public function setClosingVersion($closingVersion)
	{
		$validValues = array(
			'Eagle',
			'Falcon',
			'Gemini',
			'Post Eagle',
		);
		if(!in_array($closingVersion, $validValues))
			throw new QualityCenterInputException("Input [ClosingVersion] value [$closingVersion] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $closingVersion, $validValues);
		
		return $this->fields['closing-version'] = $closingVersion;
	}
	
	/**
	 * Get Closing Date as linux timestamp
	 * @return int
	 */
	public function getClosingDate()
	{
		if(!isset($this->fields['closing-date']))
			return null;
			
		$closingDate = $this->fields['closing-date'];
		$closingDateDate = date_parse_from_format('Y-m-d', $closingDate);
		$closingDate = mktime(0, 0, 0, $closingDateDate['month'], $closingDateDate['day'], $closingDateDate['year']);
		
		return $closingDate;
	}
	
	/**
	 * Set Closing Date as linux timestamp
	 * @param int $closingDate
	 */
	public function setClosingDate($closingDate)
	{
		$closingDate = date('Y-m-d', $closingDate);
		return $this->fields['closing-date'] = $closingDate;
	}
	
	/**
	 * Get Code Review by
	 * @return string
	 */
	public function getUser17()
	{
		if(!isset($this->fields['user-17']))
			return null;
			
		$user17 = $this->fields['user-17'];
		return $user17;
	}
	
	/**
	 * Set Code Review by
	 * @param string $user17
	 */
	public function setUser17($user17)
	{
		if(strlen($user17) > 40)
			throw new QualityCenterInputException("Input [User17] value [$user17] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($user17), 40);
		
		return $this->fields['user-17'] = $user17;
	}
	
	/**
	 * Get Comments
	 * @return string
	 */
	public function getDevComments()
	{
		if(!isset($this->fields['dev-comments']))
			return null;
			
		$devComments = $this->fields['dev-comments'];
		return $devComments;
	}
	
	/**
	 * Set Comments
	 * @param string $devComments
	 */
	public function setDevComments($devComments)
	{
		return $this->fields['dev-comments'] = $devComments;
	}
	
	/**
	 * Get Component
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
	 * Set Component
	 * @param string $user04
	 */
	public function setUser04($user04)
	{
		$validValues = array(
			'3rd Parties',
			'Applications',
			'Documentation',
			'Front',
			'Professional Services',
			'Server',
		);
		if(!in_array($user04, $validValues))
			throw new QualityCenterInputException("Input [User04] value [$user04] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user04, $validValues);
		
		return $this->fields['user-04'] = $user04;
	}
	
	/**
	 * Get Component version
	 * @return string
	 */
	public function getUser21()
	{
		if(!isset($this->fields['user-21']))
			return null;
			
		$user21 = $this->fields['user-21'];
		return $user21;
	}
	
	/**
	 * Set Component version
	 * @param string $user21
	 */
	public function setUser21($user21)
	{
		if(strlen($user21) > 255)
			throw new QualityCenterInputException("Input [User21] value [$user21] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($user21), 255);
		
		return $this->fields['user-21'] = $user21;
	}
	
	/**
	 * Get Cycle ID
	 * @return string
	 */
	public function getCycleId()
	{
		if(!isset($this->fields['cycle-id']))
			return null;
			
		$cycleId = $this->fields['cycle-id'];
		return $cycleId;
	}
	
	/**
	 * Set Cycle ID
	 * @param string $cycleId
	 */
	public function setCycleId($cycleId)
	{
		return $this->fields['cycle-id'] = $cycleId;
	}
	
	/**
	 * Get Defect ID
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
	 * Set Defect ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Defect Type
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
	 * Set Defect Type
	 * @param string $user08
	 */
	public function setUser08($user08)
	{
		$validValues = array(
			'Functional',
			'GUI',
			'Infrastructure',
			'Performance',
		);
		if(!in_array($user08, $validValues))
			throw new QualityCenterInputException("Input [User08] value [$user08] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user08, $validValues);
		
		return $this->fields['user-08'] = $user08;
	}
	
	/**
	 * Get Deployment Type
	 * @return string
	 */
	public function getUser10()
	{
		if(!isset($this->fields['user-10']))
			return null;
			
		$user10 = $this->fields['user-10'];
		return $user10;
	}
	
	/**
	 * Set Deployment Type
	 * @param string $user10
	 */
	public function setUser10($user10)
	{
		$validValues = array(
			'On Prem',
			'SAAS',
		);
		if(!in_array($user10, $validValues))
			throw new QualityCenterInputException("Input [User10] value [$user10] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user10, $validValues);
		
		return $this->fields['user-10'] = $user10;
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
	 * Get Detected By
	 * @return string
	 */
	public function getDetectedBy()
	{
		if(!isset($this->fields['detected-by']))
			return null;
			
		$detectedBy = $this->fields['detected-by'];
		return $detectedBy;
	}
	
	/**
	 * Set Detected By
	 * @param string $detectedBy
	 */
	public function setDetectedBy($detectedBy)
	{
		return $this->fields['detected-by'] = $detectedBy;
	}
	
	/**
	 * Get Detected in Cycle
	 * @return string
	 */
	public function getDetectedInRcyc()
	{
		if(!isset($this->fields['detected-in-rcyc']))
			return null;
			
		$detectedInRcyc = $this->fields['detected-in-rcyc'];
		return $detectedInRcyc;
	}
	
	/**
	 * Set Detected in Cycle
	 * @param string $detectedInRcyc
	 */
	public function setDetectedInRcyc($detectedInRcyc)
	{
		return $this->fields['detected-in-rcyc'] = $detectedInRcyc;
	}
	
	/**
	 * Get Detected in Release
	 * @return string
	 */
	public function getDetectedInRel()
	{
		if(!isset($this->fields['detected-in-rel']))
			return null;
			
		$detectedInRel = $this->fields['detected-in-rel'];
		return $detectedInRel;
	}
	
	/**
	 * Set Detected in Release
	 * @param string $detectedInRel
	 */
	public function setDetectedInRel($detectedInRel)
	{
		return $this->fields['detected-in-rel'] = $detectedInRel;
	}
	
	/**
	 * Get Detected in Version
	 * @return string
	 */
	public function getDetectionVersion()
	{
		if(!isset($this->fields['detection-version']))
			return null;
			
		$detectionVersion = $this->fields['detection-version'];
		return $detectionVersion;
	}
	
	/**
	 * Set Detected in Version
	 * @param string $detectionVersion
	 */
	public function setDetectionVersion($detectionVersion)
	{
		$validValues = array(
			'Eagle',
			'Falcon',
			'Gemini',
			'Post Eagle',
		);
		if(!in_array($detectionVersion, $validValues))
			throw new QualityCenterInputException("Input [DetectionVersion] value [$detectionVersion] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $detectionVersion, $validValues);
		
		return $this->fields['detection-version'] = $detectionVersion;
	}
	
	/**
	 * Get Detected on Date as linux timestamp
	 * @return int
	 */
	public function getCreationTime()
	{
		if(!isset($this->fields['creation-time']))
			return null;
			
		$creationTime = $this->fields['creation-time'];
		$creationTimeDate = date_parse_from_format('Y-m-d', $creationTime);
		$creationTime = mktime(0, 0, 0, $creationTimeDate['month'], $creationTimeDate['day'], $creationTimeDate['year']);
		
		return $creationTime;
	}
	
	/**
	 * Set Detected on Date as linux timestamp
	 * @param int $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		$creationTime = date('Y-m-d', $creationTime);
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Dev Priority
	 * @return string
	 */
	public function getUser28()
	{
		if(!isset($this->fields['user-28']))
			return null;
			
		$user28 = $this->fields['user-28'];
		return $user28;
	}
	
	/**
	 * Set Dev Priority
	 * @param string $user28
	 */
	public function setUser28($user28)
	{
		$validValues = array(
			'1-High',
			'2-Medium',
			'3-Low',
		);
		if(!in_array($user28, $validValues))
			throw new QualityCenterInputException("Input [User28] value [$user28] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user28, $validValues);
		
		return $this->fields['user-28'] = $user28;
	}
	
	/**
	 * Get Device
	 * @return string
	 */
	public function getUser20()
	{
		if(!isset($this->fields['user-20']))
			return null;
			
		$user20 = $this->fields['user-20'];
		return $user20;
	}
	
	/**
	 * Set Device
	 * @param string $user20
	 */
	public function setUser20($user20)
	{
		$validValues = array(
			'Blackberry',
			'Blackberry Torch',
			'Galaxy 1 2.3.3',
			'Galaxy 2 2.3.3',
			'Galaxy nexus android 4.0.2',
			'HTC Windows',
			'Mac Lion OS',
			'Motorola Rayzer',
			'Motorola XOOM - Android 3.1',
			'Samsung tab 3.2',
			'Windows7',
			'iPad1_iOS4',
			'iPad2_iOS4',
			'iPad2_iOS5',
			'iPhone4_iOS4',
			'iPhone4_iOS5',
		);
		if(!in_array($user20, $validValues))
			throw new QualityCenterInputException("Input [User20] value [$user20] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user20, $validValues);
		
		return $this->fields['user-20'] = $user20;
	}
	
	/**
	 * Get Environment
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
	 * Set Environment
	 * @param string $user02
	 */
	public function setUser02($user02)
	{
		$validValues = array(
			'Automation',
			'Customer site',
			'Data Centers',
			'Development',
			'Kaltura Site',
			'Prod.qa',
			'Production',
			'Testing.qa',
		);
		if(!in_array($user02, $validValues))
			throw new QualityCenterInputException("Input [User02] value [$user02] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user02, $validValues);
		
		return $this->fields['user-02'] = $user02;
	}
	
	/**
	 * Get Estimated Fix Time in hrs
	 * @return string
	 */
	public function getEstimatedFixTime()
	{
		if(!isset($this->fields['estimated-fix-time']))
			return null;
			
		$estimatedFixTime = $this->fields['estimated-fix-time'];
		return $estimatedFixTime;
	}
	
	/**
	 * Set Estimated Fix Time in hrs
	 * @param string $estimatedFixTime
	 */
	public function setEstimatedFixTime($estimatedFixTime)
	{
		return $this->fields['estimated-fix-time'] = $estimatedFixTime;
	}
	
	/**
	 * Get Extended Reference
	 * @return string
	 */
	public function getExtendedReference()
	{
		if(!isset($this->fields['extended-reference']))
			return null;
			
		$extendedReference = $this->fields['extended-reference'];
		return $extendedReference;
	}
	
	/**
	 * Set Extended Reference
	 * @param string $extendedReference
	 */
	public function setExtendedReference($extendedReference)
	{
		if(strlen($extendedReference) > 50)
			throw new QualityCenterInputException("Input [ExtendedReference] value [$extendedReference] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($extendedReference), 50);
		
		return $this->fields['extended-reference'] = $extendedReference;
	}
	
	/**
	 * Get Fixed Date as linux timestamp
	 * @return int
	 */
	public function getUser24()
	{
		if(!isset($this->fields['user-24']))
			return null;
			
		$user24 = $this->fields['user-24'];
		$user24Date = date_parse_from_format('Y-m-d', $user24);
		$user24 = mktime(0, 0, 0, $user24Date['month'], $user24Date['day'], $user24Date['year']);
		
		return $user24;
	}
	
	/**
	 * Set Fixed Date as linux timestamp
	 * @param int $user24
	 */
	public function setUser24($user24)
	{
		$user24 = date('Y-m-d', $user24);
		return $this->fields['user-24'] = $user24;
	}
	
	/**
	 * Get Fixed by
	 * @return string
	 */
	public function getUser23()
	{
		if(!isset($this->fields['user-23']))
			return null;
			
		$user23 = $this->fields['user-23'];
		return $user23;
	}
	
	/**
	 * Set Fixed by
	 * @param string $user23
	 */
	public function setUser23($user23)
	{
		return $this->fields['user-23'] = $user23;
	}
	
	/**
	 * Get Has Change
	 * @return string
	 */
	public function getHasChange()
	{
		if(!isset($this->fields['has-change']))
			return null;
			
		$hasChange = $this->fields['has-change'];
		return $hasChange;
	}
	
	/**
	 * Set Has Change
	 * @param string $hasChange
	 */
	public function setHasChange($hasChange)
	{
		if(strlen($hasChange) > 50)
			throw new QualityCenterInputException("Input [HasChange] value [$hasChange] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($hasChange), 50);
		
		return $this->fields['has-change'] = $hasChange;
	}
	
	/**
	 * Get Hotfix?
	 * @return string
	 */
	public function getUser15()
	{
		if(!isset($this->fields['user-15']))
			return null;
			
		$user15 = $this->fields['user-15'];
		return $user15;
	}
	
	/**
	 * Set Hotfix?
	 * @param string $user15
	 */
	public function setUser15($user15)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($user15, $validValues))
			throw new QualityCenterInputException("Input [User15] value [$user15] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user15, $validValues);
		
		return $this->fields['user-15'] = $user15;
	}
	
	/**
	 * Get Mantis ID
	 * @return string
	 */
	public function getUser14()
	{
		if(!isset($this->fields['user-14']))
			return null;
			
		$user14 = $this->fields['user-14'];
		return $user14;
	}
	
	/**
	 * Set Mantis ID
	 * @param string $user14
	 */
	public function setUser14($user14)
	{
		return $this->fields['user-14'] = $user14;
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
	 * Get PPM Request Id
	 * @return string
	 */
	public function getRequestId()
	{
		if(!isset($this->fields['request-id']))
			return null;
			
		$requestId = $this->fields['request-id'];
		return $requestId;
	}
	
	/**
	 * Set PPM Request Id
	 * @param string $requestId
	 */
	public function setRequestId($requestId)
	{
		return $this->fields['request-id'] = $requestId;
	}
	
	/**
	 * Get PPM Request Note
	 * @return string
	 */
	public function getRequestNote()
	{
		if(!isset($this->fields['request-note']))
			return null;
			
		$requestNote = $this->fields['request-note'];
		return $requestNote;
	}
	
	/**
	 * Set PPM Request Note
	 * @param string $requestNote
	 */
	public function setRequestNote($requestNote)
	{
		return $this->fields['request-note'] = $requestNote;
	}
	
	/**
	 * Get PPM Request Type
	 * @return string
	 */
	public function getRequestType()
	{
		if(!isset($this->fields['request-type']))
			return null;
			
		$requestType = $this->fields['request-type'];
		return $requestType;
	}
	
	/**
	 * Set PPM Request Type
	 * @param string $requestType
	 */
	public function setRequestType($requestType)
	{
		if(strlen($requestType) > 120)
			throw new QualityCenterInputException("Input [RequestType] value [$requestType] excceeded maximum length [120]", QualityCenterInputException::SIZE, strlen($requestType), 120);
		
		return $this->fields['request-type'] = $requestType;
	}
	
	/**
	 * Get PPM Server URL
	 * @return string
	 */
	public function getRequestServer()
	{
		if(!isset($this->fields['request-server']))
			return null;
			
		$requestServer = $this->fields['request-server'];
		return $requestServer;
	}
	
	/**
	 * Set PPM Server URL
	 * @param string $requestServer
	 */
	public function setRequestServer($requestServer)
	{
		if(strlen($requestServer) > 120)
			throw new QualityCenterInputException("Input [RequestServer] value [$requestServer] excceeded maximum length [120]", QualityCenterInputException::SIZE, strlen($requestServer), 120);
		
		return $this->fields['request-server'] = $requestServer;
	}
	
	/**
	 * Get Partner ID
	 * @return string
	 */
	public function getUser13()
	{
		if(!isset($this->fields['user-13']))
			return null;
			
		$user13 = $this->fields['user-13'];
		return $user13;
	}
	
	/**
	 * Set Partner ID
	 * @param string $user13
	 */
	public function setUser13($user13)
	{
		if(strlen($user13) > 225)
			throw new QualityCenterInputException("Input [User13] value [$user13] excceeded maximum length [225]", QualityCenterInputException::SIZE, strlen($user13), 225);
		
		return $this->fields['user-13'] = $user13;
	}
	
	/**
	 * Get Partner Name
	 * @return string
	 */
	public function getUser26()
	{
		if(!isset($this->fields['user-26']))
			return null;
			
		$user26 = $this->fields['user-26'];
		return $user26;
	}
	
	/**
	 * Set Partner Name
	 * @param string $user26
	 */
	public function setUser26($user26)
	{
		if(strlen($user26) > 255)
			throw new QualityCenterInputException("Input [User26] value [$user26] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($user26), 255);
		
		return $this->fields['user-26'] = $user26;
	}
	
	/**
	 * Get Planned Closing Version
	 * @return string
	 */
	public function getPlannedClosingVer()
	{
		if(!isset($this->fields['planned-closing-ver']))
			return null;
			
		$plannedClosingVer = $this->fields['planned-closing-ver'];
		return $plannedClosingVer;
	}
	
	/**
	 * Set Planned Closing Version
	 * @param string $plannedClosingVer
	 */
	public function setPlannedClosingVer($plannedClosingVer)
	{
		$validValues = array(
			'Eagle',
			'Falcon',
			'Gemini',
			'Post Eagle',
		);
		if(!in_array($plannedClosingVer, $validValues))
			throw new QualityCenterInputException("Input [PlannedClosingVer] value [$plannedClosingVer] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $plannedClosingVer, $validValues);
		
		return $this->fields['planned-closing-ver'] = $plannedClosingVer;
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
		$validValues = array(
			'1-High',
			'2-Medium',
			'3-Low',
		);
		if(!in_array($priority, $validValues))
			throw new QualityCenterInputException("Input [Priority] value [$priority] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $priority, $validValues);
		
		return $this->fields['priority'] = $priority;
	}
	
	/**
	 * Get Project
	 * @return string
	 */
	public function getProject()
	{
		if(!isset($this->fields['project']))
			return null;
			
		$project = $this->fields['project'];
		return $project;
	}
	
	/**
	 * Set Project
	 * @param string $project
	 */
	public function setProject($project)
	{
		$validValues = array(
			'Applications',
			'Core',
			'ProfessionalServices',
		);
		if(!in_array($project, $validValues))
			throw new QualityCenterInputException("Input [Project] value [$project] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $project, $validValues);
		
		return $this->fields['project'] = $project;
	}
	
	/**
	 * Get Reason
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
	 * Set Reason
	 * @param string $user07
	 */
	public function setUser07($user07)
	{
		$validValues = array(
			'Cannot Reproduce',
			'Code fix',
			'Configuration',
			'Documentation',
			'Duplicate',
			'Enhancement',
			'Environmental',
			'FR Approved',
			'Incomplete',
			'Limitation',
			'Missing Information',
			'New Issue',
			'Not a bug',
			'Obsolete',
			'Verification Failed',
			'Verified',
			'Will not be fixed',
			'Work As Designed',
			'Wrong usage',
		);
		if(!in_array($user07, $validValues))
			throw new QualityCenterInputException("Input [User07] value [$user07] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user07, $validValues);
		
		return $this->fields['user-07'] = $user07;
	}
	
	/**
	 * Get Related to Feature
	 * @return string
	 */
	public function getUser27()
	{
		if(!isset($this->fields['user-27']))
			return null;
			
		$user27 = $this->fields['user-27'];
		return $user27;
	}
	
	/**
	 * Set Related to Feature
	 * @param string $user27
	 */
	public function setUser27($user27)
	{
		$validValues = array(
			'Access Control',
			'Admin Console',
			'Analytics Reports',
			'App _ Temp',
			'Applications',
			'Conversion',
			'Cue Points',
			'Custom Data/Meta data',
			'Distribution',
			'Email Notifications',
			'Entitlement',
			'Entry Drill down',
			'HTML5',
			'Login & Logout',
			'Moderation',
			'Multi-Publishers',
			'Player',
			'Regression',
			'Related Videos',
			'Search & Filters',
			'Thumbnails',
			'Upload',
			'Users management',
		);
		if(!in_array($user27, $validValues))
			throw new QualityCenterInputException("Input [User27] value [$user27] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user27, $validValues);
		
		return $this->fields['user-27'] = $user27;
	}
	
	/**
	 * Get Reproducibility
	 * @return string
	 */
	public function getUser03()
	{
		if(!isset($this->fields['user-03']))
			return null;
			
		$user03 = $this->fields['user-03'];
		return $user03;
	}
	
	/**
	 * Set Reproducibility
	 * @param string $user03
	 */
	public function setUser03($user03)
	{
		$validValues = array(
			'Always',
			'Random',
			'Sometimes',
			'Unable to reproduce',
			'Unknown',
		);
		if(!in_array($user03, $validValues))
			throw new QualityCenterInputException("Input [User03] value [$user03] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user03, $validValues);
		
		return $this->fields['user-03'] = $user03;
	}
	
	/**
	 * Get Reproducible
	 * @return string
	 */
	public function getReproducible()
	{
		if(!isset($this->fields['reproducible']))
			return null;
			
		$reproducible = $this->fields['reproducible'];
		return $reproducible;
	}
	
	/**
	 * Set Reproducible
	 * @param string $reproducible
	 */
	public function setReproducible($reproducible)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($reproducible, $validValues))
			throw new QualityCenterInputException("Input [Reproducible] value [$reproducible] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $reproducible, $validValues);
		
		return $this->fields['reproducible'] = $reproducible;
	}
	
	/**
	 * Get Run Reference
	 * @return string
	 */
	public function getRunReference()
	{
		if(!isset($this->fields['run-reference']))
			return null;
			
		$runReference = $this->fields['run-reference'];
		return $runReference;
	}
	
	/**
	 * Set Run Reference
	 * @param string $runReference
	 */
	public function setRunReference($runReference)
	{
		return $this->fields['run-reference'] = $runReference;
	}
	
	/**
	 * Get SF ID
	 * @return string
	 */
	public function getUser12()
	{
		if(!isset($this->fields['user-12']))
			return null;
			
		$user12 = $this->fields['user-12'];
		return $user12;
	}
	
	/**
	 * Set SF ID
	 * @param string $user12
	 */
	public function setUser12($user12)
	{
		if(strlen($user12) > 255)
			throw new QualityCenterInputException("Input [User12] value [$user12] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($user12), 255);
		
		return $this->fields['user-12'] = $user12;
	}
	
	/**
	 * Get SVN Commits
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
	 * Set SVN Commits
	 * @param string $user06
	 */
	public function setUser06($user06)
	{
		if(strlen($user06) > 255)
			throw new QualityCenterInputException("Input [User06] value [$user06] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($user06), 255);
		
		return $this->fields['user-06'] = $user06;
	}
	
	/**
	 * Get Severity
	 * @return string
	 */
	public function getSeverity()
	{
		if(!isset($this->fields['severity']))
			return null;
			
		$severity = $this->fields['severity'];
		return $severity;
	}
	
	/**
	 * Set Severity
	 * @param string $severity
	 */
	public function setSeverity($severity)
	{
		$validValues = array(
			'1-Showstopper',
			'2-Critical',
			'3-Major',
			'4-Medium',
			'5-Minor',
		);
		if(!in_array($severity, $validValues))
			throw new QualityCenterInputException("Input [Severity] value [$severity] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $severity, $validValues);
		
		return $this->fields['severity'] = $severity;
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
		$validValues = array(
			'Closed',
			'Deployed',
			'Feedback',
			'Fixed',
			'In Dev',
			'New',
			'Open',
			'Pending Product',
			'Postponed',
			'Ready4Deployment',
			'Ready4Testing',
			'Rejected',
			'Reopened',
			'Resolved',
		);
		if(!in_array($status, $validValues))
			throw new QualityCenterInputException("Input [Status] value [$status] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $status, $validValues);
		
		return $this->fields['status'] = $status;
	}
	
	/**
	 * Get Step Reference
	 * @return string
	 */
	public function getStepReference()
	{
		if(!isset($this->fields['step-reference']))
			return null;
			
		$stepReference = $this->fields['step-reference'];
		return $stepReference;
	}
	
	/**
	 * Set Step Reference
	 * @param string $stepReference
	 */
	public function setStepReference($stepReference)
	{
		return $this->fields['step-reference'] = $stepReference;
	}
	
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		if(!isset($this->fields['subject']))
			return null;
			
		$subject = $this->fields['subject'];
		return $subject;
	}
	
	/**
	 * Set Subject
	 * @param string $subject
	 */
	public function setSubject($subject)
	{
		$validValues = array(
			'Requirement Authoring',
			'Requirement Review',
			'Test Authoring',
		);
		if(!in_array($subject, $validValues))
			throw new QualityCenterInputException("Input [Subject] value [$subject] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $subject, $validValues);
		
		return $this->fields['subject'] = $subject;
	}
	
	/**
	 * Get Summary
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
	 * Set Summary
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Target Cycle
	 * @return string
	 */
	public function getTargetRcyc()
	{
		if(!isset($this->fields['target-rcyc']))
			return null;
			
		$targetRcyc = $this->fields['target-rcyc'];
		return $targetRcyc;
	}
	
	/**
	 * Set Target Cycle
	 * @param string $targetRcyc
	 */
	public function setTargetRcyc($targetRcyc)
	{
		return $this->fields['target-rcyc'] = $targetRcyc;
	}
	
	/**
	 * Get Target Release
	 * @return string
	 */
	public function getTargetRel()
	{
		if(!isset($this->fields['target-rel']))
			return null;
			
		$targetRel = $this->fields['target-rel'];
		return $targetRel;
	}
	
	/**
	 * Set Target Release
	 * @param string $targetRel
	 */
	public function setTargetRel($targetRel)
	{
		return $this->fields['target-rel'] = $targetRel;
	}
	
	/**
	 * Get Target Version
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
	 * Set Target Version
	 * @param string $user09
	 */
	public function setUser09($user09)
	{
		$validValues = array(
			'Eagle',
			'Falcon',
			'Gemini',
			'Post Eagle',
		);
		if(!in_array($user09, $validValues))
			throw new QualityCenterInputException("Input [User09] value [$user09] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user09, $validValues);
		
		return $this->fields['user-09'] = $user09;
	}
	
	/**
	 * Get Test Reference
	 * @return string
	 */
	public function getTestReference()
	{
		if(!isset($this->fields['test-reference']))
			return null;
			
		$testReference = $this->fields['test-reference'];
		return $testReference;
	}
	
	/**
	 * Set Test Reference
	 * @param string $testReference
	 */
	public function setTestReference($testReference)
	{
		return $this->fields['test-reference'] = $testReference;
	}
	
	/**
	 * Get Test Type
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
	 * Set Test Type
	 * @param string $user01
	 */
	public function setUser01($user01)
	{
		$validValues = array(
			'Automation',
			'Compatibility',
			'Configuration',
			'Installation',
			'Performance',
			'Progression',
			'Regression',
			'Sanity',
		);
		if(!in_array($user01, $validValues))
			throw new QualityCenterInputException("Input [User01] value [$user01] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user01, $validValues);
		
		return $this->fields['user-01'] = $user01;
	}
	
	/**
	 * Get TestSet Reference
	 * @return string
	 */
	public function getCycleReference()
	{
		if(!isset($this->fields['cycle-reference']))
			return null;
			
		$cycleReference = $this->fields['cycle-reference'];
		return $cycleReference;
	}
	
	/**
	 * Set TestSet Reference
	 * @param string $cycleReference
	 */
	public function setCycleReference($cycleReference)
	{
		if(strlen($cycleReference) > 255)
			throw new QualityCenterInputException("Input [CycleReference] value [$cycleReference] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($cycleReference), 255);
		
		return $this->fields['cycle-reference'] = $cycleReference;
	}
	
	/**
	 * Get Tested by Dev in
	 * @return string
	 */
	public function getUser19()
	{
		if(!isset($this->fields['user-19']))
			return null;
			
		$user19 = $this->fields['user-19'];
		return $user19;
	}
	
	/**
	 * Set Tested by Dev in
	 * @param string $user19
	 */
	public function setUser19($user19)
	{
		$validValues = array(
			'Hudson test1',
			'Hudson test2',
			'Hudson test3',
			'Hudson test4',
			'Hudson test5',
			'Hudson test6',
			'Hudson test7',
			'Hudson test8',
			'Production',
			'devtest 1',
			'devtest 2',
			'prod.qa',
			'testing.qa',
		);
		if(!in_array($user19, $validValues))
			throw new QualityCenterInputException("Input [User19] value [$user19] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user19, $validValues);
		
		return $this->fields['user-19'] = $user19;
	}
	
	/**
	 * Get To Mail
	 * @return string
	 */
	public function getToMail()
	{
		if(!isset($this->fields['to-mail']))
			return null;
			
		$toMail = $this->fields['to-mail'];
		return $toMail;
	}
	
	/**
	 * Set To Mail
	 * @param string $toMail
	 */
	public function setToMail($toMail)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($toMail, $validValues))
			throw new QualityCenterInputException("Input [ToMail] value [$toMail] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $toMail, $validValues);
		
		return $this->fields['to-mail'] = $toMail;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getUser11()
	{
		if(!isset($this->fields['user-11']))
			return null;
			
		$user11 = $this->fields['user-11'];
		return $user11;
	}
	
	/**
	 * Set Type
	 * @param string $user11
	 */
	public function setUser11($user11)
	{
		$validValues = array(
			'Bug',
			'Feature',
			'Ticket',
		);
		if(!in_array($user11, $validValues))
			throw new QualityCenterInputException("Input [User11] value [$user11] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user11, $validValues);
		
		return $this->fields['user-11'] = $user11;
	}
	
	/**
	 * Get Unit tests
	 * @return string
	 */
	public function getUser18()
	{
		if(!isset($this->fields['user-18']))
			return null;
			
		$user18 = $this->fields['user-18'];
		return $user18;
	}
	
	/**
	 * Set Unit tests
	 * @param string $user18
	 */
	public function setUser18($user18)
	{
		if(strlen($user18) > 40)
			throw new QualityCenterInputException("Input [User18] value [$user18] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($user18), 40);
		
		return $this->fields['user-18'] = $user18;
	}
	
	/**
	 * Get Version Stamp
	 * @return string
	 */
	public function getBugVerStamp()
	{
		if(!isset($this->fields['bug-ver-stamp']))
			return null;
			
		$bugVerStamp = $this->fields['bug-ver-stamp'];
		return $bugVerStamp;
	}
	
	/**
	 * Set Version Stamp
	 * @param string $bugVerStamp
	 */
	public function setBugVerStamp($bugVerStamp)
	{
		return $this->fields['bug-ver-stamp'] = $bugVerStamp;
	}
	
}
