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
class QualityCenterDefectLinkFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'owner',
			'creation-time',
			'first-endpoint-id',
			'comment',
			'id',
			'link-type',
			'second-endpoint-status',
			'second-endpoint-id',
			'second-endpoint-name',
			'second-endpoint-type',
		);
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
	 * Get Creation Date as linux timestamp
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
	 * Set Creation Date as linux timestamp
	 * @param mixed $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		if(is_int($creationTime))
			$creationTime = date('Y-m-d', $creationTime);
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Defect ID
	 * @return string
	 */
	public function getFirstEndpointId()
	{
		if(!isset($this->fields['first-endpoint-id']))
			return null;
			
		$firstEndpointId = $this->fields['first-endpoint-id'];
		return $firstEndpointId;
	}
	
	/**
	 * Set Defect ID
	 * @param string $firstEndpointId
	 */
	public function setFirstEndpointId($firstEndpointId)
	{
		return $this->fields['first-endpoint-id'] = $firstEndpointId;
	}
	
	/**
	 * Get Link Comment
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
	 * Set Link Comment
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		if(strlen($comment) > 255)
			throw new QualityCenterInputException("Input [Comment] value [$comment] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($comment), 255);
		
		return $this->fields['comment'] = $comment;
	}
	
	/**
	 * Get Link ID
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
	 * Set Link ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Link Type
	 * @return string
	 */
	public function getLinkType()
	{
		if(!isset($this->fields['link-type']))
			return null;
			
		$linkType = $this->fields['link-type'];
		return $linkType;
	}
	
	/**
	 * Set Link Type
	 * @param string $linkType
	 */
	public function setLinkType($linkType)
	{
		$validValues = array(
			'Duplicate',
			'Related',
		);
					
		if($linkType instanceof QualityCenterExpression)
		{
			$linkType->validateEnum('LinkType', $validValues);
		}			
		elseif(!in_array($linkType, $validValues))
		{
			throw new QualityCenterInputException("Input [LinkType] value [$linkType] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $linkType, $validValues);
		}
		
		return $this->fields['link-type'] = $linkType;
	}
	
	/**
	 * Get Linked By Status
	 * @return string
	 */
	public function getSecondEndpointStatus()
	{
		if(!isset($this->fields['second-endpoint-status']))
			return null;
			
		$secondEndpointStatus = $this->fields['second-endpoint-status'];
		return $secondEndpointStatus;
	}
	
	/**
	 * Set Linked By Status
	 * @param string $secondEndpointStatus
	 */
	public function setSecondEndpointStatus($secondEndpointStatus)
	{
		if(strlen($secondEndpointStatus) > 70)
			throw new QualityCenterInputException("Input [SecondEndpointStatus] value [$secondEndpointStatus] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($secondEndpointStatus), 70);
		
		return $this->fields['second-endpoint-status'] = $secondEndpointStatus;
	}
	
	/**
	 * Get Linked Entity ID
	 * @return string
	 */
	public function getSecondEndpointId()
	{
		if(!isset($this->fields['second-endpoint-id']))
			return null;
			
		$secondEndpointId = $this->fields['second-endpoint-id'];
		return $secondEndpointId;
	}
	
	/**
	 * Set Linked Entity ID
	 * @param string $secondEndpointId
	 */
	public function setSecondEndpointId($secondEndpointId)
	{
		return $this->fields['second-endpoint-id'] = $secondEndpointId;
	}
	
	/**
	 * Get Linked Entity Name
	 * @return string
	 */
	public function getSecondEndpointName()
	{
		if(!isset($this->fields['second-endpoint-name']))
			return null;
			
		$secondEndpointName = $this->fields['second-endpoint-name'];
		return $secondEndpointName;
	}
	
	/**
	 * Set Linked Entity Name
	 * @param string $secondEndpointName
	 */
	public function setSecondEndpointName($secondEndpointName)
	{
		if(strlen($secondEndpointName) > 255)
			throw new QualityCenterInputException("Input [SecondEndpointName] value [$secondEndpointName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($secondEndpointName), 255);
		
		return $this->fields['second-endpoint-name'] = $secondEndpointName;
	}
	
	/**
	 * Get Linked Entity Type
	 * @return string
	 */
	public function getSecondEndpointType()
	{
		if(!isset($this->fields['second-endpoint-type']))
			return null;
			
		$secondEndpointType = $this->fields['second-endpoint-type'];
		return $secondEndpointType;
	}
	
	/**
	 * Set Linked Entity Type
	 * @param string $secondEndpointType
	 */
	public function setSecondEndpointType($secondEndpointType)
	{
		if(strlen($secondEndpointType) > 40)
			throw new QualityCenterInputException("Input [SecondEndpointType] value [$secondEndpointType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($secondEndpointType), 40);
		
		return $this->fields['second-endpoint-type'] = $secondEndpointType;
	}
	
}
