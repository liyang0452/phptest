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
class QualityCenterTaskLog extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'task-log';
	}
	
	/**
	 * Get Description
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
	 * Set Description
	 * @param string $name
	 */
	public function setName($name)
	{
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Task Id
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
	 * Set Task Id
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get TaskLog Id
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
	 * Set TaskLog Id
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Time
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
	 * Set Time
	 * @param string $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Type
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
	 * Set Type
	 * @param string $type
	 */
	public function setType($type)
	{
		return $this->fields['type'] = $type;
	}
	
}
