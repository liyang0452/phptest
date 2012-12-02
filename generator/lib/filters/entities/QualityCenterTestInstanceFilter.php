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
class QualityCenterTestInstanceFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'exec-event-handle',
			'attachment',
			'pinned-baseline',
			'bpta-change-awareness',
			'os-config',
			'test-config-id',
			'exec-date',
			'iterations',
			'last-modified',
			'test-order',
			'plan-scheduling-date',
			'plan-scheduling-time',
			'host-name',
			'user-01',
			'owner',
			'eparams',
			'status',
			'assign-rcyc',
			'test-id',
			'test-instance',
			'id',
			'cycle',
			'cycle-id',
			'actual-tester',
			'exec-time',
			'subtype-id',
			'testcycle-ver-stamp',
			'data-obj',
		);
	}
	
	/**
	 * Get 'On Failure' Settings
	 * @return string
	 */
	public function getExecEventHandle()
	{
		if(!isset($this->fields['exec-event-handle']))
			return null;
			
		$execEventHandle = $this->fields['exec-event-handle'];
		return $execEventHandle;
	}
	
	/**
	 * Set 'On Failure' Settings
	 * @param string $execEventHandle
	 */
	public function setExecEventHandle($execEventHandle)
	{
		return $this->fields['exec-event-handle'] = $execEventHandle;
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
	 * Get Baseline
	 * @return string
	 */
	public function getPinnedBaseline()
	{
		if(!isset($this->fields['pinned-baseline']))
			return null;
			
		$pinnedBaseline = $this->fields['pinned-baseline'];
		return $pinnedBaseline;
	}
	
	/**
	 * Set Baseline
	 * @param string $pinnedBaseline
	 */
	public function setPinnedBaseline($pinnedBaseline)
	{
		return $this->fields['pinned-baseline'] = $pinnedBaseline;
	}
	
	/**
	 * Get Change Detection Mode
	 * @return string
	 */
	public function getBptaChangeAwareness()
	{
		if(!isset($this->fields['bpta-change-awareness']))
			return null;
			
		$bptaChangeAwareness = $this->fields['bpta-change-awareness'];
		return $bptaChangeAwareness;
	}
	
	/**
	 * Set Change Detection Mode
	 * @param string $bptaChangeAwareness
	 */
	public function setBptaChangeAwareness($bptaChangeAwareness)
	{
		if(strlen($bptaChangeAwareness) > 1)
			throw new QualityCenterInputException("Input [BptaChangeAwareness] value [$bptaChangeAwareness] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($bptaChangeAwareness), 1);
		
		return $this->fields['bpta-change-awareness'] = $bptaChangeAwareness;
	}
	
	/**
	 * Get Configuration
	 * @return string
	 */
	public function getOsConfig()
	{
		if(!isset($this->fields['os-config']))
			return null;
			
		$osConfig = $this->fields['os-config'];
		return $osConfig;
	}
	
	/**
	 * Set Configuration
	 * @param string $osConfig
	 */
	public function setOsConfig($osConfig)
	{
		$validValues = array(
		);
					
		if($osConfig instanceof QualityCenterExpression)
		{
			$osConfig->validateEnum('OsConfig', $validValues);
		}			
		elseif(!in_array($osConfig, $validValues))
		{
			throw new QualityCenterInputException("Input [OsConfig] value [$osConfig] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $osConfig, $validValues);
		}
		
		return $this->fields['os-config'] = $osConfig;
	}
	
	/**
	 * Get Configuration
	 * @return string
	 */
	public function getTestConfigId()
	{
		if(!isset($this->fields['test-config-id']))
			return null;
			
		$testConfigId = $this->fields['test-config-id'];
		return $testConfigId;
	}
	
	/**
	 * Set Configuration
	 * @param string $testConfigId
	 */
	public function setTestConfigId($testConfigId)
	{
		return $this->fields['test-config-id'] = $testConfigId;
	}
	
	/**
	 * Get Exec Date as linux timestamp
	 * @return int
	 */
	public function getExecDate()
	{
		if(!isset($this->fields['exec-date']))
			return null;
			
		$execDate = $this->fields['exec-date'];
		$execDateDate = date_parse_from_format('Y-m-d', $execDate);
		$execDate = mktime(0, 0, 0, $execDateDate['month'], $execDateDate['day'], $execDateDate['year']);
		
		return $execDate;
	}
	
	/**
	 * Set Exec Date as linux timestamp
	 * @param int $execDate
	 */
	public function setExecDate($execDate)
	{
		$execDate = date('Y-m-d', $execDate);
		return $this->fields['exec-date'] = $execDate;
	}
	
	/**
	 * Get Iterations
	 * @return string
	 */
	public function getIterations()
	{
		if(!isset($this->fields['iterations']))
			return null;
			
		$iterations = $this->fields['iterations'];
		return $iterations;
	}
	
	/**
	 * Set Iterations
	 * @param string $iterations
	 */
	public function setIterations($iterations)
	{
		if(strlen($iterations) > 255)
			throw new QualityCenterInputException("Input [Iterations] value [$iterations] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($iterations), 255);
		
		return $this->fields['iterations'] = $iterations;
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
	 * Get Order Tests In Test Set
	 * @return string
	 */
	public function getTestOrder()
	{
		if(!isset($this->fields['test-order']))
			return null;
			
		$testOrder = $this->fields['test-order'];
		return $testOrder;
	}
	
	/**
	 * Set Order Tests In Test Set
	 * @param string $testOrder
	 */
	public function setTestOrder($testOrder)
	{
		return $this->fields['test-order'] = $testOrder;
	}
	
	/**
	 * Get Planned Exec Date as linux timestamp
	 * @return int
	 */
	public function getPlanSchedulingDate()
	{
		if(!isset($this->fields['plan-scheduling-date']))
			return null;
			
		$planSchedulingDate = $this->fields['plan-scheduling-date'];
		$planSchedulingDateDate = date_parse_from_format('Y-m-d', $planSchedulingDate);
		$planSchedulingDate = mktime(0, 0, 0, $planSchedulingDateDate['month'], $planSchedulingDateDate['day'], $planSchedulingDateDate['year']);
		
		return $planSchedulingDate;
	}
	
	/**
	 * Set Planned Exec Date as linux timestamp
	 * @param int $planSchedulingDate
	 */
	public function setPlanSchedulingDate($planSchedulingDate)
	{
		$planSchedulingDate = date('Y-m-d', $planSchedulingDate);
		return $this->fields['plan-scheduling-date'] = $planSchedulingDate;
	}
	
	/**
	 * Get Planned Exec Time
	 * @return string
	 */
	public function getPlanSchedulingTime()
	{
		if(!isset($this->fields['plan-scheduling-time']))
			return null;
			
		$planSchedulingTime = $this->fields['plan-scheduling-time'];
		return $planSchedulingTime;
	}
	
	/**
	 * Set Planned Exec Time
	 * @param string $planSchedulingTime
	 */
	public function setPlanSchedulingTime($planSchedulingTime)
	{
		if(strlen($planSchedulingTime) > 10)
			throw new QualityCenterInputException("Input [PlanSchedulingTime] value [$planSchedulingTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($planSchedulingTime), 10);
		
		return $this->fields['plan-scheduling-time'] = $planSchedulingTime;
	}
	
	/**
	 * Get Planned Host Name
	 * @return string
	 */
	public function getHostName()
	{
		if(!isset($this->fields['host-name']))
			return null;
			
		$hostName = $this->fields['host-name'];
		return $hostName;
	}
	
	/**
	 * Set Planned Host Name
	 * @param string $hostName
	 */
	public function setHostName($hostName)
	{
		if(strlen($hostName) > 50)
			throw new QualityCenterInputException("Input [HostName] value [$hostName] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($hostName), 50);
		
		return $this->fields['host-name'] = $hostName;
	}
	
	/**
	 * Get Related to feature
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
	 * Set Related to feature
	 * @param string $user01
	 */
	public function setUser01($user01)
	{
		$validValues = array(
			'Access Control',
			'Admin Console',
			'Analytics Reports',
			'App _ Temp',
			'Applications',
			'Conversion',
			'Cue Points',
			'Custom Data/Meta data',
			'Distribution',
			'Email Notifications',
			'Entitlement',
			'Entry Drill down',
			'HTML5',
			'Login & Logout',
			'Moderation',
			'Multi-Publishers',
			'Player',
			'Regression',
			'Related Videos',
			'Search & Filters',
			'Thumbnails',
			'Upload',
			'Users management',
		);
					
		if($user01 instanceof QualityCenterExpression)
		{
			$user01->validateEnum('User01', $validValues);
		}			
		elseif(!in_array($user01, $validValues))
		{
			throw new QualityCenterInputException("Input [User01] value [$user01] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $user01, $validValues);
		}
		
		return $this->fields['user-01'] = $user01;
	}
	
	/**
	 * Get Responsible Tester
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
	 * Set Responsible Tester
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Run Configuration
	 * @return string
	 */
	public function getEparams()
	{
		if(!isset($this->fields['eparams']))
			return null;
			
		$eparams = $this->fields['eparams'];
		return $eparams;
	}
	
	/**
	 * Set Run Configuration
	 * @param string $eparams
	 */
	public function setEparams($eparams)
	{
		return $this->fields['eparams'] = $eparams;
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
			'Blocked',
			'Failed',
			'N/A',
			'No Run',
			'Not Completed',
			'Passed',
		);
					
		if($status instanceof QualityCenterExpression)
		{
			$status->validateEnum('Status', $validValues);
		}			
		elseif(!in_array($status, $validValues))
		{
			throw new QualityCenterInputException("Input [Status] value [$status] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $status, $validValues);
		}
		
		return $this->fields['status'] = $status;
	}
	
	/**
	 * Get Target Cycle
	 * @return string
	 */
	public function getAssignRcyc()
	{
		if(!isset($this->fields['assign-rcyc']))
			return null;
			
		$assignRcyc = $this->fields['assign-rcyc'];
		return $assignRcyc;
	}
	
	/**
	 * Set Target Cycle
	 * @param string $assignRcyc
	 */
	public function setAssignRcyc($assignRcyc)
	{
		return $this->fields['assign-rcyc'] = $assignRcyc;
	}
	
	/**
	 * Get Test
	 * @return string
	 */
	public function getTestId()
	{
		if(!isset($this->fields['test-id']))
			return null;
			
		$testId = $this->fields['test-id'];
		return $testId;
	}
	
	/**
	 * Set Test
	 * @param string $testId
	 */
	public function setTestId($testId)
	{
		return $this->fields['test-id'] = $testId;
	}
	
	/**
	 * Get Test Instance
	 * @return string
	 */
	public function getTestInstance()
	{
		if(!isset($this->fields['test-instance']))
			return null;
			
		$testInstance = $this->fields['test-instance'];
		return $testInstance;
	}
	
	/**
	 * Set Test Instance
	 * @param string $testInstance
	 */
	public function setTestInstance($testInstance)
	{
		return $this->fields['test-instance'] = $testInstance;
	}
	
	/**
	 * Get Test Instance Unique ID
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
	 * Set Test Instance Unique ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Test Set
	 * @return string
	 */
	public function getCycle()
	{
		if(!isset($this->fields['cycle']))
			return null;
			
		$cycle = $this->fields['cycle'];
		return $cycle;
	}
	
	/**
	 * Set Test Set
	 * @param string $cycle
	 */
	public function setCycle($cycle)
	{
		if(strlen($cycle) > 255)
			throw new QualityCenterInputException("Input [Cycle] value [$cycle] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($cycle), 255);
		
		return $this->fields['cycle'] = $cycle;
	}
	
	/**
	 * Get TestSet
	 * @return string
	 */
	public function getCycleId()
	{
		if(!isset($this->fields['cycle-id']))
			return null;
			
		$cycleId = $this->fields['cycle-id'];
		return $cycleId;
	}
	
	/**
	 * Set TestSet
	 * @param string $cycleId
	 */
	public function setCycleId($cycleId)
	{
		return $this->fields['cycle-id'] = $cycleId;
	}
	
	/**
	 * Get Tester
	 * @return string
	 */
	public function getActualTester()
	{
		if(!isset($this->fields['actual-tester']))
			return null;
			
		$actualTester = $this->fields['actual-tester'];
		return $actualTester;
	}
	
	/**
	 * Set Tester
	 * @param string $actualTester
	 */
	public function setActualTester($actualTester)
	{
		return $this->fields['actual-tester'] = $actualTester;
	}
	
	/**
	 * Get Time
	 * @return string
	 */
	public function getExecTime()
	{
		if(!isset($this->fields['exec-time']))
			return null;
			
		$execTime = $this->fields['exec-time'];
		return $execTime;
	}
	
	/**
	 * Set Time
	 * @param string $execTime
	 */
	public function setExecTime($execTime)
	{
		if(strlen($execTime) > 10)
			throw new QualityCenterInputException("Input [ExecTime] value [$execTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($execTime), 10);
		
		return $this->fields['exec-time'] = $execTime;
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
		if(strlen($subtypeId) > 100)
			throw new QualityCenterInputException("Input [SubtypeId] value [$subtypeId] excceeded maximum length [100]", QualityCenterInputException::SIZE, strlen($subtypeId), 100);
		
		return $this->fields['subtype-id'] = $subtypeId;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getTestcycleVerStamp()
	{
		if(!isset($this->fields['testcycle-ver-stamp']))
			return null;
			
		$testcycleVerStamp = $this->fields['testcycle-ver-stamp'];
		return $testcycleVerStamp;
	}
	
	/**
	 * Set 
	 * @param string $testcycleVerStamp
	 */
	public function setTestcycleVerStamp($testcycleVerStamp)
	{
		return $this->fields['testcycle-ver-stamp'] = $testcycleVerStamp;
	}
	
	/**
	 * Get 
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
	 * Set 
	 * @param string $dataObj
	 */
	public function setDataObj($dataObj)
	{
		return $this->fields['data-obj'] = $dataObj;
	}
	
}
