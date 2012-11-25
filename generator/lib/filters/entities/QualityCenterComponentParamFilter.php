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
class QualityCenterComponentParamFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'order',
			'bpta-long-value',
			'value',
			'description',
			'id',
			'datacenter-list-id',
			'is-out',
			'name',
			'metadata',
			'ref-count',
			'scope',
			'parent-id',
			'source-param-id',
			'value-type',
			'vc-checkout-user-name',
			'ver-stamp',
		);
	}
	
	/**
	 * Get Component Param Order
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
	 * Set Component Param Order
	 * @param string $order
	 */
	public function setOrder($order)
	{
		return $this->fields['order'] = $order;
	}
	
	/**
	 * Get Default Value
	 * @return string
	 */
	public function getBptaLongValue()
	{
		if(!isset($this->fields['bpta-long-value']))
			return null;
			
		$bptaLongValue = $this->fields['bpta-long-value'];
		return $bptaLongValue;
	}
	
	/**
	 * Set Default Value
	 * @param string $bptaLongValue
	 */
	public function setBptaLongValue($bptaLongValue)
	{
		return $this->fields['bpta-long-value'] = $bptaLongValue;
	}
	
	/**
	 * Get Default Value (Obsolete)
	 * @return string
	 */
	public function getValue()
	{
		if(!isset($this->fields['value']))
			return null;
			
		$value = $this->fields['value'];
		return $value;
	}
	
	/**
	 * Set Default Value (Obsolete)
	 * @param string $value
	 */
	public function setValue($value)
	{
		if(strlen($value) > 255)
			throw new QualityCenterInputException("Input [Value] value [$value] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($value), 255);
		
		return $this->fields['value'] = $value;
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
	 * Get Id of the optional values list
	 * @return string
	 */
	public function getDatacenterListId()
	{
		if(!isset($this->fields['datacenter-list-id']))
			return null;
			
		$datacenterListId = $this->fields['datacenter-list-id'];
		return $datacenterListId;
	}
	
	/**
	 * Set Id of the optional values list
	 * @param string $datacenterListId
	 */
	public function setDatacenterListId($datacenterListId)
	{
		return $this->fields['datacenter-list-id'] = $datacenterListId;
	}
	
	/**
	 * Get Is output parameter?
	 * @return string
	 */
	public function getIsOut()
	{
		if(!isset($this->fields['is-out']))
			return null;
			
		$isOut = $this->fields['is-out'];
		return $isOut;
	}
	
	/**
	 * Set Is output parameter?
	 * @param string $isOut
	 */
	public function setIsOut($isOut)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($isOut, $validValues))
			throw new QualityCenterInputException("Input [IsOut] value [$isOut] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $isOut, $validValues);
		
		return $this->fields['is-out'] = $isOut;
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
	 * Get Parameter Metadata
	 * @return string
	 */
	public function getMetadata()
	{
		if(!isset($this->fields['metadata']))
			return null;
			
		$metadata = $this->fields['metadata'];
		return $metadata;
	}
	
	/**
	 * Set Parameter Metadata
	 * @param string $metadata
	 */
	public function setMetadata($metadata)
	{
		return $this->fields['metadata'] = $metadata;
	}
	
	/**
	 * Get Reference Count
	 * @return string
	 */
	public function getRefCount()
	{
		if(!isset($this->fields['ref-count']))
			return null;
			
		$refCount = $this->fields['ref-count'];
		return $refCount;
	}
	
	/**
	 * Set Reference Count
	 * @param string $refCount
	 */
	public function setRefCount($refCount)
	{
		return $this->fields['ref-count'] = $refCount;
	}
	
	/**
	 * Get Scope - Env \ Component
	 * @return string
	 */
	public function getScope()
	{
		if(!isset($this->fields['scope']))
			return null;
			
		$scope = $this->fields['scope'];
		return $scope;
	}
	
	/**
	 * Set Scope - Env \ Component
	 * @param string $scope
	 */
	public function setScope($scope)
	{
		return $this->fields['scope'] = $scope;
	}
	
	/**
	 * Get Scope Param Component ID
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
	 * Set Scope Param Component ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Source Parameter ID
	 * @return string
	 */
	public function getSourceParamId()
	{
		if(!isset($this->fields['source-param-id']))
			return null;
			
		$sourceParamId = $this->fields['source-param-id'];
		return $sourceParamId;
	}
	
	/**
	 * Set Source Parameter ID
	 * @param string $sourceParamId
	 */
	public function setSourceParamId($sourceParamId)
	{
		return $this->fields['source-param-id'] = $sourceParamId;
	}
	
	/**
	 * Get Value Type
	 * @return string
	 */
	public function getValueType()
	{
		if(!isset($this->fields['value-type']))
			return null;
			
		$valueType = $this->fields['value-type'];
		return $valueType;
	}
	
	/**
	 * Set Value Type
	 * @param string $valueType
	 */
	public function setValueType($valueType)
	{
		$validValues = array(
			'Boolean',
			'Date',
			'Number',
			'Password',
			'String',
			'Table',
		);
		if(!in_array($valueType, $validValues))
			throw new QualityCenterInputException("Input [ValueType] value [$valueType] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $valueType, $validValues);
		
		return $this->fields['value-type'] = $valueType;
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
	
}
