<?php
/**
 * @package External
 * @subpackage qc.filters
 */
require_once __DIR__ . '/../QualityCenterFilter.php';
require_once __DIR__ . '/../expressions/QualityCenterExpression.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterResourceFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'has-dependencies',
			'dev-comments',
			'owner',
			'creation-time',
			'description',
			'storage-path',
			'parent-id',
			'location-type',
			'vts',
			'name',
			'folder-name',
			'id',
			'subtype-id',
			'vc-checkin-comments',
			'vc-checkin-date',
			'vc-checkin-time',
			'vc-checkout-comments',
			'vc-checkout-date',
			'vc-checkout-time',
			'vc-checkin-user-name',
			'check-out-user-name',
			'vc-version-number',
			'vc-status',
			'ver-stamp',
		);
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
	 * Get Created by
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
	 * Set Created by
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Creation date as linux timestamp
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
	 * Set Creation date as linux timestamp
	 * @param int $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		$creationTime = date('Y-m-d', $creationTime);
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
	 * Get File name
	 * @return string
	 */
	public function getStoragePath()
	{
		if(!isset($this->fields['storage-path']))
			return null;
			
		$storagePath = $this->fields['storage-path'];
		return $storagePath;
	}
	
	/**
	 * Set File name
	 * @param string $storagePath
	 */
	public function setStoragePath($storagePath)
	{
		if(strlen($storagePath) > 255)
			throw new QualityCenterInputException("Input [StoragePath] value [$storagePath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($storagePath), 255);
		
		return $this->fields['storage-path'] = $storagePath;
	}
	
	/**
	 * Get Folder ID
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
	 * Set Folder ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Location
	 * @return string
	 */
	public function getLocationType()
	{
		if(!isset($this->fields['location-type']))
			return null;
			
		$locationType = $this->fields['location-type'];
		return $locationType;
	}
	
	/**
	 * Set Location
	 * @param string $locationType
	 */
	public function setLocationType($locationType)
	{
		$validValues = array(
			'Local',
			'Reference',
		);
					
		if($locationType instanceof QualityCenterExpression)
		{
			$locationType->validateEnum('LocationType', $validValues);
		}			
		elseif(!in_array($locationType, $validValues))
		{
			throw new QualityCenterInputException("Input [LocationType] value [$locationType] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $locationType, $validValues);
		}
		
		return $this->fields['location-type'] = $locationType;
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
	 * Get Resource Folder
	 * @return string
	 */
	public function getFolderName()
	{
		if(!isset($this->fields['folder-name']))
			return null;
			
		$folderName = $this->fields['folder-name'];
		return $folderName;
	}
	
	/**
	 * Set Resource Folder
	 * @param string $folderName
	 */
	public function setFolderName($folderName)
	{
		if(strlen($folderName) > 99999)
			throw new QualityCenterInputException("Input [FolderName] value [$folderName] excceeded maximum length [99999]", QualityCenterInputException::SIZE, strlen($folderName), 99999);
		
		return $this->fields['folder-name'] = $folderName;
	}
	
	/**
	 * Get Resource ID
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
	 * Set Resource ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
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
		if(strlen($subtypeId) > 255)
			throw new QualityCenterInputException("Input [SubtypeId] value [$subtypeId] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($subtypeId), 255);
		
		return $this->fields['subtype-id'] = $subtypeId;
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
	public function getCheckOutUserName()
	{
		if(!isset($this->fields['check-out-user-name']))
			return null;
			
		$checkOutUserName = $this->fields['check-out-user-name'];
		return $checkOutUserName;
	}
	
	/**
	 * Set Version Checked Out By
	 * @param string $checkOutUserName
	 */
	public function setCheckOutUserName($checkOutUserName)
	{
		return $this->fields['check-out-user-name'] = $checkOutUserName;
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
	 * Get Version stamp
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
	 * Set Version stamp
	 * @param string $verStamp
	 */
	public function setVerStamp($verStamp)
	{
		return $this->fields['ver-stamp'] = $verStamp;
	}
	
}
