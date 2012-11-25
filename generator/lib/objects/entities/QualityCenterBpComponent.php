<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class QualityCenterBpComponent extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'bp-component';
	}
	
	/**
	 * Get BC Component Application Type
	 * @return string
	 */
	public function getCompAppType()
	{
		if(!isset($this->fields['comp-app-type']))
			return null;
			
		$compAppType = $this->fields['comp-app-type'];
		return $compAppType;
	}
	
	/**
	 * Set BC Component Application Type
	 * @param string $compAppType
	 */
	public function setCompAppType($compAppType)
	{
		if(strlen($compAppType) > 10)
			throw new QualityCenterInputException("Input [CompAppType] value [$compAppType] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($compAppType), 10);
		
		return $this->fields['comp-app-type'] = $compAppType;
	}
	
	/**
	 * Get BC Component Subtype
	 * @return string
	 */
	public function getCompSubtypeName()
	{
		if(!isset($this->fields['comp-subtype-name']))
			return null;
			
		$compSubtypeName = $this->fields['comp-subtype-name'];
		return $compSubtypeName;
	}
	
	/**
	 * Set BC Component Subtype
	 * @param string $compSubtypeName
	 */
	public function setCompSubtypeName($compSubtypeName)
	{
		if(strlen($compSubtypeName) > 70)
			throw new QualityCenterInputException("Input [CompSubtypeName] value [$compSubtypeName] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($compSubtypeName), 70);
		
		return $this->fields['comp-subtype-name'] = $compSubtypeName;
	}
	
	/**
	 * Get Business Component name
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
	 * Set Business Component name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get BusinessProcess ID
	 * @return string
	 */
	public function getBptId()
	{
		if(!isset($this->fields['bpt-id']))
			return null;
			
		$bptId = $this->fields['bpt-id'];
		return $bptId;
	}
	
	/**
	 * Set BusinessProcess ID
	 * @param string $bptId
	 */
	public function setBptId($bptId)
	{
		return $this->fields['bpt-id'] = $bptId;
	}
	
	/**
	 * Get Comment
	 * @return string
	 */
	public function getComment()
	{
		if(!isset($this->fields['comment']))
			return null;
			
		$comment = $this->fields['comment'];
		return $comment;
	}
	
	/**
	 * Set Comment
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		return $this->fields['comment'] = $comment;
	}
	
	/**
	 * Get Component ID
	 * @return string
	 */
	public function getCoId()
	{
		if(!isset($this->fields['co-id']))
			return null;
			
		$coId = $this->fields['co-id'];
		return $coId;
	}
	
	/**
	 * Set Component ID
	 * @param string $coId
	 */
	public function setCoId($coId)
	{
		return $this->fields['co-id'] = $coId;
	}
	
	/**
	 * Get Component Instance
	 * @return string
	 */
	public function getCoInstance()
	{
		if(!isset($this->fields['co-instance']))
			return null;
			
		$coInstance = $this->fields['co-instance'];
		return $coInstance;
	}
	
	/**
	 * Set Component Instance
	 * @param string $coInstance
	 */
	public function setCoInstance($coInstance)
	{
		return $this->fields['co-instance'] = $coInstance;
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
	 * Get Condition Valid
	 * @return string
	 */
	public function getConditionValid()
	{
		if(!isset($this->fields['condition-valid']))
			return null;
			
		$conditionValid = $this->fields['condition-valid'];
		return $conditionValid;
	}
	
	/**
	 * Set Condition Valid
	 * @param string $conditionValid
	 */
	public function setConditionValid($conditionValid)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($conditionValid, $validValues))
			throw new QualityCenterInputException("Input [ConditionValid] value [$conditionValid] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $conditionValid, $validValues);
		
		return $this->fields['condition-valid'] = $conditionValid;
	}
	
	/**
	 * Get Criterion ID
	 * @return string
	 */
	public function getCriterionId()
	{
		if(!isset($this->fields['criterion-id']))
			return null;
			
		$criterionId = $this->fields['criterion-id'];
		return $criterionId;
	}
	
	/**
	 * Set Criterion ID
	 * @param string $criterionId
	 */
	public function setCriterionId($criterionId)
	{
		return $this->fields['criterion-id'] = $criterionId;
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getDesc()
	{
		if(!isset($this->fields['desc']))
			return null;
			
		$desc = $this->fields['desc'];
		return $desc;
	}
	
	/**
	 * Set Description
	 * @param string $desc
	 */
	public function setDesc($desc)
	{
		return $this->fields['desc'] = $desc;
	}
	
	/**
	 * Get Flow Id
	 * @return string
	 */
	public function getFlowId()
	{
		if(!isset($this->fields['flow-id']))
			return null;
			
		$flowId = $this->fields['flow-id'];
		return $flowId;
	}
	
	/**
	 * Set Flow Id
	 * @param string $flowId
	 */
	public function setFlowId($flowId)
	{
		if(strlen($flowId) > 70)
			throw new QualityCenterInputException("Input [FlowId] value [$flowId] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($flowId), 70);
		
		return $this->fields['flow-id'] = $flowId;
	}
	
	/**
	 * Get Group
	 * @return string
	 */
	public function getGroup()
	{
		if(!isset($this->fields['group']))
			return null;
			
		$group = $this->fields['group'];
		return $group;
	}
	
	/**
	 * Set Group
	 * @param string $group
	 */
	public function setGroup($group)
	{
		return $this->fields['group'] = $group;
	}
	
	/**
	 * Get Has Picture
	 * @return string
	 */
	public function getHasPicture()
	{
		if(!isset($this->fields['has-picture']))
			return null;
			
		$hasPicture = $this->fields['has-picture'];
		return $hasPicture;
	}
	
	/**
	 * Set Has Picture
	 * @param string $hasPicture
	 */
	public function setHasPicture($hasPicture)
	{
		$validValues = array(
			'N',
			'Y',
		);
		if(!in_array($hasPicture, $validValues))
			throw new QualityCenterInputException("Input [HasPicture] value [$hasPicture] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $hasPicture, $validValues);
		
		return $this->fields['has-picture'] = $hasPicture;
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
	 * Get Is Comp Obsolete
	 * @return string
	 */
	public function getCompIsObsolete()
	{
		if(!isset($this->fields['comp-is-obsolete']))
			return null;
			
		$compIsObsolete = $this->fields['comp-is-obsolete'];
		return $compIsObsolete;
	}
	
	/**
	 * Set Is Comp Obsolete
	 * @param string $compIsObsolete
	 */
	public function setCompIsObsolete($compIsObsolete)
	{
		if(strlen($compIsObsolete) > 1)
			throw new QualityCenterInputException("Input [CompIsObsolete] value [$compIsObsolete] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($compIsObsolete), 1);
		
		return $this->fields['comp-is-obsolete'] = $compIsObsolete;
	}
	
	/**
	 * Get Iterations
	 * @return string
	 */
	public function getIterNum()
	{
		if(!isset($this->fields['iter-num']))
			return null;
			
		$iterNum = $this->fields['iter-num'];
		return $iterNum;
	}
	
	/**
	 * Set Iterations
	 * @param string $iterNum
	 */
	public function setIterNum($iterNum)
	{
		if(strlen($iterNum) > 70)
			throw new QualityCenterInputException("Input [IterNum] value [$iterNum] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($iterNum), 70);
		
		return $this->fields['iter-num'] = $iterNum;
	}
	
	/**
	 * Get On Failure
	 * @return string
	 */
	public function getFailCond()
	{
		if(!isset($this->fields['fail-cond']))
			return null;
			
		$failCond = $this->fields['fail-cond'];
		return $failCond;
	}
	
	/**
	 * Set On Failure
	 * @param string $failCond
	 */
	public function setFailCond($failCond)
	{
		$validValues = array(
			'Continue',
			'Exit',
		);
		if(!in_array($failCond, $validValues))
			throw new QualityCenterInputException("Input [FailCond] value [$failCond] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $failCond, $validValues);
		
		return $this->fields['fail-cond'] = $failCond;
	}
	
	/**
	 * Get Order
	 * @return string
	 */
	public function getOrder()
	{
		if(!isset($this->fields['order']))
			return null;
			
		$order = $this->fields['order'];
		return $order;
	}
	
	/**
	 * Set Order
	 * @param string $order
	 */
	public function setOrder($order)
	{
		return $this->fields['order'] = $order;
	}
	
	/**
	 * Get Parameter Mismatch Ids
	 * @return string
	 */
	public function getParamMismatchIds()
	{
		if(!isset($this->fields['param-mismatch-ids']))
			return null;
			
		$paramMismatchIds = $this->fields['param-mismatch-ids'];
		return $paramMismatchIds;
	}
	
	/**
	 * Set Parameter Mismatch Ids
	 * @param string $paramMismatchIds
	 */
	public function setParamMismatchIds($paramMismatchIds)
	{
		if(strlen($paramMismatchIds) > 255)
			throw new QualityCenterInputException("Input [ParamMismatchIds] value [$paramMismatchIds] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($paramMismatchIds), 255);
		
		return $this->fields['param-mismatch-ids'] = $paramMismatchIds;
	}
	
	/**
	 * Get Parameters
	 * @return string
	 */
	public function getCompParams()
	{
		if(!isset($this->fields['comp-params']))
			return null;
			
		$compParams = $this->fields['comp-params'];
		return $compParams;
	}
	
	/**
	 * Set Parameters
	 * @param string $compParams
	 */
	public function setCompParams($compParams)
	{
		if(strlen($compParams) > 70)
			throw new QualityCenterInputException("Input [CompParams] value [$compParams] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($compParams), 70);
		
		return $this->fields['comp-params'] = $compParams;
	}
	
	/**
	 * Get Parent ID
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
	 * Set Parent ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Parent Type
	 * @return string
	 */
	public function getParentType()
	{
		if(!isset($this->fields['parent-type']))
			return null;
			
		$parentType = $this->fields['parent-type'];
		return $parentType;
	}
	
	/**
	 * Set Parent Type
	 * @param string $parentType
	 */
	public function setParentType($parentType)
	{
		if(strlen($parentType) > 40)
			throw new QualityCenterInputException("Input [ParentType] value [$parentType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($parentType), 40);
		
		return $this->fields['parent-type'] = $parentType;
	}
	
	/**
	 * Get Referenced component exists
	 * @return string
	 */
	public function getReferencedComponentExists()
	{
		if(!isset($this->fields['referenced-component-exists']))
			return null;
			
		$referencedComponentExists = $this->fields['referenced-component-exists'];
		return $referencedComponentExists;
	}
	
	/**
	 * Set Referenced component exists
	 * @param string $referencedComponentExists
	 */
	public function setReferencedComponentExists($referencedComponentExists)
	{
		if(strlen($referencedComponentExists) > 1)
			throw new QualityCenterInputException("Input [ReferencedComponentExists] value [$referencedComponentExists] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($referencedComponentExists), 1);
		
		return $this->fields['referenced-component-exists'] = $referencedComponentExists;
	}
	
	/**
	 * Get Run From Iteration
	 * @return string
	 */
	public function getRunfromIteration()
	{
		if(!isset($this->fields['runfrom-iteration']))
			return null;
			
		$runfromIteration = $this->fields['runfrom-iteration'];
		return $runfromIteration;
	}
	
	/**
	 * Set Run From Iteration
	 * @param string $runfromIteration
	 */
	public function setRunfromIteration($runfromIteration)
	{
		return $this->fields['runfrom-iteration'] = $runfromIteration;
	}
	
	/**
	 * Get Run To Iteration
	 * @return string
	 */
	public function getRuntoIteration()
	{
		if(!isset($this->fields['runto-iteration']))
			return null;
			
		$runtoIteration = $this->fields['runto-iteration'];
		return $runtoIteration;
	}
	
	/**
	 * Set Run To Iteration
	 * @param string $runtoIteration
	 */
	public function setRuntoIteration($runtoIteration)
	{
		return $this->fields['runto-iteration'] = $runtoIteration;
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
		if(strlen($status) > 70)
			throw new QualityCenterInputException("Input [Status] value [$status] excceeded maximum length [70]", QualityCenterInputException::SIZE, strlen($status), 70);
		
		return $this->fields['status'] = $status;
	}
	
	/**
	 * Get Subtype ID
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
	 * Set Subtype ID
	 * @param string $subtypeId
	 */
	public function setSubtypeId($subtypeId)
	{
		if(strlen($subtypeId) > 50)
			throw new QualityCenterInputException("Input [SubtypeId] value [$subtypeId] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($subtypeId), 50);
		
		return $this->fields['subtype-id'] = $subtypeId;
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
	
}
