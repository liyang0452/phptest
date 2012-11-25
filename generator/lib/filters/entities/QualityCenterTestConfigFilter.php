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
class QualityCenterTestConfigFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'has-dependencies',
			'attachment',
			'owner',
			'creation-time',
			'data-filtering',
			'data-state',
			'data-obj',
			'description',
			'exec-status',
			'id',
			'vts',
			'name',
			'parent-id',
			'test-name',
			'vc-checkout-user-name',
		);
	}
	
	/**
	 * Get Asset relation dependencies status
	 * @return string
	 */
	public function getHasDependencies()
	{
		if(!isset($this->fields['has-dependencies']))
			return null;
			
		$hasDependencies = $this->fields['has-dependencies'];
		return $hasDependencies;
	}
	
	/**
	 * Set Asset relation dependencies status
	 * @param string $hasDependencies
	 */
	public function setHasDependencies($hasDependencies)
	{
		if(strlen($hasDependencies) > 1)
			throw new QualityCenterInputException("Input [HasDependencies] value [$hasDependencies] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasDependencies), 1);
		
		return $this->fields['has-dependencies'] = $hasDependencies;
	}
	
	/**
	 * Get Attachment
	 * @return string
	 */
	public function getAttachment()
	{
		if(!isset($this->fields['attachment']))
			return null;
			
		$attachment = $this->fields['attachment'];
		return $attachment;
	}
	
	/**
	 * Set Attachment
	 * @param string $attachment
	 */
	public function setAttachment($attachment)
	{
		if(strlen($attachment) > 1)
			throw new QualityCenterInputException("Input [Attachment] value [$attachment] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($attachment), 1);
		
		return $this->fields['attachment'] = $attachment;
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
	 * @return int
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
	 * @param int $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		$creationTime = date('Y-m-d', $creationTime);
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Data Filtering
	 * @return string
	 */
	public function getDataFiltering()
	{
		if(!isset($this->fields['data-filtering']))
			return null;
			
		$dataFiltering = $this->fields['data-filtering'];
		return $dataFiltering;
	}
	
	/**
	 * Set Data Filtering
	 * @param string $dataFiltering
	 */
	public function setDataFiltering($dataFiltering)
	{
		return $this->fields['data-filtering'] = $dataFiltering;
	}
	
	/**
	 * Get Data State
	 * @return string
	 */
	public function getDataState()
	{
		if(!isset($this->fields['data-state']))
			return null;
			
		$dataState = $this->fields['data-state'];
		return $dataState;
	}
	
	/**
	 * Set Data State
	 * @param string $dataState
	 */
	public function setDataState($dataState)
	{
		if(strlen($dataState) > 10)
			throw new QualityCenterInputException("Input [DataState] value [$dataState] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($dataState), 10);
		
		return $this->fields['data-state'] = $dataState;
	}
	
	/**
	 * Get Data obj
	 * @return string
	 */
	public function getDataObj()
	{
		if(!isset($this->fields['data-obj']))
			return null;
			
		$dataObj = $this->fields['data-obj'];
		return $dataObj;
	}
	
	/**
	 * Set Data obj
	 * @param string $dataObj
	 */
	public function setDataObj($dataObj)
	{
		return $this->fields['data-obj'] = $dataObj;
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
	public function getExecStatus()
	{
		if(!isset($this->fields['exec-status']))
			return null;
			
		$execStatus = $this->fields['exec-status'];
		return $execStatus;
	}
	
	/**
	 * Set Execution Status
	 * @param string $execStatus
	 */
	public function setExecStatus($execStatus)
	{
		$validValues = array(
			'Blocked',
			'Failed',
			'N/A',
			'No Run',
			'Not Completed',
			'Passed',
		);
		if(!in_array($execStatus, $validValues))
			throw new QualityCenterInputException("Input [ExecStatus] value [$execStatus] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $execStatus, $validValues);
		
		return $this->fields['exec-status'] = $execStatus;
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
	 * Get Modified
	 * @return string
	 */
	public function getVts()
	{
		if(!isset($this->fields['vts']))
			return null;
			
		$vts = $this->fields['vts'];
		return $vts;
	}
	
	/**
	 * Set Modified
	 * @param string $vts
	 */
	public function setVts($vts)
	{
		return $this->fields['vts'] = $vts;
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
	 * Get Test Name
	 * @return string
	 */
	public function getTestName()
	{
		if(!isset($this->fields['test-name']))
			return null;
			
		$testName = $this->fields['test-name'];
		return $testName;
	}
	
	/**
	 * Set Test Name
	 * @param string $testName
	 */
	public function setTestName($testName)
	{
		if(strlen($testName) > 255)
			throw new QualityCenterInputException("Input [TestName] value [$testName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($testName), 255);
		
		return $this->fields['test-name'] = $testName;
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
