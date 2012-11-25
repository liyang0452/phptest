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
class QualityCenterTestFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'has-dependencies',
			'attachment',
			'vc-start-audit-action-id',
			'vc-end-audit-action-id',
			'base-test-id',
			'user-02',
			'bpta-change-detected',
			'dev-comments',
			'configurations-count',
			'creation-time',
			'user-06',
			'description',
			'owner',
			'estimate-devtime',
			'exec-status',
			'user-01',
			'has-criteria',
			'is-change-detectable',
			'last-modified',
			'storage-path',
			'user-03',
			'protocol-type',
			'status',
			'step-param',
			'steps',
			'parent-id',
			'user-05',
			'template',
			'id',
			'name',
			'runtime-data',
			'user-07',
			'service-test-mode',
			'subtype-id',
			'vc-checkin-comments',
			'vc-checkin-date',
			'vc-checkin-time',
			'vc-checkin-user-name',
			'vc-comments',
			'vc-date',
			'vc-version-number',
			'check-out-user-name',
			'vc-status',
			'vc-time',
			'working-mode',
			'timeout',
			'text-sync',
			'test-ver-stamp',
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
	 * Get Audit ID for start point for this version
	 * @return string
	 */
	public function getVcStartAuditActionId()
	{
		if(!isset($this->fields['vc-start-audit-action-id']))
			return null;
			
		$vcStartAuditActionId = $this->fields['vc-start-audit-action-id'];
		return $vcStartAuditActionId;
	}
	
	/**
	 * Set Audit ID for start point for this version
	 * @param string $vcStartAuditActionId
	 */
	public function setVcStartAuditActionId($vcStartAuditActionId)
	{
		return $this->fields['vc-start-audit-action-id'] = $vcStartAuditActionId;
	}
	
	/**
	 * Get Audit ID that is a end point for this version of the test
	 * @return string
	 */
	public function getVcEndAuditActionId()
	{
		if(!isset($this->fields['vc-end-audit-action-id']))
			return null;
			
		$vcEndAuditActionId = $this->fields['vc-end-audit-action-id'];
		return $vcEndAuditActionId;
	}
	
	/**
	 * Set Audit ID that is a end point for this version of the test
	 * @param string $vcEndAuditActionId
	 */
	public function setVcEndAuditActionId($vcEndAuditActionId)
	{
		return $this->fields['vc-end-audit-action-id'] = $vcEndAuditActionId;
	}
	
	/**
	 * Get Base Test ID
	 * @return string
	 */
	public function getBaseTestId()
	{
		if(!isset($this->fields['base-test-id']))
			return null;
			
		$baseTestId = $this->fields['base-test-id'];
		return $baseTestId;
	}
	
	/**
	 * Set Base Test ID
	 * @param string $baseTestId
	 */
	public function setBaseTestId($baseTestId)
	{
		return $this->fields['base-test-id'] = $baseTestId;
	}
	
	/**
	 * Get Browser
	 * @return string
	 */
	public function getUser02()
	{
		if(!isset($this->fields['user-02']))
			return null;
			
		$user02 = $this->fields['user-02'];
		return $user02;
	}
	
	/**
	 * Set Browser
	 * @param string $user02
	 */
	public function setUser02($user02)
	{
		$validValues = array(
			'Chrome (Latest)',
			'FF 10.0',
			'FF 11',
			'FF 12',
			'FF 13',
			'FF 3.6',
			'FF 4.0',
			'FF 8.0',
			'FF 9.0',
			'FF Latest',
			'IE 10',
			'IE 7',
			'IE 8 (Comp. mode)',
			'IE 9 (Comp. mode)',
			'Safari 3.2',
			'Safari 5.1',
			'Safari 5.5',
			'Safari 6.0',
			'_N/A_',
		);
		if(!in_array($user02, $validValues))
			throw new QualityCenterInputException("Input [User02] value [$user02] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user02, $validValues);
		
		return $this->fields['user-02'] = $user02;
	}
	
	/**
	 * Get Change Status
	 * @return string
	 */
	public function getBptaChangeDetected()
	{
		if(!isset($this->fields['bpta-change-detected']))
			return null;
			
		$bptaChangeDetected = $this->fields['bpta-change-detected'];
		return $bptaChangeDetected;
	}
	
	/**
	 * Set Change Status
	 * @param string $bptaChangeDetected
	 */
	public function setBptaChangeDetected($bptaChangeDetected)
	{
		return $this->fields['bpta-change-detected'] = $bptaChangeDetected;
	}
	
	/**
	 * Get Comments
	 * @return string
	 */
	public function getDevComments()
	{
		if(!isset($this->fields['dev-comments']))
			return null;
			
		$devComments = $this->fields['dev-comments'];
		return $devComments;
	}
	
	/**
	 * Set Comments
	 * @param string $devComments
	 */
	public function setDevComments($devComments)
	{
		return $this->fields['dev-comments'] = $devComments;
	}
	
	/**
	 * Get Count of configurations links in a test
	 * @return string
	 */
	public function getConfigurationsCount()
	{
		if(!isset($this->fields['configurations-count']))
			return null;
			
		$configurationsCount = $this->fields['configurations-count'];
		return $configurationsCount;
	}
	
	/**
	 * Set Count of configurations links in a test
	 * @param string $configurationsCount
	 */
	public function setConfigurationsCount($configurationsCount)
	{
		if(strlen($configurationsCount) > 1)
			throw new QualityCenterInputException("Input [ConfigurationsCount] value [$configurationsCount] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($configurationsCount), 1);
		
		return $this->fields['configurations-count'] = $configurationsCount;
	}
	
	/**
	 * Get Creation Date as linux timestamp
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
	 * Set Creation Date as linux timestamp
	 * @param int $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		$creationTime = date('Y-m-d', $creationTime);
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Deployment Type
	 * @return string
	 */
	public function getUser06()
	{
		if(!isset($this->fields['user-06']))
			return null;
			
		$user06 = $this->fields['user-06'];
		return $user06;
	}
	
	/**
	 * Set Deployment Type
	 * @param string $user06
	 */
	public function setUser06($user06)
	{
		$validValues = array(
			'On Prem',
			'SAAS',
		);
		if(!in_array($user06, $validValues))
			throw new QualityCenterInputException("Input [User06] value [$user06] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user06, $validValues);
		
		return $this->fields['user-06'] = $user06;
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
	 * Get Designer
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
	 * Set Designer
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Estimated DevTime
	 * @return string
	 */
	public function getEstimateDevtime()
	{
		if(!isset($this->fields['estimate-devtime']))
			return null;
			
		$estimateDevtime = $this->fields['estimate-devtime'];
		return $estimateDevtime;
	}
	
	/**
	 * Set Estimated DevTime
	 * @param string $estimateDevtime
	 */
	public function setEstimateDevtime($estimateDevtime)
	{
		return $this->fields['estimate-devtime'] = $estimateDevtime;
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
	 * Get Fit for Regression
	 * @return string
	 */
	public function getUser01()
	{
		if(!isset($this->fields['user-01']))
			return null;
			
		$user01 = $this->fields['user-01'];
		return $user01;
	}
	
	/**
	 * Set Fit for Regression
	 * @param string $user01
	 */
	public function setUser01($user01)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($user01, $validValues))
			throw new QualityCenterInputException("Input [User01] value [$user01] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user01, $validValues);
		
		return $this->fields['user-01'] = $user01;
	}
	
	/**
	 * Get Indicates if the test has criteria
	 * @return string
	 */
	public function getHasCriteria()
	{
		if(!isset($this->fields['has-criteria']))
			return null;
			
		$hasCriteria = $this->fields['has-criteria'];
		return $hasCriteria;
	}
	
	/**
	 * Set Indicates if the test has criteria
	 * @param string $hasCriteria
	 */
	public function setHasCriteria($hasCriteria)
	{
		if(strlen($hasCriteria) > 1)
			throw new QualityCenterInputException("Input [HasCriteria] value [$hasCriteria] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasCriteria), 1);
		
		return $this->fields['has-criteria'] = $hasCriteria;
	}
	
	/**
	 * Get Is Test Change Detectable 
	 * @return string
	 */
	public function getIsChangeDetectable()
	{
		if(!isset($this->fields['is-change-detectable']))
			return null;
			
		$isChangeDetectable = $this->fields['is-change-detectable'];
		return $isChangeDetectable;
	}
	
	/**
	 * Set Is Test Change Detectable 
	 * @param string $isChangeDetectable
	 */
	public function setIsChangeDetectable($isChangeDetectable)
	{
		if(strlen($isChangeDetectable) > 1)
			throw new QualityCenterInputException("Input [IsChangeDetectable] value [$isChangeDetectable] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isChangeDetectable), 1);
		
		return $this->fields['is-change-detectable'] = $isChangeDetectable;
	}
	
	/**
	 * Get Modified
	 * @return string
	 */
	public function getLastModified()
	{
		if(!isset($this->fields['last-modified']))
			return null;
			
		$lastModified = $this->fields['last-modified'];
		return $lastModified;
	}
	
	/**
	 * Set Modified
	 * @param string $lastModified
	 */
	public function setLastModified($lastModified)
	{
		return $this->fields['last-modified'] = $lastModified;
	}
	
	/**
	 * Get Path
	 * @return string
	 */
	public function getStoragePath()
	{
		if(!isset($this->fields['storage-path']))
			return null;
			
		$storagePath = $this->fields['storage-path'];
		return $storagePath;
	}
	
	/**
	 * Set Path
	 * @param string $storagePath
	 */
	public function setStoragePath($storagePath)
	{
		if(strlen($storagePath) > 255)
			throw new QualityCenterInputException("Input [StoragePath] value [$storagePath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($storagePath), 255);
		
		return $this->fields['storage-path'] = $storagePath;
	}
	
	/**
	 * Get Priority
	 * @return string
	 */
	public function getUser03()
	{
		if(!isset($this->fields['user-03']))
			return null;
			
		$user03 = $this->fields['user-03'];
		return $user03;
	}
	
	/**
	 * Set Priority
	 * @param string $user03
	 */
	public function setUser03($user03)
	{
		$validValues = array(
			'1-High',
			'2-Medium',
			'3-Low',
		);
		if(!in_array($user03, $validValues))
			throw new QualityCenterInputException("Input [User03] value [$user03] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user03, $validValues);
		
		return $this->fields['user-03'] = $user03;
	}
	
	/**
	 * Get Protocol Type
	 * @return string
	 */
	public function getProtocolType()
	{
		if(!isset($this->fields['protocol-type']))
			return null;
			
		$protocolType = $this->fields['protocol-type'];
		return $protocolType;
	}
	
	/**
	 * Set Protocol Type
	 * @param string $protocolType
	 */
	public function setProtocolType($protocolType)
	{
		if(strlen($protocolType) > 255)
			throw new QualityCenterInputException("Input [ProtocolType] value [$protocolType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($protocolType), 255);
		
		return $this->fields['protocol-type'] = $protocolType;
	}
	
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		if(!isset($this->fields['status']))
			return null;
			
		$status = $this->fields['status'];
		return $status;
	}
	
	/**
	 * Set Status
	 * @param string $status
	 */
	public function setStatus($status)
	{
		$validValues = array(
			'Design',
			'Draft4Review',
			'Ready',
			'Repair',
		);
		if(!in_array($status, $validValues))
			throw new QualityCenterInputException("Input [Status] value [$status] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $status, $validValues);
		
		return $this->fields['status'] = $status;
	}
	
	/**
	 * Get Step Param
	 * @return string
	 */
	public function getStepParam()
	{
		if(!isset($this->fields['step-param']))
			return null;
			
		$stepParam = $this->fields['step-param'];
		return $stepParam;
	}
	
	/**
	 * Set Step Param
	 * @param string $stepParam
	 */
	public function setStepParam($stepParam)
	{
		return $this->fields['step-param'] = $stepParam;
	}
	
	/**
	 * Get Steps
	 * @return string
	 */
	public function getSteps()
	{
		if(!isset($this->fields['steps']))
			return null;
			
		$steps = $this->fields['steps'];
		return $steps;
	}
	
	/**
	 * Set Steps
	 * @param string $steps
	 */
	public function setSteps($steps)
	{
		return $this->fields['steps'] = $steps;
	}
	
	/**
	 * Get Subject
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
	 * Set Subject
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Target component
	 * @return string
	 */
	public function getUser05()
	{
		if(!isset($this->fields['user-05']))
			return null;
			
		$user05 = $this->fields['user-05'];
		return $user05;
	}
	
	/**
	 * Set Target component
	 * @param string $user05
	 */
	public function setUser05($user05)
	{
		$validValues = array(
			'3rd Parties',
			'Applications',
			'Documentation',
			'Front',
			'Professional Services',
			'Server',
		);
		if(!in_array($user05, $validValues))
			throw new QualityCenterInputException("Input [User05] value [$user05] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user05, $validValues);
		
		return $this->fields['user-05'] = $user05;
	}
	
	/**
	 * Get Template
	 * @return string
	 */
	public function getTemplate()
	{
		if(!isset($this->fields['template']))
			return null;
			
		$template = $this->fields['template'];
		return $template;
	}
	
	/**
	 * Set Template
	 * @param string $template
	 */
	public function setTemplate($template)
	{
		if(strlen($template) > 1)
			throw new QualityCenterInputException("Input [Template] value [$template] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($template), 1);
		
		return $this->fields['template'] = $template;
	}
	
	/**
	 * Get Test ID
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
	 * Set Test ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Test Name
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
	 * Set Test Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Test Runtime Data
	 * @return string
	 */
	public function getRuntimeData()
	{
		if(!isset($this->fields['runtime-data']))
			return null;
			
		$runtimeData = $this->fields['runtime-data'];
		return $runtimeData;
	}
	
	/**
	 * Set Test Runtime Data
	 * @param string $runtimeData
	 */
	public function setRuntimeData($runtimeData)
	{
		if(strlen($runtimeData) > 255)
			throw new QualityCenterInputException("Input [RuntimeData] value [$runtimeData] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($runtimeData), 255);
		
		return $this->fields['runtime-data'] = $runtimeData;
	}
	
	/**
	 * Get Test type
	 * @return string
	 */
	public function getUser07()
	{
		if(!isset($this->fields['user-07']))
			return null;
			
		$user07 = $this->fields['user-07'];
		return $user07;
	}
	
	/**
	 * Set Test type
	 * @param string $user07
	 */
	public function setUser07($user07)
	{
		$validValues = array(
			'Automation',
			'Compatibility',
			'Configuration',
			'Installation',
			'Performance',
			'Progression',
			'Regression',
			'Sanity',
		);
		if(!in_array($user07, $validValues))
			throw new QualityCenterInputException("Input [User07] value [$user07] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user07, $validValues);
		
		return $this->fields['user-07'] = $user07;
	}
	
	/**
	 * Get Testing Mode
	 * @return string
	 */
	public function getServiceTestMode()
	{
		if(!isset($this->fields['service-test-mode']))
			return null;
			
		$serviceTestMode = $this->fields['service-test-mode'];
		return $serviceTestMode;
	}
	
	/**
	 * Set Testing Mode
	 * @param string $serviceTestMode
	 */
	public function setServiceTestMode($serviceTestMode)
	{
		$validValues = array(
			'DUAL_TEST',
			'FUNCTIONAL_TEST',
		);
		if(!in_array($serviceTestMode, $validValues))
			throw new QualityCenterInputException("Input [ServiceTestMode] value [$serviceTestMode] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $serviceTestMode, $validValues);
		
		return $this->fields['service-test-mode'] = $serviceTestMode;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getSubtypeId()
	{
		if(!isset($this->fields['subtype-id']))
			return null;
			
		$subtypeId = $this->fields['subtype-id'];
		return $subtypeId;
	}
	
	/**
	 * Set Type
	 * @param string $subtypeId
	 */
	public function setSubtypeId($subtypeId)
	{
		if(strlen($subtypeId) > 70)
			throw new QualityCenterInputException("Input [SubtypeId] value [$subtypeId] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($subtypeId), 70);
		
		return $this->fields['subtype-id'] = $subtypeId;
	}
	
	/**
	 * Get Version Check In Comments
	 * @return string
	 */
	public function getVcCheckinComments()
	{
		if(!isset($this->fields['vc-checkin-comments']))
			return null;
			
		$vcCheckinComments = $this->fields['vc-checkin-comments'];
		return $vcCheckinComments;
	}
	
	/**
	 * Set Version Check In Comments
	 * @param string $vcCheckinComments
	 */
	public function setVcCheckinComments($vcCheckinComments)
	{
		return $this->fields['vc-checkin-comments'] = $vcCheckinComments;
	}
	
	/**
	 * Get Version Check In Date as linux timestamp
	 * @return int
	 */
	public function getVcCheckinDate()
	{
		if(!isset($this->fields['vc-checkin-date']))
			return null;
			
		$vcCheckinDate = $this->fields['vc-checkin-date'];
		$vcCheckinDateDate = date_parse_from_format('Y-m-d', $vcCheckinDate);
		$vcCheckinDate = mktime(0, 0, 0, $vcCheckinDateDate['month'], $vcCheckinDateDate['day'], $vcCheckinDateDate['year']);
		
		return $vcCheckinDate;
	}
	
	/**
	 * Set Version Check In Date as linux timestamp
	 * @param int $vcCheckinDate
	 */
	public function setVcCheckinDate($vcCheckinDate)
	{
		$vcCheckinDate = date('Y-m-d', $vcCheckinDate);
		return $this->fields['vc-checkin-date'] = $vcCheckinDate;
	}
	
	/**
	 * Get Version Check In Time
	 * @return string
	 */
	public function getVcCheckinTime()
	{
		if(!isset($this->fields['vc-checkin-time']))
			return null;
			
		$vcCheckinTime = $this->fields['vc-checkin-time'];
		return $vcCheckinTime;
	}
	
	/**
	 * Set Version Check In Time
	 * @param string $vcCheckinTime
	 */
	public function setVcCheckinTime($vcCheckinTime)
	{
		if(strlen($vcCheckinTime) > 10)
			throw new QualityCenterInputException("Input [VcCheckinTime] value [$vcCheckinTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($vcCheckinTime), 10);
		
		return $this->fields['vc-checkin-time'] = $vcCheckinTime;
	}
	
	/**
	 * Get Version Checked In By
	 * @return string
	 */
	public function getVcCheckinUserName()
	{
		if(!isset($this->fields['vc-checkin-user-name']))
			return null;
			
		$vcCheckinUserName = $this->fields['vc-checkin-user-name'];
		return $vcCheckinUserName;
	}
	
	/**
	 * Set Version Checked In By
	 * @param string $vcCheckinUserName
	 */
	public function setVcCheckinUserName($vcCheckinUserName)
	{
		return $this->fields['vc-checkin-user-name'] = $vcCheckinUserName;
	}
	
	/**
	 * Get Version Comments
	 * @return string
	 */
	public function getVcComments()
	{
		if(!isset($this->fields['vc-comments']))
			return null;
			
		$vcComments = $this->fields['vc-comments'];
		return $vcComments;
	}
	
	/**
	 * Set Version Comments
	 * @param string $vcComments
	 */
	public function setVcComments($vcComments)
	{
		return $this->fields['vc-comments'] = $vcComments;
	}
	
	/**
	 * Get Version Date as linux timestamp
	 * @return int
	 */
	public function getVcDate()
	{
		if(!isset($this->fields['vc-date']))
			return null;
			
		$vcDate = $this->fields['vc-date'];
		$vcDateDate = date_parse_from_format('Y-m-d', $vcDate);
		$vcDate = mktime(0, 0, 0, $vcDateDate['month'], $vcDateDate['day'], $vcDateDate['year']);
		
		return $vcDate;
	}
	
	/**
	 * Set Version Date as linux timestamp
	 * @param int $vcDate
	 */
	public function setVcDate($vcDate)
	{
		$vcDate = date('Y-m-d', $vcDate);
		return $this->fields['vc-date'] = $vcDate;
	}
	
	/**
	 * Get Version Number
	 * @return string
	 */
	public function getVcVersionNumber()
	{
		if(!isset($this->fields['vc-version-number']))
			return null;
			
		$vcVersionNumber = $this->fields['vc-version-number'];
		return $vcVersionNumber;
	}
	
	/**
	 * Set Version Number
	 * @param string $vcVersionNumber
	 */
	public function setVcVersionNumber($vcVersionNumber)
	{
		return $this->fields['vc-version-number'] = $vcVersionNumber;
	}
	
	/**
	 * Get Version Owner
	 * @return string
	 */
	public function getCheckOutUserName()
	{
		if(!isset($this->fields['check-out-user-name']))
			return null;
			
		$checkOutUserName = $this->fields['check-out-user-name'];
		return $checkOutUserName;
	}
	
	/**
	 * Set Version Owner
	 * @param string $checkOutUserName
	 */
	public function setCheckOutUserName($checkOutUserName)
	{
		return $this->fields['check-out-user-name'] = $checkOutUserName;
	}
	
	/**
	 * Get Version Status
	 * @return string
	 */
	public function getVcStatus()
	{
		if(!isset($this->fields['vc-status']))
			return null;
			
		$vcStatus = $this->fields['vc-status'];
		return $vcStatus;
	}
	
	/**
	 * Set Version Status
	 * @param string $vcStatus
	 */
	public function setVcStatus($vcStatus)
	{
		$validValues = array(
			'Checked_In',
			'Checked_Out',
		);
		if(!in_array($vcStatus, $validValues))
			throw new QualityCenterInputException("Input [VcStatus] value [$vcStatus] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $vcStatus, $validValues);
		
		return $this->fields['vc-status'] = $vcStatus;
	}
	
	/**
	 * Get Version Time
	 * @return string
	 */
	public function getVcTime()
	{
		if(!isset($this->fields['vc-time']))
			return null;
			
		$vcTime = $this->fields['vc-time'];
		return $vcTime;
	}
	
	/**
	 * Set Version Time
	 * @param string $vcTime
	 */
	public function setVcTime($vcTime)
	{
		if(strlen($vcTime) > 10)
			throw new QualityCenterInputException("Input [VcTime] value [$vcTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($vcTime), 10);
		
		return $this->fields['vc-time'] = $vcTime;
	}
	
	/**
	 * Get Working Mode
	 * @return string
	 */
	public function getWorkingMode()
	{
		if(!isset($this->fields['working-mode']))
			return null;
			
		$workingMode = $this->fields['working-mode'];
		return $workingMode;
	}
	
	/**
	 * Set Working Mode
	 * @param string $workingMode
	 */
	public function setWorkingMode($workingMode)
	{
		$validValues = array(
			'All',
			'Runtime',
		);
		if(!in_array($workingMode, $validValues))
			throw new QualityCenterInputException("Input [WorkingMode] value [$workingMode] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $workingMode, $validValues);
		
		return $this->fields['working-mode'] = $workingMode;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getTimeout()
	{
		if(!isset($this->fields['timeout']))
			return null;
			
		$timeout = $this->fields['timeout'];
		return $timeout;
	}
	
	/**
	 * Set 
	 * @param string $timeout
	 */
	public function setTimeout($timeout)
	{
		return $this->fields['timeout'] = $timeout;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getTextSync()
	{
		if(!isset($this->fields['text-sync']))
			return null;
			
		$textSync = $this->fields['text-sync'];
		return $textSync;
	}
	
	/**
	 * Set 
	 * @param string $textSync
	 */
	public function setTextSync($textSync)
	{
		if(strlen($textSync) > 1)
			throw new QualityCenterInputException("Input [TextSync] value [$textSync] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($textSync), 1);
		
		return $this->fields['text-sync'] = $textSync;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getTestVerStamp()
	{
		if(!isset($this->fields['test-ver-stamp']))
			return null;
			
		$testVerStamp = $this->fields['test-ver-stamp'];
		return $testVerStamp;
	}
	
	/**
	 * Set 
	 * @param string $testVerStamp
	 */
	public function setTestVerStamp($testVerStamp)
	{
		return $this->fields['test-ver-stamp'] = $testVerStamp;
	}
	
}
