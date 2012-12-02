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
class QualityCenterRunStepFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'actual',
			'attachment',
			'component-data',
			'bpta-condition',
			'description',
			'desstep-id',
			'execution-date',
			'execution-time',
			'expected',
			'extended-reference',
			'level',
			'obj-id',
			'line-no',
			'path',
			'rel-obj-id',
			'parent-id',
			'test-id',
			'status',
			'id',
			'name',
			'step-order',
			'tree-parent-id',
		);
	}
	
	/**
	 * Get Actual
	 * @return string
	 */
	public function getActual()
	{
		if(!isset($this->fields['actual']))
			return null;
			
		$actual = $this->fields['actual'];
		return $actual;
	}
	
	/**
	 * Set Actual
	 * @param string $actual
	 */
	public function setActual($actual)
	{
		return $this->fields['actual'] = $actual;
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
	 * Get Component Step Data
	 * @return string
	 */
	public function getComponentData()
	{
		if(!isset($this->fields['component-data']))
			return null;
			
		$componentData = $this->fields['component-data'];
		return $componentData;
	}
	
	/**
	 * Set Component Step Data
	 * @param string $componentData
	 */
	public function setComponentData($componentData)
	{
		return $this->fields['component-data'] = $componentData;
	}
	
	/**
	 * Get Condition
	 * @return string
	 */
	public function getBptaCondition()
	{
		if(!isset($this->fields['bpta-condition']))
			return null;
			
		$bptaCondition = $this->fields['bpta-condition'];
		return $bptaCondition;
	}
	
	/**
	 * Set Condition
	 * @param string $bptaCondition
	 */
	public function setBptaCondition($bptaCondition)
	{
		return $this->fields['bpta-condition'] = $bptaCondition;
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
	 * Get DesignStep ID
	 * @return string
	 */
	public function getDesstepId()
	{
		if(!isset($this->fields['desstep-id']))
			return null;
			
		$desstepId = $this->fields['desstep-id'];
		return $desstepId;
	}
	
	/**
	 * Set DesignStep ID
	 * @param string $desstepId
	 */
	public function setDesstepId($desstepId)
	{
		return $this->fields['desstep-id'] = $desstepId;
	}
	
	/**
	 * Get Exec Date as linux timestamp
	 * @return int
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
	 * @param int $executionDate
	 */
	public function setExecutionDate($executionDate)
	{
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
	 * Get Expected
	 * @return string
	 */
	public function getExpected()
	{
		if(!isset($this->fields['expected']))
			return null;
			
		$expected = $this->fields['expected'];
		return $expected;
	}
	
	/**
	 * Set Expected
	 * @param string $expected
	 */
	public function setExpected($expected)
	{
		return $this->fields['expected'] = $expected;
	}
	
	/**
	 * Get Extended Reference
	 * @return string
	 */
	public function getExtendedReference()
	{
		if(!isset($this->fields['extended-reference']))
			return null;
			
		$extendedReference = $this->fields['extended-reference'];
		return $extendedReference;
	}
	
	/**
	 * Set Extended Reference
	 * @param string $extendedReference
	 */
	public function setExtendedReference($extendedReference)
	{
		if(strlen($extendedReference) > 50)
			throw new QualityCenterInputException("Input [ExtendedReference] value [$extendedReference] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($extendedReference), 50);
		
		return $this->fields['extended-reference'] = $extendedReference;
	}
	
	/**
	 * Get Level
	 * @return string
	 */
	public function getLevel()
	{
		if(!isset($this->fields['level']))
			return null;
			
		$level = $this->fields['level'];
		return $level;
	}
	
	/**
	 * Set Level
	 * @param string $level
	 */
	public function setLevel($level)
	{
		return $this->fields['level'] = $level;
	}
	
	/**
	 * Get Level
	 * @return string
	 */
	public function getObjId()
	{
		if(!isset($this->fields['obj-id']))
			return null;
			
		$objId = $this->fields['obj-id'];
		return $objId;
	}
	
	/**
	 * Set Level
	 * @param string $objId
	 */
	public function setObjId($objId)
	{
		return $this->fields['obj-id'] = $objId;
	}
	
	/**
	 * Get Line_no
	 * @return string
	 */
	public function getLineNo()
	{
		if(!isset($this->fields['line-no']))
			return null;
			
		$lineNo = $this->fields['line-no'];
		return $lineNo;
	}
	
	/**
	 * Set Line_no
	 * @param string $lineNo
	 */
	public function setLineNo($lineNo)
	{
		return $this->fields['line-no'] = $lineNo;
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
	 * Get Related Object Id
	 * @return string
	 */
	public function getRelObjId()
	{
		if(!isset($this->fields['rel-obj-id']))
			return null;
			
		$relObjId = $this->fields['rel-obj-id'];
		return $relObjId;
	}
	
	/**
	 * Set Related Object Id
	 * @param string $relObjId
	 */
	public function setRelObjId($relObjId)
	{
		return $this->fields['rel-obj-id'] = $relObjId;
	}
	
	/**
	 * Get Run ID
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
	 * Set Run ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Source Test
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
	 * Set Source Test
	 * @param string $testId
	 */
	public function setTestId($testId)
	{
		return $this->fields['test-id'] = $testId;
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
	 * Get Step ID
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
	 * Set Step ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Step Name
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
	 * Set Step Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Step Order
	 * @return string
	 */
	public function getStepOrder()
	{
		if(!isset($this->fields['step-order']))
			return null;
			
		$stepOrder = $this->fields['step-order'];
		return $stepOrder;
	}
	
	/**
	 * Set Step Order
	 * @param string $stepOrder
	 */
	public function setStepOrder($stepOrder)
	{
		return $this->fields['step-order'] = $stepOrder;
	}
	
	/**
	 * Get Step Parent ID
	 * @return string
	 */
	public function getTreeParentId()
	{
		if(!isset($this->fields['tree-parent-id']))
			return null;
			
		$treeParentId = $this->fields['tree-parent-id'];
		return $treeParentId;
	}
	
	/**
	 * Set Step Parent ID
	 * @param string $treeParentId
	 */
	public function setTreeParentId($treeParentId)
	{
		return $this->fields['tree-parent-id'] = $treeParentId;
	}
	
}
