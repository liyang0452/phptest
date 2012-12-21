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
class QualityCenterRunFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'attachment',
			'pinned-baseline',
			'bpta-change-awareness',
			'bpta-change-detected',
			'comments',
			'os-config',
			'test-config-id',
			'cycle-id',
			'draft',
			'duration',
			'execution-date',
			'execution-time',
			'host',
			'iters-sum-status',
			'os-build',
			'os-sp',
			'os-name',
			'path',
			'id',
			'name',
			'vc-status',
			'vc-lokedby',
			'state',
			'status',
			'assign-rcyc',
			'test-id',
			'testcycl-id',
			'test-instance',
			'cycle',
			'vc-version-number',
			'owner',
			'subtype-id',
			'text-sync',
			'last-modified',
			'iters-params-values',
			'run-ver-stamp',
		);
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
	public function getComments()
	{
		if(!isset($this->fields['comments']))
			return null;
			
		$comments = $this->fields['comments'];
		return $comments;
	}
	
	/**
	 * Set Comments
	 * @param string $comments
	 */
	public function setComments($comments)
	{
		return $this->fields['comments'] = $comments;
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
	 * Get Configuration ID
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
	 * Set Configuration ID
	 * @param string $testConfigId
	 */
	public function setTestConfigId($testConfigId)
	{
		return $this->fields['test-config-id'] = $testConfigId;
	}
	
	/**
	 * Get Cycle ID
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
	 * Set Cycle ID
	 * @param string $cycleId
	 */
	public function setCycleId($cycleId)
	{
		if(strlen($cycleId) > 10)
			throw new QualityCenterInputException("Input [CycleId] value [$cycleId] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($cycleId), 10);
		
		return $this->fields['cycle-id'] = $cycleId;
	}
	
	/**
	 * Get Draft Run
	 * @return string
	 */
	public function getDraft()
	{
		if(!isset($this->fields['draft']))
			return null;
			
		$draft = $this->fields['draft'];
		return $draft;
	}
	
	/**
	 * Set Draft Run
	 * @param string $draft
	 */
	public function setDraft($draft)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($draft instanceof QualityCenterExpression)
		{
			$draft->validateEnum('Draft', $validValues);
		}			
		elseif(!in_array($draft, $validValues))
		{
			throw new QualityCenterInputException("Input [Draft] value [$draft] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $draft, $validValues);
		}
		
		return $this->fields['draft'] = $draft;
	}
	
	/**
	 * Get Duration
	 * @return string
	 */
	public function getDuration()
	{
		if(!isset($this->fields['duration']))
			return null;
			
		$duration = $this->fields['duration'];
		return $duration;
	}
	
	/**
	 * Set Duration
	 * @param string $duration
	 */
	public function setDuration($duration)
	{
		return $this->fields['duration'] = $duration;
	}
	
	/**
	 * Get Exec Date as linux timestamp
	 * @return mixed
	 */
	public function getExecutionDate()
	{
		if(!isset($this->fields['execution-date']))
			return null;
			
		$executionDate = $this->fields['execution-date'];
		$executionDateDate = date_parse_from_format('Y-m-d', $executionDate);
		$executionDate = mktime(0, 0, 0, $executionDateDate['month'], $executionDateDate['day'], $executionDateDate['year']);
		
		return $executionDate;
	}
	
	/**
	 * Set Exec Date as linux timestamp
	 * @param mixed $executionDate
	 */
	public function setExecutionDate($executionDate)
	{
		if(is_int($executionDate))
			$executionDate = date('Y-m-d', $executionDate);
		return $this->fields['execution-date'] = $executionDate;
	}
	
	/**
	 * Get Exec Time
	 * @return string
	 */
	public function getExecutionTime()
	{
		if(!isset($this->fields['execution-time']))
			return null;
			
		$executionTime = $this->fields['execution-time'];
		return $executionTime;
	}
	
	/**
	 * Set Exec Time
	 * @param string $executionTime
	 */
	public function setExecutionTime($executionTime)
	{
		if(strlen($executionTime) > 10)
			throw new QualityCenterInputException("Input [ExecutionTime] value [$executionTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($executionTime), 10);
		
		return $this->fields['execution-time'] = $executionTime;
	}
	
	/**
	 * Get Host
	 * @return string
	 */
	public function getHost()
	{
		if(!isset($this->fields['host']))
			return null;
			
		$host = $this->fields['host'];
		return $host;
	}
	
	/**
	 * Set Host
	 * @param string $host
	 */
	public function setHost($host)
	{
		if(strlen($host) > 50)
			throw new QualityCenterInputException("Input [Host] value [$host] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($host), 50);
		
		return $this->fields['host'] = $host;
	}
	
	/**
	 * Get Iterations Status
	 * @return string
	 */
	public function getItersSumStatus()
	{
		if(!isset($this->fields['iters-sum-status']))
			return null;
			
		$itersSumStatus = $this->fields['iters-sum-status'];
		return $itersSumStatus;
	}
	
	/**
	 * Set Iterations Status
	 * @param string $itersSumStatus
	 */
	public function setItersSumStatus($itersSumStatus)
	{
		return $this->fields['iters-sum-status'] = $itersSumStatus;
	}
	
	/**
	 * Get OS Build Number
	 * @return string
	 */
	public function getOsBuild()
	{
		if(!isset($this->fields['os-build']))
			return null;
			
		$osBuild = $this->fields['os-build'];
		return $osBuild;
	}
	
	/**
	 * Set OS Build Number
	 * @param string $osBuild
	 */
	public function setOsBuild($osBuild)
	{
		if(strlen($osBuild) > 70)
			throw new QualityCenterInputException("Input [OsBuild] value [$osBuild] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($osBuild), 70);
		
		return $this->fields['os-build'] = $osBuild;
	}
	
	/**
	 * Get OS Service Pack
	 * @return string
	 */
	public function getOsSp()
	{
		if(!isset($this->fields['os-sp']))
			return null;
			
		$osSp = $this->fields['os-sp'];
		return $osSp;
	}
	
	/**
	 * Set OS Service Pack
	 * @param string $osSp
	 */
	public function setOsSp($osSp)
	{
		if(strlen($osSp) > 70)
			throw new QualityCenterInputException("Input [OsSp] value [$osSp] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($osSp), 70);
		
		return $this->fields['os-sp'] = $osSp;
	}
	
	/**
	 * Get Operating System
	 * @return string
	 */
	public function getOsName()
	{
		if(!isset($this->fields['os-name']))
			return null;
			
		$osName = $this->fields['os-name'];
		return $osName;
	}
	
	/**
	 * Set Operating System
	 * @param string $osName
	 */
	public function setOsName($osName)
	{
		if(strlen($osName) > 70)
			throw new QualityCenterInputException("Input [OsName] value [$osName] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($osName), 70);
		
		return $this->fields['os-name'] = $osName;
	}
	
	/**
	 * Get Path
	 * @return string
	 */
	public function getPath()
	{
		if(!isset($this->fields['path']))
			return null;
			
		$path = $this->fields['path'];
		return $path;
	}
	
	/**
	 * Set Path
	 * @param string $path
	 */
	public function setPath($path)
	{
		if(strlen($path) > 255)
			throw new QualityCenterInputException("Input [Path] value [$path] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($path), 255);
		
		return $this->fields['path'] = $path;
	}
	
	/**
	 * Get Run ID
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
	 * Set Run ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Run Name
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
	 * Set Run Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Run VC Status
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
	 * Set Run VC Status
	 * @param string $vcStatus
	 */
	public function setVcStatus($vcStatus)
	{
		if(strlen($vcStatus) > 50)
			throw new QualityCenterInputException("Input [VcStatus] value [$vcStatus] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($vcStatus), 50);
		
		return $this->fields['vc-status'] = $vcStatus;
	}
	
	/**
	 * Get Run VC User
	 * @return string
	 */
	public function getVcLokedby()
	{
		if(!isset($this->fields['vc-lokedby']))
			return null;
			
		$vcLokedby = $this->fields['vc-lokedby'];
		return $vcLokedby;
	}
	
	/**
	 * Set Run VC User
	 * @param string $vcLokedby
	 */
	public function setVcLokedby($vcLokedby)
	{
		if(strlen($vcLokedby) > 255)
			throw new QualityCenterInputException("Input [VcLokedby] value [$vcLokedby] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($vcLokedby), 255);
		
		return $this->fields['vc-lokedby'] = $vcLokedby;
	}
	
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		if(!isset($this->fields['state']))
			return null;
			
		$state = $this->fields['state'];
		return $state;
	}
	
	/**
	 * Set State
	 * @param string $state
	 */
	public function setState($state)
	{
		$validValues = array(
			'Finished',
			'Initializing',
			'Run Failure',
			'Running',
			'Stopping',
		);
					
		if($state instanceof QualityCenterExpression)
		{
			$state->validateEnum('State', $validValues);
		}			
		elseif(!in_array($state, $validValues))
		{
			throw new QualityCenterInputException("Input [State] value [$state] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $state, $validValues);
		}
		
		return $this->fields['state'] = $state;
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
		if(strlen($testId) > 10)
			throw new QualityCenterInputException("Input [TestId] value [$testId] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($testId), 10);
		
		return $this->fields['test-id'] = $testId;
	}
	
	/**
	 * Get Test Instance
	 * @return string
	 */
	public function getTestcyclId()
	{
		if(!isset($this->fields['testcycl-id']))
			return null;
			
		$testcyclId = $this->fields['testcycl-id'];
		return $testcyclId;
	}
	
	/**
	 * Set Test Instance
	 * @param string $testcyclId
	 */
	public function setTestcyclId($testcyclId)
	{
		return $this->fields['testcycl-id'] = $testcyclId;
	}
	
	/**
	 * Get Test Instance ID
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
	 * Set Test Instance ID
	 * @param string $testInstance
	 */
	public function setTestInstance($testInstance)
	{
		return $this->fields['test-instance'] = $testInstance;
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
	 * Get Test Version Number
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
	 * Set Test Version Number
	 * @param string $vcVersionNumber
	 */
	public function setVcVersionNumber($vcVersionNumber)
	{
		return $this->fields['vc-version-number'] = $vcVersionNumber;
	}
	
	/**
	 * Get Tester
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
	 * Set Tester
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
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
	public function getLastModified()
	{
		if(!isset($this->fields['last-modified']))
			return null;
			
		$lastModified = $this->fields['last-modified'];
		return $lastModified;
	}
	
	/**
	 * Set 
	 * @param string $lastModified
	 */
	public function setLastModified($lastModified)
	{
		return $this->fields['last-modified'] = $lastModified;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getItersParamsValues()
	{
		if(!isset($this->fields['iters-params-values']))
			return null;
			
		$itersParamsValues = $this->fields['iters-params-values'];
		return $itersParamsValues;
	}
	
	/**
	 * Set 
	 * @param string $itersParamsValues
	 */
	public function setItersParamsValues($itersParamsValues)
	{
		return $this->fields['iters-params-values'] = $itersParamsValues;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getRunVerStamp()
	{
		if(!isset($this->fields['run-ver-stamp']))
			return null;
			
		$runVerStamp = $this->fields['run-ver-stamp'];
		return $runVerStamp;
	}
	
	/**
	 * Set 
	 * @param string $runVerStamp
	 */
	public function setRunVerStamp($runVerStamp)
	{
		return $this->fields['run-ver-stamp'] = $runVerStamp;
	}
	
}
