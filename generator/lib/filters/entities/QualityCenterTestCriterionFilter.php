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
class QualityCenterTestCriterionFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'owner',
			'creation-time',
			'description',
			'execution-status',
			'id',
			'is-main-criterion',
			'name',
			'parent-id',
			'vc-checkout-user-name',
		);
	}
	
	/**
	 * Get Created by
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
	 * Set Created by
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Creation date as linux timestamp
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
	 * Set Creation date as linux timestamp
	 * @param mixed $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		if(is_int($creationTime))
			$creationTime = date('Y-m-d', $creationTime);
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
	 * Get Execution Status
	 * @return string
	 */
	public function getExecutionStatus()
	{
		if(!isset($this->fields['execution-status']))
			return null;
			
		$executionStatus = $this->fields['execution-status'];
		return $executionStatus;
	}
	
	/**
	 * Set Execution Status
	 * @param string $executionStatus
	 */
	public function setExecutionStatus($executionStatus)
	{
		$validValues = array(
			'Blocked',
			'Failed',
			'N/A',
			'No Run',
			'Not Completed',
			'Passed',
		);
					
		if($executionStatus instanceof QualityCenterExpression)
		{
			$executionStatus->validateEnum('ExecutionStatus', $validValues);
		}			
		elseif(!in_array($executionStatus, $validValues))
		{
			throw new QualityCenterInputException("Input [ExecutionStatus] value [$executionStatus] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $executionStatus, $validValues);
		}
		
		return $this->fields['execution-status'] = $executionStatus;
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
	 * Get Is Complete Test
	 * @return string
	 */
	public function getIsMainCriterion()
	{
		if(!isset($this->fields['is-main-criterion']))
			return null;
			
		$isMainCriterion = $this->fields['is-main-criterion'];
		return $isMainCriterion;
	}
	
	/**
	 * Set Is Complete Test
	 * @param string $isMainCriterion
	 */
	public function setIsMainCriterion($isMainCriterion)
	{
		return $this->fields['is-main-criterion'] = $isMainCriterion;
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
	 * Get Test ID
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
	 * Set Test ID
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
	
}
