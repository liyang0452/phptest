<?php
/**
 * @package External
 * @subpackage qc.filters
 */
require_once __DIR__ . '/../QualityCenterFilter.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterAssetsRelationFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'condition',
			'data-mapping',
			'owner-desc',
			'related-desc',
			'from-endpoint-id',
			'id',
			'to-endpoint-id',
			'is-broken',
			'owner-name',
			'related-name',
			'order',
			'owner-owner-name',
			'related-owner-name',
			'owner-owner-display-type',
			'related-owner-display-type',
			'the-data',
			'from-endpoint-type',
			'owner-display-type',
			'related-display-type',
			'to-endpoint-type',
			'vc-checkout-user-name',
		);
	}
	
	/**
	 * Get Condition
	 * @return string
	 */
	public function getCondition()
	{
		if(!isset($this->fields['condition']))
			return null;
			
		$condition = $this->fields['condition'];
		return $condition;
	}
	
	/**
	 * Set Condition
	 * @param string $condition
	 */
	public function setCondition($condition)
	{
		if(strlen($condition) > 40)
			throw new QualityCenterInputException("Input [Condition] value [$condition] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($condition), 40);
		
		return $this->fields['condition'] = $condition;
	}
	
	/**
	 * Get Data mapping
	 * @return string
	 */
	public function getDataMapping()
	{
		if(!isset($this->fields['data-mapping']))
			return null;
			
		$dataMapping = $this->fields['data-mapping'];
		return $dataMapping;
	}
	
	/**
	 * Set Data mapping
	 * @param string $dataMapping
	 */
	public function setDataMapping($dataMapping)
	{
		return $this->fields['data-mapping'] = $dataMapping;
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getOwnerDesc()
	{
		if(!isset($this->fields['owner-desc']))
			return null;
			
		$ownerDesc = $this->fields['owner-desc'];
		return $ownerDesc;
	}
	
	/**
	 * Set Description
	 * @param string $ownerDesc
	 */
	public function setOwnerDesc($ownerDesc)
	{
		return $this->fields['owner-desc'] = $ownerDesc;
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getRelatedDesc()
	{
		if(!isset($this->fields['related-desc']))
			return null;
			
		$relatedDesc = $this->fields['related-desc'];
		return $relatedDesc;
	}
	
	/**
	 * Set Description
	 * @param string $relatedDesc
	 */
	public function setRelatedDesc($relatedDesc)
	{
		return $this->fields['related-desc'] = $relatedDesc;
	}
	
	/**
	 * Get ID
	 * @return string
	 */
	public function getFromEndpointId()
	{
		if(!isset($this->fields['from-endpoint-id']))
			return null;
			
		$fromEndpointId = $this->fields['from-endpoint-id'];
		return $fromEndpointId;
	}
	
	/**
	 * Set ID
	 * @param string $fromEndpointId
	 */
	public function setFromEndpointId($fromEndpointId)
	{
		return $this->fields['from-endpoint-id'] = $fromEndpointId;
	}
	
	/**
	 * Get ID
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
	 * Set ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get ID
	 * @return string
	 */
	public function getToEndpointId()
	{
		if(!isset($this->fields['to-endpoint-id']))
			return null;
			
		$toEndpointId = $this->fields['to-endpoint-id'];
		return $toEndpointId;
	}
	
	/**
	 * Set ID
	 * @param string $toEndpointId
	 */
	public function setToEndpointId($toEndpointId)
	{
		return $this->fields['to-endpoint-id'] = $toEndpointId;
	}
	
	/**
	 * Get Is broken relation
	 * @return string
	 */
	public function getIsBroken()
	{
		if(!isset($this->fields['is-broken']))
			return null;
			
		$isBroken = $this->fields['is-broken'];
		return $isBroken;
	}
	
	/**
	 * Set Is broken relation
	 * @param string $isBroken
	 */
	public function setIsBroken($isBroken)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($isBroken, $validValues))
			throw new QualityCenterInputException("Input [IsBroken] value [$isBroken] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $isBroken, $validValues);
		
		return $this->fields['is-broken'] = $isBroken;
	}
	
	/**
	 * Get Name
	 * @return string
	 */
	public function getOwnerName()
	{
		if(!isset($this->fields['owner-name']))
			return null;
			
		$ownerName = $this->fields['owner-name'];
		return $ownerName;
	}
	
	/**
	 * Set Name
	 * @param string $ownerName
	 */
	public function setOwnerName($ownerName)
	{
		if(strlen($ownerName) > 255)
			throw new QualityCenterInputException("Input [OwnerName] value [$ownerName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($ownerName), 255);
		
		return $this->fields['owner-name'] = $ownerName;
	}
	
	/**
	 * Get Name
	 * @return string
	 */
	public function getRelatedName()
	{
		if(!isset($this->fields['related-name']))
			return null;
			
		$relatedName = $this->fields['related-name'];
		return $relatedName;
	}
	
	/**
	 * Set Name
	 * @param string $relatedName
	 */
	public function setRelatedName($relatedName)
	{
		if(strlen($relatedName) > 255)
			throw new QualityCenterInputException("Input [RelatedName] value [$relatedName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($relatedName), 255);
		
		return $this->fields['related-name'] = $relatedName;
	}
	
	/**
	 * Get Order Id
	 * @return string
	 */
	public function getOrder()
	{
		if(!isset($this->fields['order']))
			return null;
			
		$order = $this->fields['order'];
		return $order;
	}
	
	/**
	 * Set Order Id
	 * @param string $order
	 */
	public function setOrder($order)
	{
		return $this->fields['order'] = $order;
	}
	
	/**
	 * Get Owner name
	 * @return string
	 */
	public function getOwnerOwnerName()
	{
		if(!isset($this->fields['owner-owner-name']))
			return null;
			
		$ownerOwnerName = $this->fields['owner-owner-name'];
		return $ownerOwnerName;
	}
	
	/**
	 * Set Owner name
	 * @param string $ownerOwnerName
	 */
	public function setOwnerOwnerName($ownerOwnerName)
	{
		if(strlen($ownerOwnerName) > 255)
			throw new QualityCenterInputException("Input [OwnerOwnerName] value [$ownerOwnerName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($ownerOwnerName), 255);
		
		return $this->fields['owner-owner-name'] = $ownerOwnerName;
	}
	
	/**
	 * Get Owner name
	 * @return string
	 */
	public function getRelatedOwnerName()
	{
		if(!isset($this->fields['related-owner-name']))
			return null;
			
		$relatedOwnerName = $this->fields['related-owner-name'];
		return $relatedOwnerName;
	}
	
	/**
	 * Set Owner name
	 * @param string $relatedOwnerName
	 */
	public function setRelatedOwnerName($relatedOwnerName)
	{
		if(strlen($relatedOwnerName) > 255)
			throw new QualityCenterInputException("Input [RelatedOwnerName] value [$relatedOwnerName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($relatedOwnerName), 255);
		
		return $this->fields['related-owner-name'] = $relatedOwnerName;
	}
	
	/**
	 * Get Owner type
	 * @return string
	 */
	public function getOwnerOwnerDisplayType()
	{
		if(!isset($this->fields['owner-owner-display-type']))
			return null;
			
		$ownerOwnerDisplayType = $this->fields['owner-owner-display-type'];
		return $ownerOwnerDisplayType;
	}
	
	/**
	 * Set Owner type
	 * @param string $ownerOwnerDisplayType
	 */
	public function setOwnerOwnerDisplayType($ownerOwnerDisplayType)
	{
		if(strlen($ownerOwnerDisplayType) > 255)
			throw new QualityCenterInputException("Input [OwnerOwnerDisplayType] value [$ownerOwnerDisplayType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($ownerOwnerDisplayType), 255);
		
		return $this->fields['owner-owner-display-type'] = $ownerOwnerDisplayType;
	}
	
	/**
	 * Get Owner type
	 * @return string
	 */
	public function getRelatedOwnerDisplayType()
	{
		if(!isset($this->fields['related-owner-display-type']))
			return null;
			
		$relatedOwnerDisplayType = $this->fields['related-owner-display-type'];
		return $relatedOwnerDisplayType;
	}
	
	/**
	 * Set Owner type
	 * @param string $relatedOwnerDisplayType
	 */
	public function setRelatedOwnerDisplayType($relatedOwnerDisplayType)
	{
		if(strlen($relatedOwnerDisplayType) > 255)
			throw new QualityCenterInputException("Input [RelatedOwnerDisplayType] value [$relatedOwnerDisplayType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($relatedOwnerDisplayType), 255);
		
		return $this->fields['related-owner-display-type'] = $relatedOwnerDisplayType;
	}
	
	/**
	 * Get The data relation
	 * @return string
	 */
	public function getTheData()
	{
		if(!isset($this->fields['the-data']))
			return null;
			
		$theData = $this->fields['the-data'];
		return $theData;
	}
	
	/**
	 * Set The data relation
	 * @param string $theData
	 */
	public function setTheData($theData)
	{
		if(strlen($theData) > 10)
			throw new QualityCenterInputException("Input [TheData] value [$theData] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($theData), 10);
		
		return $this->fields['the-data'] = $theData;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getFromEndpointType()
	{
		if(!isset($this->fields['from-endpoint-type']))
			return null;
			
		$fromEndpointType = $this->fields['from-endpoint-type'];
		return $fromEndpointType;
	}
	
	/**
	 * Set Type
	 * @param string $fromEndpointType
	 */
	public function setFromEndpointType($fromEndpointType)
	{
		if(strlen($fromEndpointType) > 40)
			throw new QualityCenterInputException("Input [FromEndpointType] value [$fromEndpointType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($fromEndpointType), 40);
		
		return $this->fields['from-endpoint-type'] = $fromEndpointType;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getOwnerDisplayType()
	{
		if(!isset($this->fields['owner-display-type']))
			return null;
			
		$ownerDisplayType = $this->fields['owner-display-type'];
		return $ownerDisplayType;
	}
	
	/**
	 * Set Type
	 * @param string $ownerDisplayType
	 */
	public function setOwnerDisplayType($ownerDisplayType)
	{
		if(strlen($ownerDisplayType) > 255)
			throw new QualityCenterInputException("Input [OwnerDisplayType] value [$ownerDisplayType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($ownerDisplayType), 255);
		
		return $this->fields['owner-display-type'] = $ownerDisplayType;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getRelatedDisplayType()
	{
		if(!isset($this->fields['related-display-type']))
			return null;
			
		$relatedDisplayType = $this->fields['related-display-type'];
		return $relatedDisplayType;
	}
	
	/**
	 * Set Type
	 * @param string $relatedDisplayType
	 */
	public function setRelatedDisplayType($relatedDisplayType)
	{
		if(strlen($relatedDisplayType) > 255)
			throw new QualityCenterInputException("Input [RelatedDisplayType] value [$relatedDisplayType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($relatedDisplayType), 255);
		
		return $this->fields['related-display-type'] = $relatedDisplayType;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getToEndpointType()
	{
		if(!isset($this->fields['to-endpoint-type']))
			return null;
			
		$toEndpointType = $this->fields['to-endpoint-type'];
		return $toEndpointType;
	}
	
	/**
	 * Set Type
	 * @param string $toEndpointType
	 */
	public function setToEndpointType($toEndpointType)
	{
		if(strlen($toEndpointType) > 40)
			throw new QualityCenterInputException("Input [ToEndpointType] value [$toEndpointType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($toEndpointType), 40);
		
		return $this->fields['to-endpoint-type'] = $toEndpointType;
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
	
}
