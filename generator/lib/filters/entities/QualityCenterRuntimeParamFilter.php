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
class QualityCenterRuntimeParamFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'default-value',
			'desc',
			'id',
			'name',
			'order',
			'value-type',
			'parent-id',
			'vc-checkout-user-name',
			'bpta-long-value',
		);
	}
	
	/**
	 * Get Runtime Param Default Value
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
	 * Set Runtime Param Default Value
	 * @param string $defaultValue
	 */
	public function setDefaultValue($defaultValue)
	{
		if(strlen($defaultValue) > 70)
			throw new QualityCenterInputException("Input [DefaultValue] value [$defaultValue] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($defaultValue), 70);
		
		return $this->fields['default-value'] = $defaultValue;
	}
	
	/**
	 * Get Runtime Param Description
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
	 * Set Runtime Param Description
	 * @param string $desc
	 */
	public function setDesc($desc)
	{
		return $this->fields['desc'] = $desc;
	}
	
	/**
	 * Get Runtime Param ID
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
	 * Set Runtime Param ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Runtime Param Name
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
	 * Set Runtime Param Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Runtime Param Order
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
	 * Set Runtime Param Order
	 * @param string $order
	 */
	public function setOrder($order)
	{
		return $this->fields['order'] = $order;
	}
	
	/**
	 * Get Runtime Param Value Type
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
	 * Set Runtime Param Value Type
	 * @param string $valueType
	 */
	public function setValueType($valueType)
	{
		if(strlen($valueType) > 40)
			throw new QualityCenterInputException("Input [ValueType] value [$valueType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($valueType), 40);
		
		return $this->fields['value-type'] = $valueType;
	}
	
	/**
	 * Get Runtime Test Id
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
	 * Set Runtime Test Id
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
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
	 * Get long parameter value
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
	 * Set long parameter value
	 * @param string $bptaLongValue
	 */
	public function setBptaLongValue($bptaLongValue)
	{
		return $this->fields['bpta-long-value'] = $bptaLongValue;
	}
	
}
