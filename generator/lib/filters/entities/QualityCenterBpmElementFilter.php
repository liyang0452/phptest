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
class QualityCenterBpmElementFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'id',
			'has-dependencies',
			'has-attachments',
			'comments',
			'created-by',
			'creation-time',
			'description',
			'embedded-in-guid',
			'external-id',
			'additional-data',
			'guid',
			'ref-model-guid',
			'height',
			'import-date',
			'owner',
			'lane-guid',
			'vts',
			'name',
			'parent-id',
			'points',
			'pool-guid',
			'location-x',
			'location-y',
			'priority',
			'rep-req-id',
			'source-guid',
			'status',
			'subtype-id',
			'target-guid',
			'is-testable',
			'text',
			'element-type-id',
			'vc-checkout-user-name',
			'ver-stamp',
			'is-visible',
			'width',
			'text-sync',
		);
	}
	
	/**
	 * Get Activity ID
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
	 * Set Activity ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
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
	public function getCreatedBy()
	{
		if(!isset($this->fields['created-by']))
			return null;
			
		$createdBy = $this->fields['created-by'];
		return $createdBy;
	}
	
	/**
	 * Set Created By
	 * @param string $createdBy
	 */
	public function setCreatedBy($createdBy)
	{
		return $this->fields['created-by'] = $createdBy;
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
	 * Get Embedded in Element
	 * @return string
	 */
	public function getEmbeddedInGuid()
	{
		if(!isset($this->fields['embedded-in-guid']))
			return null;
			
		$embeddedInGuid = $this->fields['embedded-in-guid'];
		return $embeddedInGuid;
	}
	
	/**
	 * Set Embedded in Element
	 * @param string $embeddedInGuid
	 */
	public function setEmbeddedInGuid($embeddedInGuid)
	{
		if(strlen($embeddedInGuid) > 80)
			throw new QualityCenterInputException("Input [EmbeddedInGuid] value [$embeddedInGuid] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($embeddedInGuid), 80);
		
		return $this->fields['embedded-in-guid'] = $embeddedInGuid;
	}
	
	/**
	 * Get External Id
	 * @return string
	 */
	public function getExternalId()
	{
		if(!isset($this->fields['external-id']))
			return null;
			
		$externalId = $this->fields['external-id'];
		return $externalId;
	}
	
	/**
	 * Set External Id
	 * @param string $externalId
	 */
	public function setExternalId($externalId)
	{
		if(strlen($externalId) > 80)
			throw new QualityCenterInputException("Input [ExternalId] value [$externalId] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($externalId), 80);
		
		return $this->fields['external-id'] = $externalId;
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
	 * Get Guid of referenced model
	 * @return string
	 */
	public function getRefModelGuid()
	{
		if(!isset($this->fields['ref-model-guid']))
			return null;
			
		$refModelGuid = $this->fields['ref-model-guid'];
		return $refModelGuid;
	}
	
	/**
	 * Set Guid of referenced model
	 * @param string $refModelGuid
	 */
	public function setRefModelGuid($refModelGuid)
	{
		if(strlen($refModelGuid) > 80)
			throw new QualityCenterInputException("Input [RefModelGuid] value [$refModelGuid] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($refModelGuid), 80);
		
		return $this->fields['ref-model-guid'] = $refModelGuid;
	}
	
	/**
	 * Get Height
	 * @return string
	 */
	public function getHeight()
	{
		if(!isset($this->fields['height']))
			return null;
			
		$height = $this->fields['height'];
		return $height;
	}
	
	/**
	 * Set Height
	 * @param string $height
	 */
	public function setHeight($height)
	{
		return $this->fields['height'] = $height;
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
	public function getOwner()
	{
		if(!isset($this->fields['owner']))
			return null;
			
		$owner = $this->fields['owner'];
		return $owner;
	}
	
	/**
	 * Set Imported By
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Lane
	 * @return string
	 */
	public function getLaneGuid()
	{
		if(!isset($this->fields['lane-guid']))
			return null;
			
		$laneGuid = $this->fields['lane-guid'];
		return $laneGuid;
	}
	
	/**
	 * Set Lane
	 * @param string $laneGuid
	 */
	public function setLaneGuid($laneGuid)
	{
		if(strlen($laneGuid) > 80)
			throw new QualityCenterInputException("Input [LaneGuid] value [$laneGuid] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($laneGuid), 80);
		
		return $this->fields['lane-guid'] = $laneGuid;
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
	 * Get Points
	 * @return string
	 */
	public function getPoints()
	{
		if(!isset($this->fields['points']))
			return null;
			
		$points = $this->fields['points'];
		return $points;
	}
	
	/**
	 * Set Points
	 * @param string $points
	 */
	public function setPoints($points)
	{
		if(strlen($points) > 255)
			throw new QualityCenterInputException("Input [Points] value [$points] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($points), 255);
		
		return $this->fields['points'] = $points;
	}
	
	/**
	 * Get Pool
	 * @return string
	 */
	public function getPoolGuid()
	{
		if(!isset($this->fields['pool-guid']))
			return null;
			
		$poolGuid = $this->fields['pool-guid'];
		return $poolGuid;
	}
	
	/**
	 * Set Pool
	 * @param string $poolGuid
	 */
	public function setPoolGuid($poolGuid)
	{
		if(strlen($poolGuid) > 80)
			throw new QualityCenterInputException("Input [PoolGuid] value [$poolGuid] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($poolGuid), 80);
		
		return $this->fields['pool-guid'] = $poolGuid;
	}
	
	/**
	 * Get Position X
	 * @return string
	 */
	public function getLocationX()
	{
		if(!isset($this->fields['location-x']))
			return null;
			
		$locationX = $this->fields['location-x'];
		return $locationX;
	}
	
	/**
	 * Set Position X
	 * @param string $locationX
	 */
	public function setLocationX($locationX)
	{
		return $this->fields['location-x'] = $locationX;
	}
	
	/**
	 * Get Position Y
	 * @return string
	 */
	public function getLocationY()
	{
		if(!isset($this->fields['location-y']))
			return null;
			
		$locationY = $this->fields['location-y'];
		return $locationY;
	}
	
	/**
	 * Set Position Y
	 * @param string $locationY
	 */
	public function setLocationY($locationY)
	{
		return $this->fields['location-y'] = $locationY;
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
	 * Get Source Id
	 * @return string
	 */
	public function getSourceGuid()
	{
		if(!isset($this->fields['source-guid']))
			return null;
			
		$sourceGuid = $this->fields['source-guid'];
		return $sourceGuid;
	}
	
	/**
	 * Set Source Id
	 * @param string $sourceGuid
	 */
	public function setSourceGuid($sourceGuid)
	{
		if(strlen($sourceGuid) > 80)
			throw new QualityCenterInputException("Input [SourceGuid] value [$sourceGuid] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($sourceGuid), 80);
		
		return $this->fields['source-guid'] = $sourceGuid;
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
	 * Get Subtype
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
	 * Set Subtype
	 * @param string $subtypeId
	 */
	public function setSubtypeId($subtypeId)
	{
		if(strlen($subtypeId) > 50)
			throw new QualityCenterInputException("Input [SubtypeId] value [$subtypeId] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($subtypeId), 50);
		
		return $this->fields['subtype-id'] = $subtypeId;
	}
	
	/**
	 * Get Target Id
	 * @return string
	 */
	public function getTargetGuid()
	{
		if(!isset($this->fields['target-guid']))
			return null;
			
		$targetGuid = $this->fields['target-guid'];
		return $targetGuid;
	}
	
	/**
	 * Set Target Id
	 * @param string $targetGuid
	 */
	public function setTargetGuid($targetGuid)
	{
		if(strlen($targetGuid) > 80)
			throw new QualityCenterInputException("Input [TargetGuid] value [$targetGuid] excceeded maximum length [80]", QualityCenterInputException::SIZE, strlen($targetGuid), 80);
		
		return $this->fields['target-guid'] = $targetGuid;
	}
	
	/**
	 * Get Testable
	 * @return string
	 */
	public function getIsTestable()
	{
		if(!isset($this->fields['is-testable']))
			return null;
			
		$isTestable = $this->fields['is-testable'];
		return $isTestable;
	}
	
	/**
	 * Set Testable
	 * @param string $isTestable
	 */
	public function setIsTestable($isTestable)
	{
		if(strlen($isTestable) > 1)
			throw new QualityCenterInputException("Input [IsTestable] value [$isTestable] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isTestable), 1);
		
		return $this->fields['is-testable'] = $isTestable;
	}
	
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		if(!isset($this->fields['text']))
			return null;
			
		$text = $this->fields['text'];
		return $text;
	}
	
	/**
	 * Set Text
	 * @param string $text
	 */
	public function setText($text)
	{
		return $this->fields['text'] = $text;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getElementTypeId()
	{
		if(!isset($this->fields['element-type-id']))
			return null;
			
		$elementTypeId = $this->fields['element-type-id'];
		return $elementTypeId;
	}
	
	/**
	 * Set Type
	 * @param string $elementTypeId
	 */
	public function setElementTypeId($elementTypeId)
	{
		return $this->fields['element-type-id'] = $elementTypeId;
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
	 * Get Visible Element
	 * @return string
	 */
	public function getIsVisible()
	{
		if(!isset($this->fields['is-visible']))
			return null;
			
		$isVisible = $this->fields['is-visible'];
		return $isVisible;
	}
	
	/**
	 * Set Visible Element
	 * @param string $isVisible
	 */
	public function setIsVisible($isVisible)
	{
		if(strlen($isVisible) > 1)
			throw new QualityCenterInputException("Input [IsVisible] value [$isVisible] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isVisible), 1);
		
		return $this->fields['is-visible'] = $isVisible;
	}
	
	/**
	 * Get Width
	 * @return string
	 */
	public function getWidth()
	{
		if(!isset($this->fields['width']))
			return null;
			
		$width = $this->fields['width'];
		return $width;
	}
	
	/**
	 * Set Width
	 * @param string $width
	 */
	public function setWidth($width)
	{
		return $this->fields['width'] = $width;
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
