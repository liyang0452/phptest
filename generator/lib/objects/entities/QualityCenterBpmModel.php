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
class QualityCenterBpmModel extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bpm-model';
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
	 * Get External Properties
	 * @return string
	 */
	public function getAdditionalData()
	{
		if(!isset($this->fields['additional-data']))
			return null;
			
		$additionalData = $this->fields['additional-data'];
		return $additionalData;
	}
	
	/**
	 * Set External Properties
	 * @param string $additionalData
	 */
	public function setAdditionalData($additionalData)
	{
		return $this->fields['additional-data'] = $additionalData;
	}
	
	/**
	 * Get Guid
	 * @return string
	 */
	public function getGuid()
	{
		if(!isset($this->fields['guid']))
			return null;
			
		$guid = $this->fields['guid'];
		return $guid;
	}
	
	/**
	 * Set Guid
	 * @param string $guid
	 */
	public function setGuid($guid)
	{
		if(strlen($guid) > 80)
			throw new QualityCenterInputException("Input [Guid] value [$guid] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($guid), 80);
		
		return $this->fields['guid'] = $guid;
	}
	
	/**
	 * Get Import Date
	 * @return string
	 */
	public function getImportDate()
	{
		if(!isset($this->fields['import-date']))
			return null;
			
		$importDate = $this->fields['import-date'];
		return $importDate;
	}
	
	/**
	 * Set Import Date
	 * @param string $importDate
	 */
	public function setImportDate($importDate)
	{
		return $this->fields['import-date'] = $importDate;
	}
	
	/**
	 * Get Imported By
	 * @return string
	 */
	public function getImportedBy()
	{
		if(!isset($this->fields['imported-by']))
			return null;
			
		$importedBy = $this->fields['imported-by'];
		return $importedBy;
	}
	
	/**
	 * Set Imported By
	 * @param string $importedBy
	 */
	public function setImportedBy($importedBy)
	{
		return $this->fields['imported-by'] = $importedBy;
	}
	
	/**
	 * Get Imported File Name
	 * @return string
	 */
	public function getSourceFileName()
	{
		if(!isset($this->fields['source-file-name']))
			return null;
			
		$sourceFileName = $this->fields['source-file-name'];
		return $sourceFileName;
	}
	
	/**
	 * Set Imported File Name
	 * @param string $sourceFileName
	 */
	public function setSourceFileName($sourceFileName)
	{
		if(strlen($sourceFileName) > 255)
			throw new QualityCenterInputException("Input [SourceFileName] value [$sourceFileName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($sourceFileName), 255);
		
		return $this->fields['source-file-name'] = $sourceFileName;
	}
	
	/**
	 * Get Is Sub Model
	 * @return string
	 */
	public function getIsSubModel()
	{
		if(!isset($this->fields['is-sub-model']))
			return null;
			
		$isSubModel = $this->fields['is-sub-model'];
		return $isSubModel;
	}
	
	/**
	 * Set Is Sub Model
	 * @param string $isSubModel
	 */
	public function setIsSubModel($isSubModel)
	{
		if(strlen($isSubModel) > 1)
			throw new QualityCenterInputException("Input [IsSubModel] value [$isSubModel] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isSubModel), 1);
		
		return $this->fields['is-sub-model'] = $isSubModel;
	}
	
	/**
	 * Get Model Author
	 * @return string
	 */
	public function getAuthor()
	{
		if(!isset($this->fields['author']))
			return null;
			
		$author = $this->fields['author'];
		return $author;
	}
	
	/**
	 * Set Model Author
	 * @param string $author
	 */
	public function setAuthor($author)
	{
		if(strlen($author) > 60)
			throw new QualityCenterInputException("Input [Author] value [$author] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($author), 60);
		
		return $this->fields['author'] = $author;
	}
	
	/**
	 * Get Model ID
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
	 * Set Model ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
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
	 * Get Notation
	 * @return string
	 */
	public function getNotation()
	{
		if(!isset($this->fields['notation']))
			return null;
			
		$notation = $this->fields['notation'];
		return $notation;
	}
	
	/**
	 * Set Notation
	 * @param string $notation
	 */
	public function setNotation($notation)
	{
		if(strlen($notation) > 40)
			throw new QualityCenterInputException("Input [Notation] value [$notation] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($notation), 40);
		
		return $this->fields['notation'] = $notation;
	}
	
	/**
	 * Get Notation Version
	 * @return string
	 */
	public function getNotationVersion()
	{
		if(!isset($this->fields['notation-version']))
			return null;
			
		$notationVersion = $this->fields['notation-version'];
		return $notationVersion;
	}
	
	/**
	 * Set Notation Version
	 * @param string $notationVersion
	 */
	public function setNotationVersion($notationVersion)
	{
		if(strlen($notationVersion) > 40)
			throw new QualityCenterInputException("Input [NotationVersion] value [$notationVersion] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($notationVersion), 40);
		
		return $this->fields['notation-version'] = $notationVersion;
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
	 * Get Number of Paths
	 * @return string
	 */
	public function getPathsCount()
	{
		if(!isset($this->fields['paths-count']))
			return null;
			
		$pathsCount = $this->fields['paths-count'];
		return $pathsCount;
	}
	
	/**
	 * Set Number of Paths
	 * @param string $pathsCount
	 */
	public function setPathsCount($pathsCount)
	{
		return $this->fields['paths-count'] = $pathsCount;
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
	 * Get Prototype
	 * @return string
	 */
	public function getPrototype()
	{
		if(!isset($this->fields['prototype']))
			return null;
			
		$prototype = $this->fields['prototype'];
		return $prototype;
	}
	
	/**
	 * Set Prototype
	 * @param string $prototype
	 */
	public function setPrototype($prototype)
	{
		$validValues = array(
			'As-Is',
			'To-Be',
		);
					
		if($prototype instanceof QualityCenterExpression)
		{
			$prototype->validateEnum('Prototype', $validValues);
		}			
		elseif(!in_array($prototype, $validValues))
		{
			throw new QualityCenterInputException("Input [Prototype] value [$prototype] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $prototype, $validValues);
		}
		
		return $this->fields['prototype'] = $prototype;
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
	 * Get Vendor
	 * @return string
	 */
	public function getVendor()
	{
		if(!isset($this->fields['vendor']))
			return null;
			
		$vendor = $this->fields['vendor'];
		return $vendor;
	}
	
	/**
	 * Set Vendor
	 * @param string $vendor
	 */
	public function setVendor($vendor)
	{
		if(strlen($vendor) > 60)
			throw new QualityCenterInputException("Input [Vendor] value [$vendor] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($vendor), 60);
		
		return $this->fields['vendor'] = $vendor;
	}
	
	/**
	 * Get Version Check In Comments
	 * @return string
	 */
	public function getVcCheckinComments()
	{
		if(!isset($this->fields['vc-checkin-comments']))
			return null;
			
		$vcCheckinComments = $this->fields['vc-checkin-comments'];
		return $vcCheckinComments;
	}
	
	/**
	 * Set Version Check In Comments
	 * @param string $vcCheckinComments
	 */
	public function setVcCheckinComments($vcCheckinComments)
	{
		return $this->fields['vc-checkin-comments'] = $vcCheckinComments;
	}
	
	/**
	 * Get Version Check In Date as linux timestamp
	 * @return int
	 */
	public function getVcCheckinDate()
	{
		if(!isset($this->fields['vc-checkin-date']))
			return null;
			
		$vcCheckinDate = $this->fields['vc-checkin-date'];
		$vcCheckinDateDate = date_parse_from_format('Y-m-d', $vcCheckinDate);
		$vcCheckinDate = mktime(0, 0, 0, $vcCheckinDateDate['month'], $vcCheckinDateDate['day'], $vcCheckinDateDate['year']);
		
		return $vcCheckinDate;
	}
	
	/**
	 * Set Version Check In Date as linux timestamp
	 * @param int $vcCheckinDate
	 */
	public function setVcCheckinDate($vcCheckinDate)
	{
		$vcCheckinDate = date('Y-m-d', $vcCheckinDate);
		return $this->fields['vc-checkin-date'] = $vcCheckinDate;
	}
	
	/**
	 * Get Version Check In Time
	 * @return string
	 */
	public function getVcCheckinTime()
	{
		if(!isset($this->fields['vc-checkin-time']))
			return null;
			
		$vcCheckinTime = $this->fields['vc-checkin-time'];
		return $vcCheckinTime;
	}
	
	/**
	 * Set Version Check In Time
	 * @param string $vcCheckinTime
	 */
	public function setVcCheckinTime($vcCheckinTime)
	{
		if(strlen($vcCheckinTime) > 10)
			throw new QualityCenterInputException("Input [VcCheckinTime] value [$vcCheckinTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($vcCheckinTime), 10);
		
		return $this->fields['vc-checkin-time'] = $vcCheckinTime;
	}
	
	/**
	 * Get Version Check Out Comments
	 * @return string
	 */
	public function getVcCheckoutComments()
	{
		if(!isset($this->fields['vc-checkout-comments']))
			return null;
			
		$vcCheckoutComments = $this->fields['vc-checkout-comments'];
		return $vcCheckoutComments;
	}
	
	/**
	 * Set Version Check Out Comments
	 * @param string $vcCheckoutComments
	 */
	public function setVcCheckoutComments($vcCheckoutComments)
	{
		return $this->fields['vc-checkout-comments'] = $vcCheckoutComments;
	}
	
	/**
	 * Get Version Check Out Date as linux timestamp
	 * @return int
	 */
	public function getVcCheckoutDate()
	{
		if(!isset($this->fields['vc-checkout-date']))
			return null;
			
		$vcCheckoutDate = $this->fields['vc-checkout-date'];
		$vcCheckoutDateDate = date_parse_from_format('Y-m-d', $vcCheckoutDate);
		$vcCheckoutDate = mktime(0, 0, 0, $vcCheckoutDateDate['month'], $vcCheckoutDateDate['day'], $vcCheckoutDateDate['year']);
		
		return $vcCheckoutDate;
	}
	
	/**
	 * Set Version Check Out Date as linux timestamp
	 * @param int $vcCheckoutDate
	 */
	public function setVcCheckoutDate($vcCheckoutDate)
	{
		$vcCheckoutDate = date('Y-m-d', $vcCheckoutDate);
		return $this->fields['vc-checkout-date'] = $vcCheckoutDate;
	}
	
	/**
	 * Get Version Check Out Time
	 * @return string
	 */
	public function getVcCheckoutTime()
	{
		if(!isset($this->fields['vc-checkout-time']))
			return null;
			
		$vcCheckoutTime = $this->fields['vc-checkout-time'];
		return $vcCheckoutTime;
	}
	
	/**
	 * Set Version Check Out Time
	 * @param string $vcCheckoutTime
	 */
	public function setVcCheckoutTime($vcCheckoutTime)
	{
		if(strlen($vcCheckoutTime) > 10)
			throw new QualityCenterInputException("Input [VcCheckoutTime] value [$vcCheckoutTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($vcCheckoutTime), 10);
		
		return $this->fields['vc-checkout-time'] = $vcCheckoutTime;
	}
	
	/**
	 * Get Version Checked In By
	 * @return string
	 */
	public function getVcCheckinUserName()
	{
		if(!isset($this->fields['vc-checkin-user-name']))
			return null;
			
		$vcCheckinUserName = $this->fields['vc-checkin-user-name'];
		return $vcCheckinUserName;
	}
	
	/**
	 * Set Version Checked In By
	 * @param string $vcCheckinUserName
	 */
	public function setVcCheckinUserName($vcCheckinUserName)
	{
		return $this->fields['vc-checkin-user-name'] = $vcCheckinUserName;
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
	 * Get Version Number
	 * @return string
	 */
	public function getVcVersionNumber()
	{
		if(!isset($this->fields['vc-version-number']))
			return null;
			
		$vcVersionNumber = $this->fields['vc-version-number'];
		return $vcVersionNumber;
	}
	
	/**
	 * Set Version Number
	 * @param string $vcVersionNumber
	 */
	public function setVcVersionNumber($vcVersionNumber)
	{
		return $this->fields['vc-version-number'] = $vcVersionNumber;
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
	 * Get Version Status
	 * @return string
	 */
	public function getVcStatus()
	{
		if(!isset($this->fields['vc-status']))
			return null;
			
		$vcStatus = $this->fields['vc-status'];
		return $vcStatus;
	}
	
	/**
	 * Set Version Status
	 * @param string $vcStatus
	 */
	public function setVcStatus($vcStatus)
	{
		$validValues = array(
			'Checked_In',
			'Checked_Out',
		);
					
		if($vcStatus instanceof QualityCenterExpression)
		{
			$vcStatus->validateEnum('VcStatus', $validValues);
		}			
		elseif(!in_array($vcStatus, $validValues))
		{
			throw new QualityCenterInputException("Input [VcStatus] value [$vcStatus] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $vcStatus, $validValues);
		}
		
		return $this->fields['vc-status'] = $vcStatus;
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
