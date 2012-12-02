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
class QualityCenterTaskFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'context',
			'owner',
			'name',
			'end-time',
			'failure-reason',
			'vts',
			'passed',
			'result',
			'creation-time',
			'id',
			'progress',
			'state',
			'type',
			'ver-stamp',
			'is-visible',
		);
	}
	
	/**
	 * Get Context
	 * @return string
	 */
	public function getContext()
	{
		if(!isset($this->fields['context']))
			return null;
			
		$context = $this->fields['context'];
		return $context;
	}
	
	/**
	 * Set Context
	 * @param string $context
	 */
	public function setContext($context)
	{
		if(strlen($context) > 255)
			throw new QualityCenterInputException("Input [Context] value [$context] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($context), 255);
		
		return $this->fields['context'] = $context;
	}
	
	/**
	 * Get Created By
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
	 * Set Created By
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
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
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get End Time
	 * @return string
	 */
	public function getEndTime()
	{
		if(!isset($this->fields['end-time']))
			return null;
			
		$endTime = $this->fields['end-time'];
		return $endTime;
	}
	
	/**
	 * Set End Time
	 * @param string $endTime
	 */
	public function setEndTime($endTime)
	{
		return $this->fields['end-time'] = $endTime;
	}
	
	/**
	 * Get Failure Reason
	 * @return string
	 */
	public function getFailureReason()
	{
		if(!isset($this->fields['failure-reason']))
			return null;
			
		$failureReason = $this->fields['failure-reason'];
		return $failureReason;
	}
	
	/**
	 * Set Failure Reason
	 * @param string $failureReason
	 */
	public function setFailureReason($failureReason)
	{
		return $this->fields['failure-reason'] = $failureReason;
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
	 * Get Passed
	 * @return string
	 */
	public function getPassed()
	{
		if(!isset($this->fields['passed']))
			return null;
			
		$passed = $this->fields['passed'];
		return $passed;
	}
	
	/**
	 * Set Passed
	 * @param string $passed
	 */
	public function setPassed($passed)
	{
		if(strlen($passed) > 1)
			throw new QualityCenterInputException("Input [Passed] value [$passed] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($passed), 1);
		
		return $this->fields['passed'] = $passed;
	}
	
	/**
	 * Get Result
	 * @return string
	 */
	public function getResult()
	{
		if(!isset($this->fields['result']))
			return null;
			
		$result = $this->fields['result'];
		return $result;
	}
	
	/**
	 * Set Result
	 * @param string $result
	 */
	public function setResult($result)
	{
		return $this->fields['result'] = $result;
	}
	
	/**
	 * Get Start Time
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
	 * Set Start Time
	 * @param string $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Task Id
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
	 * Set Task Id
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Task Progress
	 * @return string
	 */
	public function getProgress()
	{
		if(!isset($this->fields['progress']))
			return null;
			
		$progress = $this->fields['progress'];
		return $progress;
	}
	
	/**
	 * Set Task Progress
	 * @param string $progress
	 */
	public function setProgress($progress)
	{
		$validValues = array(
			'Failed',
			'Running',
			'Succeeded',
		);
					
		if($progress instanceof QualityCenterExpression)
		{
			$progress->validateEnum('Progress', $validValues);
		}			
		elseif(!in_array($progress, $validValues))
		{
			throw new QualityCenterInputException("Input [Progress] value [$progress] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $progress, $validValues);
		}
		
		return $this->fields['progress'] = $progress;
	}
	
	/**
	 * Get Task State
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
	 * Set Task State
	 * @param string $state
	 */
	public function setState($state)
	{
		return $this->fields['state'] = $state;
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
		if(strlen($type) > 255)
			throw new QualityCenterInputException("Input [Type] value [$type] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($type), 255);
		
		return $this->fields['type'] = $type;
	}
	
	/**
	 * Get Version Stamp
	 * @return string
	 */
	public function getVerStamp()
	{
		if(!isset($this->fields['ver-stamp']))
			return null;
			
		$verStamp = $this->fields['ver-stamp'];
		return $verStamp;
	}
	
	/**
	 * Set Version Stamp
	 * @param string $verStamp
	 */
	public function setVerStamp($verStamp)
	{
		return $this->fields['ver-stamp'] = $verStamp;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getIsVisible()
	{
		if(!isset($this->fields['is-visible']))
			return null;
			
		$isVisible = $this->fields['is-visible'];
		return $isVisible;
	}
	
	/**
	 * Set 
	 * @param string $isVisible
	 */
	public function setIsVisible($isVisible)
	{
		if(strlen($isVisible) > 1)
			throw new QualityCenterInputException("Input [IsVisible] value [$isVisible] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isVisible), 1);
		
		return $this->fields['is-visible'] = $isVisible;
	}
	
}
