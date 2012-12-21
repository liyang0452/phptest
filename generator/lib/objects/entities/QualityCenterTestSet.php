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
class QualityCenterTestSet extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'test-set';
	}
	
	/**
	 * Get 'On Failure' Settings
	 * @return string
	 */
	public function getExecEventHandle()
	{
		if(!isset($this->fields['exec-event-handle']))
			return null;
			
		$execEventHandle = $this->fields['exec-event-handle'];
		return $execEventHandle;
	}
	
	/**
	 * Set 'On Failure' Settings
	 * @param string $execEventHandle
	 */
	public function setExecEventHandle($execEventHandle)
	{
		return $this->fields['exec-event-handle'] = $execEventHandle;
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
	 * Get Baseline
	 * @return string
	 */
	public function getPinnedBaseline()
	{
		if(!isset($this->fields['pinned-baseline']))
			return null;
			
		$pinnedBaseline = $this->fields['pinned-baseline'];
		return $pinnedBaseline;
	}
	
	/**
	 * Set Baseline
	 * @param string $pinnedBaseline
	 */
	public function setPinnedBaseline($pinnedBaseline)
	{
		return $this->fields['pinned-baseline'] = $pinnedBaseline;
	}
	
	/**
	 * Get Close Date as linux timestamp
	 * @return mixed
	 */
	public function getCloseDate()
	{
		if(!isset($this->fields['close-date']))
			return null;
			
		$closeDate = $this->fields['close-date'];
		$closeDateDate = date_parse_from_format('Y-m-d', $closeDate);
		$closeDate = mktime(0, 0, 0, $closeDateDate['month'], $closeDateDate['day'], $closeDateDate['year']);
		
		return $closeDate;
	}
	
	/**
	 * Set Close Date as linux timestamp
	 * @param mixed $closeDate
	 */
	public function setCloseDate($closeDate)
	{
		if(is_int($closeDate))
			$closeDate = date('Y-m-d', $closeDate);
		return $this->fields['close-date'] = $closeDate;
	}
	
	/**
	 * Get Configuration
	 * @return string
	 */
	public function getOsConfig()
	{
		if(!isset($this->fields['os-config']))
			return null;
			
		$osConfig = $this->fields['os-config'];
		return $osConfig;
	}
	
	/**
	 * Set Configuration
	 * @param string $osConfig
	 */
	public function setOsConfig($osConfig)
	{
		$validValues = array(
		);
					
		if($osConfig instanceof QualityCenterExpression)
		{
			$osConfig->validateEnum('OsConfig', $validValues);
		}			
		elseif(!in_array($osConfig, $validValues))
		{
			throw new QualityCenterInputException("Input [OsConfig] value [$osConfig] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $osConfig, $validValues);
		}
		
		return $this->fields['os-config'] = $osConfig;
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getComment()
	{
		if(!isset($this->fields['comment']))
			return null;
			
		$comment = $this->fields['comment'];
		return $comment;
	}
	
	/**
	 * Set Description
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		return $this->fields['comment'] = $comment;
	}
	
	/**
	 * Get Execution Flow
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
	 * Set Execution Flow
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
	 * Get Open Date as linux timestamp
	 * @return mixed
	 */
	public function getOpenDate()
	{
		if(!isset($this->fields['open-date']))
			return null;
			
		$openDate = $this->fields['open-date'];
		$openDateDate = date_parse_from_format('Y-m-d', $openDate);
		$openDate = mktime(0, 0, 0, $openDateDate['month'], $openDateDate['day'], $openDateDate['year']);
		
		return $openDate;
	}
	
	/**
	 * Set Open Date as linux timestamp
	 * @param mixed $openDate
	 */
	public function setOpenDate($openDate)
	{
		if(is_int($openDate))
			$openDate = date('Y-m-d', $openDate);
		return $this->fields['open-date'] = $openDate;
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
	 * Get Related to Feature
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
	 * Set Related to Feature
	 * @param string $user01
	 */
	public function setUser01($user01)
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
			'Drop folder',
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
					
		if($user01 instanceof QualityCenterExpression)
		{
			$user01->validateEnum('User01', $validValues);
		}			
		elseif(!in_array($user01, $validValues))
		{
			throw new QualityCenterInputException("Input [User01] value [$user01] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user01, $validValues);
		}
		
		return $this->fields['user-01'] = $user01;
	}
	
	/**
	 * Get Report Settings
	 * @return string
	 */
	public function getReportSettings()
	{
		if(!isset($this->fields['report-settings']))
			return null;
			
		$reportSettings = $this->fields['report-settings'];
		return $reportSettings;
	}
	
	/**
	 * Set Report Settings
	 * @param string $reportSettings
	 */
	public function setReportSettings($reportSettings)
	{
		return $this->fields['report-settings'] = $reportSettings;
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
			'Done',
			'Open',
		);
					
		if($status instanceof QualityCenterExpression)
		{
			$status->validateEnum('Status', $validValues);
		}			
		elseif(!in_array($status, $validValues))
		{
			throw new QualityCenterInputException("Input [Status] value [$status] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $status, $validValues);
		}
		
		return $this->fields['status'] = $status;
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
	 * Get Test Set Folder
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
	 * Set Test Set Folder
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Test Set ID
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
	 * Set Test Set ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Test Set Notifications Settings
	 * @return string
	 */
	public function getMailSettings()
	{
		if(!isset($this->fields['mail-settings']))
			return null;
			
		$mailSettings = $this->fields['mail-settings'];
		return $mailSettings;
	}
	
	/**
	 * Set Test Set Notifications Settings
	 * @param string $mailSettings
	 */
	public function setMailSettings($mailSettings)
	{
		return $this->fields['mail-settings'] = $mailSettings;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getSubtypeId()
	{
		if(!isset($this->fields['subtype-id']))
			return null;
			
		$subtypeId = $this->fields['subtype-id'];
		return $subtypeId;
	}
	
	/**
	 * Set Type
	 * @param string $subtypeId
	 */
	public function setSubtypeId($subtypeId)
	{
		if(strlen($subtypeId) > 100)
			throw new QualityCenterInputException("Input [SubtypeId] value [$subtypeId] excceeded maximum length [100]", QualityCenterInputException::SIZE, strlen($subtypeId), 100);
		
		return $this->fields['subtype-id'] = $subtypeId;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getCycleVerStamp()
	{
		if(!isset($this->fields['cycle-ver-stamp']))
			return null;
			
		$cycleVerStamp = $this->fields['cycle-ver-stamp'];
		return $cycleVerStamp;
	}
	
	/**
	 * Set 
	 * @param string $cycleVerStamp
	 */
	public function setCycleVerStamp($cycleVerStamp)
	{
		return $this->fields['cycle-ver-stamp'] = $cycleVerStamp;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getCycleConfig()
	{
		if(!isset($this->fields['cycle-config']))
			return null;
			
		$cycleConfig = $this->fields['cycle-config'];
		return $cycleConfig;
	}
	
	/**
	 * Set 
	 * @param string $cycleConfig
	 */
	public function setCycleConfig($cycleConfig)
	{
		return $this->fields['cycle-config'] = $cycleConfig;
	}
	
}
