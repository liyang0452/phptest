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
class QualityCenterBpParamFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'parent-id',
			'order',
			'default-value',
			'desc',
			'id',
			'is-out',
			'name',
			'param-id',
			'type',
			'ref-id',
			'ref-out-comp-name',
			'ref-out-iter-from-to',
			'ref-out-name',
			'value-type',
			'vc-checkout-user-name',
		);
	}
	
	/**
	 * Get Component ID
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
	 * Set Component ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
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
	public function getDefaultValue()
	{
		if(!isset($this->fields['default-value']))
			return null;
			
		$defaultValue = $this->fields['default-value'];
		return $defaultValue;
	}
	
	/**
	 * Set Default Value
	 * @param string $defaultValue
	 */
	public function setDefaultValue($defaultValue)
	{
		return $this->fields['default-value'] = $defaultValue;
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getDesc()
	{
		if(!isset($this->fields['desc']))
			return null;
			
		$desc = $this->fields['desc'];
		return $desc;
	}
	
	/**
	 * Set Description
	 * @param string $desc
	 */
	public function setDesc($desc)
	{
		return $this->fields['desc'] = $desc;
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
		if(strlen($isOut) > 1)
			throw new QualityCenterInputException("Input [IsOut] value [$isOut] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isOut), 1);
		
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
	 * Get Param ID
	 * @return string
	 */
	public function getParamId()
	{
		if(!isset($this->fields['param-id']))
			return null;
			
		$paramId = $this->fields['param-id'];
		return $paramId;
	}
	
	/**
	 * Set Param ID
	 * @param string $paramId
	 */
	public function setParamId($paramId)
	{
		return $this->fields['param-id'] = $paramId;
	}
	
	/**
	 * Get Param input type
	 * @return string
	 */
	public function getType()
	{
		if(!isset($this->fields['type']))
			return null;
			
		$type = $this->fields['type'];
		return $type;
	}
	
	/**
	 * Set Param input type
	 * @param string $type
	 */
	public function setType($type)
	{
		if(strlen($type) > 70)
			throw new QualityCenterInputException("Input [Type] value [$type] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($type), 70);
		
		return $this->fields['type'] = $type;
	}
	
	/**
	 * Get Ref ID
	 * @return string
	 */
	public function getRefId()
	{
		if(!isset($this->fields['ref-id']))
			return null;
			
		$refId = $this->fields['ref-id'];
		return $refId;
	}
	
	/**
	 * Set Ref ID
	 * @param string $refId
	 */
	public function setRefId($refId)
	{
		return $this->fields['ref-id'] = $refId;
	}
	
	/**
	 * Get Ref Out Comp Name
	 * @return string
	 */
	public function getRefOutCompName()
	{
		if(!isset($this->fields['ref-out-comp-name']))
			return null;
			
		$refOutCompName = $this->fields['ref-out-comp-name'];
		return $refOutCompName;
	}
	
	/**
	 * Set Ref Out Comp Name
	 * @param string $refOutCompName
	 */
	public function setRefOutCompName($refOutCompName)
	{
		if(strlen($refOutCompName) > 255)
			throw new QualityCenterInputException("Input [RefOutCompName] value [$refOutCompName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($refOutCompName), 255);
		
		return $this->fields['ref-out-comp-name'] = $refOutCompName;
	}
	
	/**
	 * Get Ref Out Comp Run From To Iterations
	 * @return string
	 */
	public function getRefOutIterFromTo()
	{
		if(!isset($this->fields['ref-out-iter-from-to']))
			return null;
			
		$refOutIterFromTo = $this->fields['ref-out-iter-from-to'];
		return $refOutIterFromTo;
	}
	
	/**
	 * Set Ref Out Comp Run From To Iterations
	 * @param string $refOutIterFromTo
	 */
	public function setRefOutIterFromTo($refOutIterFromTo)
	{
		if(strlen($refOutIterFromTo) > 255)
			throw new QualityCenterInputException("Input [RefOutIterFromTo] value [$refOutIterFromTo] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($refOutIterFromTo), 255);
		
		return $this->fields['ref-out-iter-from-to'] = $refOutIterFromTo;
	}
	
	/**
	 * Get Ref Out Name
	 * @return string
	 */
	public function getRefOutName()
	{
		if(!isset($this->fields['ref-out-name']))
			return null;
			
		$refOutName = $this->fields['ref-out-name'];
		return $refOutName;
	}
	
	/**
	 * Set Ref Out Name
	 * @param string $refOutName
	 */
	public function setRefOutName($refOutName)
	{
		if(strlen($refOutName) > 255)
			throw new QualityCenterInputException("Input [RefOutName] value [$refOutName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($refOutName), 255);
		
		return $this->fields['ref-out-name'] = $refOutName;
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
		if(strlen($valueType) > 255)
			throw new QualityCenterInputException("Input [ValueType] value [$valueType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($valueType), 255);
		
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
	
}
