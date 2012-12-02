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
class QualityCenterAuditProperty extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'audit-property';
	}
	
	/**
	 * Get Field
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
	 * Set Field
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 40)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($name), 40);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Log Record ID
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
	 * Set Log Record ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get New Value as linux timestamp
	 * @return int
	 */
	public function getNewDateValue()
	{
		if(!isset($this->fields['new-date-value']))
			return null;
			
		$newDateValue = $this->fields['new-date-value'];
		$newDateValueDate = date_parse_from_format('Y-m-d', $newDateValue);
		$newDateValue = mktime(0, 0, 0, $newDateValueDate['month'], $newDateValueDate['day'], $newDateValueDate['year']);
		
		return $newDateValue;
	}
	
	/**
	 * Set New Value as linux timestamp
	 * @param int $newDateValue
	 */
	public function setNewDateValue($newDateValue)
	{
		$newDateValue = date('Y-m-d', $newDateValue);
		return $this->fields['new-date-value'] = $newDateValue;
	}
	
	/**
	 * Get New Value
	 * @return string
	 */
	public function getNewLongValue()
	{
		if(!isset($this->fields['new-long-value']))
			return null;
			
		$newLongValue = $this->fields['new-long-value'];
		return $newLongValue;
	}
	
	/**
	 * Set New Value
	 * @param string $newLongValue
	 */
	public function setNewLongValue($newLongValue)
	{
		return $this->fields['new-long-value'] = $newLongValue;
	}
	
	/**
	 * Get New Value
	 * @return string
	 */
	public function getNewValue()
	{
		if(!isset($this->fields['new-value']))
			return null;
			
		$newValue = $this->fields['new-value'];
		return $newValue;
	}
	
	/**
	 * Set New Value
	 * @param string $newValue
	 */
	public function setNewValue($newValue)
	{
		if(strlen($newValue) > 2000)
			throw new QualityCenterInputException("Input [NewValue] value [$newValue] excceeded maximum length [2000]", QualityCenterInputException::SIZE, strlen($newValue), 2000);
		
		return $this->fields['new-value'] = $newValue;
	}
	
	/**
	 * Get Old Value as linux timestamp
	 * @return int
	 */
	public function getOldDateValue()
	{
		if(!isset($this->fields['old-date-value']))
			return null;
			
		$oldDateValue = $this->fields['old-date-value'];
		$oldDateValueDate = date_parse_from_format('Y-m-d', $oldDateValue);
		$oldDateValue = mktime(0, 0, 0, $oldDateValueDate['month'], $oldDateValueDate['day'], $oldDateValueDate['year']);
		
		return $oldDateValue;
	}
	
	/**
	 * Set Old Value as linux timestamp
	 * @param int $oldDateValue
	 */
	public function setOldDateValue($oldDateValue)
	{
		$oldDateValue = date('Y-m-d', $oldDateValue);
		return $this->fields['old-date-value'] = $oldDateValue;
	}
	
	/**
	 * Get Old Value
	 * @return string
	 */
	public function getOldLongValue()
	{
		if(!isset($this->fields['old-long-value']))
			return null;
			
		$oldLongValue = $this->fields['old-long-value'];
		return $oldLongValue;
	}
	
	/**
	 * Set Old Value
	 * @param string $oldLongValue
	 */
	public function setOldLongValue($oldLongValue)
	{
		return $this->fields['old-long-value'] = $oldLongValue;
	}
	
	/**
	 * Get Old Value
	 * @return string
	 */
	public function getOldValue()
	{
		if(!isset($this->fields['old-value']))
			return null;
			
		$oldValue = $this->fields['old-value'];
		return $oldValue;
	}
	
	/**
	 * Set Old Value
	 * @param string $oldValue
	 */
	public function setOldValue($oldValue)
	{
		if(strlen($oldValue) > 2000)
			throw new QualityCenterInputException("Input [OldValue] value [$oldValue] excceeded maximum length [2000]", QualityCenterInputException::SIZE, strlen($oldValue), 2000);
		
		return $this->fields['old-value'] = $oldValue;
	}
	
	/**
	 * Get Property
	 * @return string
	 */
	public function getPropertyName()
	{
		if(!isset($this->fields['property-name']))
			return null;
			
		$propertyName = $this->fields['property-name'];
		return $propertyName;
	}
	
	/**
	 * Set Property
	 * @param string $propertyName
	 */
	public function setPropertyName($propertyName)
	{
		if(strlen($propertyName) > 40)
			throw new QualityCenterInputException("Input [PropertyName] value [$propertyName] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($propertyName), 40);
		
		return $this->fields['property-name'] = $propertyName;
	}
	
	/**
	 * Get Property Record ID
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
	 * Set Property Record ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Table
	 * @return string
	 */
	public function getTableName()
	{
		if(!isset($this->fields['table-name']))
			return null;
			
		$tableName = $this->fields['table-name'];
		return $tableName;
	}
	
	/**
	 * Set Table
	 * @param string $tableName
	 */
	public function setTableName($tableName)
	{
		if(strlen($tableName) > 40)
			throw new QualityCenterInputException("Input [TableName] value [$tableName] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($tableName), 40);
		
		return $this->fields['table-name'] = $tableName;
	}
	
}
