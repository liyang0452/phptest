<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class QualityCenterStepParameter extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'step-parameter';
	}
	
	/**
	 * Get Actual Value
	 * @return string
	 */
	public function getParamActualValue()
	{
		if(!isset($this->fields['param-actual-value']))
			return null;
			
		$paramActualValue = $this->fields['param-actual-value'];
		return $paramActualValue;
	}
	
	/**
	 * Set Actual Value
	 * @param string $paramActualValue
	 */
	public function setParamActualValue($paramActualValue)
	{
		return $this->fields['param-actual-value'] = $paramActualValue;
	}
	
	/**
	 * Get Ignore Test Instance Parameters
	 * @return string
	 */
	public function getIgnoreTestInstanceParameters()
	{
		if(!isset($this->fields['ignore-test-instance-parameters']))
			return null;
			
		$ignoreTestInstanceParameters = $this->fields['ignore-test-instance-parameters'];
		return $ignoreTestInstanceParameters;
	}
	
	/**
	 * Set Ignore Test Instance Parameters
	 * @param string $ignoreTestInstanceParameters
	 */
	public function setIgnoreTestInstanceParameters($ignoreTestInstanceParameters)
	{
		if(strlen($ignoreTestInstanceParameters) > 255)
			throw new QualityCenterInputException("Input [IgnoreTestInstanceParameters] value [$ignoreTestInstanceParameters] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($ignoreTestInstanceParameters), 255);
		
		return $this->fields['ignore-test-instance-parameters'] = $ignoreTestInstanceParameters;
	}
	
	/**
	 * Get Parameter ID
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
	 * Set Parameter ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Parameter Owner ID
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
	 * Set Parameter Owner ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Test Parameter ID
	 * @return string
	 */
	public function getTestParamId()
	{
		if(!isset($this->fields['test-param-id']))
			return null;
			
		$testParamId = $this->fields['test-param-id'];
		return $testParamId;
	}
	
	/**
	 * Set Test Parameter ID
	 * @param string $testParamId
	 */
	public function setTestParamId($testParamId)
	{
		return $this->fields['test-param-id'] = $testParamId;
	}
	
	/**
	 * Get Version Checked Out By
	 * @return string
	 */
	public function getVcUserName()
	{
		if(!isset($this->fields['vc-user-name']))
			return null;
			
		$vcUserName = $this->fields['vc-user-name'];
		return $vcUserName;
	}
	
	/**
	 * Set Version Checked Out By
	 * @param string $vcUserName
	 */
	public function setVcUserName($vcUserName)
	{
		return $this->fields['vc-user-name'] = $vcUserName;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getOriginTest()
	{
		if(!isset($this->fields['origin-test']))
			return null;
			
		$originTest = $this->fields['origin-test'];
		return $originTest;
	}
	
	/**
	 * Set 
	 * @param string $originTest
	 */
	public function setOriginTest($originTest)
	{
		return $this->fields['origin-test'] = $originTest;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getKey()
	{
		if(!isset($this->fields['key']))
			return null;
			
		$key = $this->fields['key'];
		return $key;
	}
	
	/**
	 * Set 
	 * @param string $key
	 */
	public function setKey($key)
	{
		if(strlen($key) > 40)
			throw new QualityCenterInputException("Input [Key] value [$key] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($key), 40);
		
		return $this->fields['key'] = $key;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getParentType()
	{
		if(!isset($this->fields['parent-type']))
			return null;
			
		$parentType = $this->fields['parent-type'];
		return $parentType;
	}
	
	/**
	 * Set 
	 * @param string $parentType
	 */
	public function setParentType($parentType)
	{
		if(strlen($parentType) > 40)
			throw new QualityCenterInputException("Input [ParentType] value [$parentType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($parentType), 40);
		
		return $this->fields['parent-type'] = $parentType;
	}
	
}
