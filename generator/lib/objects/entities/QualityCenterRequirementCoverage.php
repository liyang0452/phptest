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
class QualityCenterRequirementCoverage extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'requirement-coverage';
	}
	
	/**
	 * Get Coverage Mode
	 * @return string
	 */
	public function getCoverageMode()
	{
		if(!isset($this->fields['coverage-mode']))
			return null;
			
		$coverageMode = $this->fields['coverage-mode'];
		return $coverageMode;
	}
	
	/**
	 * Set Coverage Mode
	 * @param string $coverageMode
	 */
	public function setCoverageMode($coverageMode)
	{
		$validValues = array(
			'All Configurations',
			'Selected Configurations',
		);
					
		if($coverageMode instanceof QualityCenterExpression)
		{
			$coverageMode->validateEnum('CoverageMode', $validValues);
		}			
		elseif(!in_array($coverageMode, $validValues))
		{
			throw new QualityCenterInputException("Input [CoverageMode] value [$coverageMode] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $coverageMode, $validValues);
		}
		
		return $this->fields['coverage-mode'] = $coverageMode;
	}
	
	/**
	 * Get Coverage Status
	 * @return string
	 */
	public function getEntityStatus()
	{
		if(!isset($this->fields['entity-status']))
			return null;
			
		$entityStatus = $this->fields['entity-status'];
		return $entityStatus;
	}
	
	/**
	 * Set Coverage Status
	 * @param string $entityStatus
	 */
	public function setEntityStatus($entityStatus)
	{
		if(strlen($entityStatus) > 70)
			throw new QualityCenterInputException("Input [EntityStatus] value [$entityStatus] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($entityStatus), 70);
		
		return $this->fields['entity-status'] = $entityStatus;
	}
	
	/**
	 * Get Coverage Type
	 * @return string
	 */
	public function getEntityType()
	{
		if(!isset($this->fields['entity-type']))
			return null;
			
		$entityType = $this->fields['entity-type'];
		return $entityType;
	}
	
	/**
	 * Set Coverage Type
	 * @param string $entityType
	 */
	public function setEntityType($entityType)
	{
		if(strlen($entityType) > 40)
			throw new QualityCenterInputException("Input [EntityType] value [$entityType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($entityType), 40);
		
		return $this->fields['entity-type'] = $entityType;
	}
	
	/**
	 * Get Covering Entity ID
	 * @return string
	 */
	public function getEntityId()
	{
		if(!isset($this->fields['entity-id']))
			return null;
			
		$entityId = $this->fields['entity-id'];
		return $entityId;
	}
	
	/**
	 * Set Covering Entity ID
	 * @param string $entityId
	 */
	public function setEntityId($entityId)
	{
		return $this->fields['entity-id'] = $entityId;
	}
	
	/**
	 * Get Entity Name
	 * @return string
	 */
	public function getEntityName()
	{
		if(!isset($this->fields['entity-name']))
			return null;
			
		$entityName = $this->fields['entity-name'];
		return $entityName;
	}
	
	/**
	 * Set Entity Name
	 * @param string $entityName
	 */
	public function setEntityName($entityName)
	{
		if(strlen($entityName) > 255)
			throw new QualityCenterInputException("Input [EntityName] value [$entityName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($entityName), 255);
		
		return $this->fields['entity-name'] = $entityName;
	}
	
	/**
	 * Get Requirement
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
	 * Set Requirement
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Unique Coverage Item ID
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
	 * Set Unique Coverage Item ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
}
