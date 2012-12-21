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
class QualityCenterComponentFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'is-iteratable',
			'bpta-location-id-in-app',
			'has-dependencies',
			'owner',
			'script-type',
			'bpta-change-detected',
			'dev-comments',
			'bpta-component-type',
			'folder-name',
			'parent-id',
			'id',
			'has-input-params',
			'name',
			'has-output-params',
			'data',
			'created-by',
			'creation-time',
			'default-picture-id',
			'deletion-date',
			'description',
			'has-picture',
			'is-obsolete',
			'bpta-change-timestamp',
			'bpta-last-update-timestamp',
			'app-area-id',
			'bpta-flow-test-id',
			'last-modified',
			'deleted-from-path',
			'physical-path',
			'bpta-sor-id',
			'src-id',
			'status',
			'steps-data',
			'subtype-id',
			'version',
			'vc-checkin-comments',
			'vc-checkin-date',
			'vc-checkin-time',
			'vc-checkout-comments',
			'vc-checkout-date',
			'vc-checkout-time',
			'vc-checkin-user-name',
			'vc-checkout-user-name',
			'vc-version-number',
			'ver-stamp',
			'vc-status',
			'text-sync',
		);
	}
	
	/**
	 * Get Allow iterations
	 * @return string
	 */
	public function getIsIteratable()
	{
		if(!isset($this->fields['is-iteratable']))
			return null;
			
		$isIteratable = $this->fields['is-iteratable'];
		return $isIteratable;
	}
	
	/**
	 * Set Allow iterations
	 * @param string $isIteratable
	 */
	public function setIsIteratable($isIteratable)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($isIteratable instanceof QualityCenterExpression)
		{
			$isIteratable->validateEnum('IsIteratable', $validValues);
		}			
		elseif(!in_array($isIteratable, $validValues))
		{
			throw new QualityCenterInputException("Input [IsIteratable] value [$isIteratable] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $isIteratable, $validValues);
		}
		
		return $this->fields['is-iteratable'] = $isIteratable;
	}
	
	/**
	 * Get Application Location Related ID
	 * @return string
	 */
	public function getBptaLocationIdInApp()
	{
		if(!isset($this->fields['bpta-location-id-in-app']))
			return null;
			
		$bptaLocationIdInApp = $this->fields['bpta-location-id-in-app'];
		return $bptaLocationIdInApp;
	}
	
	/**
	 * Set Application Location Related ID
	 * @param string $bptaLocationIdInApp
	 */
	public function setBptaLocationIdInApp($bptaLocationIdInApp)
	{
		if(strlen($bptaLocationIdInApp) > 255)
			throw new QualityCenterInputException("Input [BptaLocationIdInApp] value [$bptaLocationIdInApp] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($bptaLocationIdInApp), 255);
		
		return $this->fields['bpta-location-id-in-app'] = $bptaLocationIdInApp;
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
	 * Get Assigned to
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
	 * Set Assigned to
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Automation engine
	 * @return string
	 */
	public function getScriptType()
	{
		if(!isset($this->fields['script-type']))
			return null;
			
		$scriptType = $this->fields['script-type'];
		return $scriptType;
	}
	
	/**
	 * Set Automation engine
	 * @param string $scriptType
	 */
	public function setScriptType($scriptType)
	{
		$validValues = array(
			'MANUAL',
			'QT-KW',
			'QT-SCRIPTED',
		);
					
		if($scriptType instanceof QualityCenterExpression)
		{
			$scriptType->validateEnum('ScriptType', $validValues);
		}			
		elseif(!in_array($scriptType, $validValues))
		{
			throw new QualityCenterInputException("Input [ScriptType] value [$scriptType] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $scriptType, $validValues);
		}
		
		return $this->fields['script-type'] = $scriptType;
	}
	
	/**
	 * Get Change Status
	 * @return string
	 */
	public function getBptaChangeDetected()
	{
		if(!isset($this->fields['bpta-change-detected']))
			return null;
			
		$bptaChangeDetected = $this->fields['bpta-change-detected'];
		return $bptaChangeDetected;
	}
	
	/**
	 * Set Change Status
	 * @param string $bptaChangeDetected
	 */
	public function setBptaChangeDetected($bptaChangeDetected)
	{
		return $this->fields['bpta-change-detected'] = $bptaChangeDetected;
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
	 * Get Component Application Type
	 * @return string
	 */
	public function getBptaComponentType()
	{
		if(!isset($this->fields['bpta-component-type']))
			return null;
			
		$bptaComponentType = $this->fields['bpta-component-type'];
		return $bptaComponentType;
	}
	
	/**
	 * Set Component Application Type
	 * @param string $bptaComponentType
	 */
	public function setBptaComponentType($bptaComponentType)
	{
		return $this->fields['bpta-component-type'] = $bptaComponentType;
	}
	
	/**
	 * Get Component Folder
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
	 * Set Component Folder
	 * @param string $folderName
	 */
	public function setFolderName($folderName)
	{
		if(strlen($folderName) > 99999)
			throw new QualityCenterInputException("Input [FolderName] value [$folderName] excceeded maximum length [99999]", QualityCenterInputException::SIZE, strlen($folderName), 99999);
		
		return $this->fields['folder-name'] = $folderName;
	}
	
	/**
	 * Get Component Folder ID
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
	 * Set Component Folder ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Component ID
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
	 * Set Component ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Component input parameters status
	 * @return string
	 */
	public function getHasInputParams()
	{
		if(!isset($this->fields['has-input-params']))
			return null;
			
		$hasInputParams = $this->fields['has-input-params'];
		return $hasInputParams;
	}
	
	/**
	 * Set Component input parameters status
	 * @param string $hasInputParams
	 */
	public function setHasInputParams($hasInputParams)
	{
		if(strlen($hasInputParams) > 1)
			throw new QualityCenterInputException("Input [HasInputParams] value [$hasInputParams] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasInputParams), 1);
		
		return $this->fields['has-input-params'] = $hasInputParams;
	}
	
	/**
	 * Get Component name
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
	 * Set Component name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Component output parameters status
	 * @return string
	 */
	public function getHasOutputParams()
	{
		if(!isset($this->fields['has-output-params']))
			return null;
			
		$hasOutputParams = $this->fields['has-output-params'];
		return $hasOutputParams;
	}
	
	/**
	 * Set Component output parameters status
	 * @param string $hasOutputParams
	 */
	public function setHasOutputParams($hasOutputParams)
	{
		if(strlen($hasOutputParams) > 1)
			throw new QualityCenterInputException("Input [HasOutputParams] value [$hasOutputParams] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasOutputParams), 1);
		
		return $this->fields['has-output-params'] = $hasOutputParams;
	}
	
	/**
	 * Get Components Steps
	 * @return string
	 */
	public function getData()
	{
		if(!isset($this->fields['data']))
			return null;
			
		$data = $this->fields['data'];
		return $data;
	}
	
	/**
	 * Set Components Steps
	 * @param string $data
	 */
	public function setData($data)
	{
		return $this->fields['data'] = $data;
	}
	
	/**
	 * Get Created by
	 * @return string
	 */
	public function getCreatedBy()
	{
		if(!isset($this->fields['created-by']))
			return null;
			
		$createdBy = $this->fields['created-by'];
		return $createdBy;
	}
	
	/**
	 * Set Created by
	 * @param string $createdBy
	 */
	public function setCreatedBy($createdBy)
	{
		return $this->fields['created-by'] = $createdBy;
	}
	
	/**
	 * Get Creation date as linux timestamp
	 * @return mixed
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
	 * @param mixed $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		if(is_int($creationTime))
			$creationTime = date('Y-m-d', $creationTime);
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Default Picture ID
	 * @return string
	 */
	public function getDefaultPictureId()
	{
		if(!isset($this->fields['default-picture-id']))
			return null;
			
		$defaultPictureId = $this->fields['default-picture-id'];
		return $defaultPictureId;
	}
	
	/**
	 * Set Default Picture ID
	 * @param string $defaultPictureId
	 */
	public function setDefaultPictureId($defaultPictureId)
	{
		return $this->fields['default-picture-id'] = $defaultPictureId;
	}
	
	/**
	 * Get Deleted on as linux timestamp
	 * @return mixed
	 */
	public function getDeletionDate()
	{
		if(!isset($this->fields['deletion-date']))
			return null;
			
		$deletionDate = $this->fields['deletion-date'];
		$deletionDateDate = date_parse_from_format('Y-m-d', $deletionDate);
		$deletionDate = mktime(0, 0, 0, $deletionDateDate['month'], $deletionDateDate['day'], $deletionDateDate['year']);
		
		return $deletionDate;
	}
	
	/**
	 * Set Deleted on as linux timestamp
	 * @param mixed $deletionDate
	 */
	public function setDeletionDate($deletionDate)
	{
		if(is_int($deletionDate))
			$deletionDate = date('Y-m-d', $deletionDate);
		return $this->fields['deletion-date'] = $deletionDate;
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
	 * Get Has Picture
	 * @return string
	 */
	public function getHasPicture()
	{
		if(!isset($this->fields['has-picture']))
			return null;
			
		$hasPicture = $this->fields['has-picture'];
		return $hasPicture;
	}
	
	/**
	 * Set Has Picture
	 * @param string $hasPicture
	 */
	public function setHasPicture($hasPicture)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($hasPicture instanceof QualityCenterExpression)
		{
			$hasPicture->validateEnum('HasPicture', $validValues);
		}			
		elseif(!in_array($hasPicture, $validValues))
		{
			throw new QualityCenterInputException("Input [HasPicture] value [$hasPicture] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $hasPicture, $validValues);
		}
		
		return $this->fields['has-picture'] = $hasPicture;
	}
	
	/**
	 * Get Is Obsolete
	 * @return string
	 */
	public function getIsObsolete()
	{
		if(!isset($this->fields['is-obsolete']))
			return null;
			
		$isObsolete = $this->fields['is-obsolete'];
		return $isObsolete;
	}
	
	/**
	 * Set Is Obsolete
	 * @param string $isObsolete
	 */
	public function setIsObsolete($isObsolete)
	{
		if(strlen($isObsolete) > 1)
			throw new QualityCenterInputException("Input [IsObsolete] value [$isObsolete] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isObsolete), 1);
		
		return $this->fields['is-obsolete'] = $isObsolete;
	}
	
	/**
	 * Get Last Detected Change as linux timestamp
	 * @return mixed
	 */
	public function getBptaChangeTimestamp()
	{
		if(!isset($this->fields['bpta-change-timestamp']))
			return null;
			
		$bptaChangeTimestamp = $this->fields['bpta-change-timestamp'];
		$bptaChangeTimestampDate = date_parse_from_format('Y-m-d', $bptaChangeTimestamp);
		$bptaChangeTimestamp = mktime(0, 0, 0, $bptaChangeTimestampDate['month'], $bptaChangeTimestampDate['day'], $bptaChangeTimestampDate['year']);
		
		return $bptaChangeTimestamp;
	}
	
	/**
	 * Set Last Detected Change as linux timestamp
	 * @param mixed $bptaChangeTimestamp
	 */
	public function setBptaChangeTimestamp($bptaChangeTimestamp)
	{
		if(is_int($bptaChangeTimestamp))
			$bptaChangeTimestamp = date('Y-m-d', $bptaChangeTimestamp);
		return $this->fields['bpta-change-timestamp'] = $bptaChangeTimestamp;
	}
	
	/**
	 * Get Last Update as linux timestamp
	 * @return mixed
	 */
	public function getBptaLastUpdateTimestamp()
	{
		if(!isset($this->fields['bpta-last-update-timestamp']))
			return null;
			
		$bptaLastUpdateTimestamp = $this->fields['bpta-last-update-timestamp'];
		$bptaLastUpdateTimestampDate = date_parse_from_format('Y-m-d', $bptaLastUpdateTimestamp);
		$bptaLastUpdateTimestamp = mktime(0, 0, 0, $bptaLastUpdateTimestampDate['month'], $bptaLastUpdateTimestampDate['day'], $bptaLastUpdateTimestampDate['year']);
		
		return $bptaLastUpdateTimestamp;
	}
	
	/**
	 * Set Last Update as linux timestamp
	 * @param mixed $bptaLastUpdateTimestamp
	 */
	public function setBptaLastUpdateTimestamp($bptaLastUpdateTimestamp)
	{
		if(is_int($bptaLastUpdateTimestamp))
			$bptaLastUpdateTimestamp = date('Y-m-d', $bptaLastUpdateTimestamp);
		return $this->fields['bpta-last-update-timestamp'] = $bptaLastUpdateTimestamp;
	}
	
	/**
	 * Get Linked Application Area ID
	 * @return string
	 */
	public function getAppAreaId()
	{
		if(!isset($this->fields['app-area-id']))
			return null;
			
		$appAreaId = $this->fields['app-area-id'];
		return $appAreaId;
	}
	
	/**
	 * Set Linked Application Area ID
	 * @param string $appAreaId
	 */
	public function setAppAreaId($appAreaId)
	{
		return $this->fields['app-area-id'] = $appAreaId;
	}
	
	/**
	 * Get Linked flow test ID
	 * @return string
	 */
	public function getBptaFlowTestId()
	{
		if(!isset($this->fields['bpta-flow-test-id']))
			return null;
			
		$bptaFlowTestId = $this->fields['bpta-flow-test-id'];
		return $bptaFlowTestId;
	}
	
	/**
	 * Set Linked flow test ID
	 * @param string $bptaFlowTestId
	 */
	public function setBptaFlowTestId($bptaFlowTestId)
	{
		return $this->fields['bpta-flow-test-id'] = $bptaFlowTestId;
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
	 * Get Original Location
	 * @return string
	 */
	public function getDeletedFromPath()
	{
		if(!isset($this->fields['deleted-from-path']))
			return null;
			
		$deletedFromPath = $this->fields['deleted-from-path'];
		return $deletedFromPath;
	}
	
	/**
	 * Set Original Location
	 * @param string $deletedFromPath
	 */
	public function setDeletedFromPath($deletedFromPath)
	{
		if(strlen($deletedFromPath) > 255)
			throw new QualityCenterInputException("Input [DeletedFromPath] value [$deletedFromPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($deletedFromPath), 255);
		
		return $this->fields['deleted-from-path'] = $deletedFromPath;
	}
	
	/**
	 * Get Physical path
	 * @return string
	 */
	public function getPhysicalPath()
	{
		if(!isset($this->fields['physical-path']))
			return null;
			
		$physicalPath = $this->fields['physical-path'];
		return $physicalPath;
	}
	
	/**
	 * Set Physical path
	 * @param string $physicalPath
	 */
	public function setPhysicalPath($physicalPath)
	{
		if(strlen($physicalPath) > 255)
			throw new QualityCenterInputException("Input [PhysicalPath] value [$physicalPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($physicalPath), 255);
		
		return $this->fields['physical-path'] = $physicalPath;
	}
	
	/**
	 * Get Shared Object Repository ID
	 * @return string
	 */
	public function getBptaSorId()
	{
		if(!isset($this->fields['bpta-sor-id']))
			return null;
			
		$bptaSorId = $this->fields['bpta-sor-id'];
		return $bptaSorId;
	}
	
	/**
	 * Set Shared Object Repository ID
	 * @param string $bptaSorId
	 */
	public function setBptaSorId($bptaSorId)
	{
		return $this->fields['bpta-sor-id'] = $bptaSorId;
	}
	
	/**
	 * Get Source ID
	 * @return string
	 */
	public function getSrcId()
	{
		if(!isset($this->fields['src-id']))
			return null;
			
		$srcId = $this->fields['src-id'];
		return $srcId;
	}
	
	/**
	 * Set Source ID
	 * @param string $srcId
	 */
	public function setSrcId($srcId)
	{
		return $this->fields['src-id'] = $srcId;
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
			'Error',
			'Maintenance',
			'Not Implemented',
			'Ready',
			'Under Development',
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
	 * Get Step Data
	 * @return string
	 */
	public function getStepsData()
	{
		if(!isset($this->fields['steps-data']))
			return null;
			
		$stepsData = $this->fields['steps-data'];
		return $stepsData;
	}
	
	/**
	 * Set Step Data
	 * @param string $stepsData
	 */
	public function setStepsData($stepsData)
	{
		return $this->fields['steps-data'] = $stepsData;
	}
	
	/**
	 * Get Subtype ID
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
	 * Set Subtype ID
	 * @param string $subtypeId
	 */
	public function setSubtypeId($subtypeId)
	{
		if(strlen($subtypeId) > 50)
			throw new QualityCenterInputException("Input [SubtypeId] value [$subtypeId] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($subtypeId), 50);
		
		return $this->fields['subtype-id'] = $subtypeId;
	}
	
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		if(!isset($this->fields['version']))
			return null;
			
		$version = $this->fields['version'];
		return $version;
	}
	
	/**
	 * Set Version
	 * @param string $version
	 */
	public function setVersion($version)
	{
		if(strlen($version) > 255)
			throw new QualityCenterInputException("Input [Version] value [$version] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($version), 255);
		
		return $this->fields['version'] = $version;
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
	 * @return mixed
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
	 * @param mixed $vcCheckinDate
	 */
	public function setVcCheckinDate($vcCheckinDate)
	{
		if(is_int($vcCheckinDate))
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
	 * @return mixed
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
	 * @param mixed $vcCheckoutDate
	 */
	public function setVcCheckoutDate($vcCheckoutDate)
	{
		if(is_int($vcCheckoutDate))
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
