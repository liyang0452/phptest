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
class QualityCenterRequirementFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'attachment',
			'owner',
			'dev-comments',
			'creation-time',
			'req-time',
			'req-comment',
			'status',
			'has-rich-content',
			'istemplate',
			'last-modified',
			'name',
			'no-of-sons',
			'req-type',
			'request-assign-to',
			'request-id',
			'request-note',
			'request-status',
			'request-type',
			'request-server',
			'request-updates',
			'req-priority',
			'req-product',
			'rbt-analysis-result-data',
			'rbt-analysis-setup-data',
			'rbt-assessment-data',
			'rbt-last-analysis-date',
			'rbt-ignore-in-analysis',
			'rbt-func-cmplx',
			'rbt-analysis-parent-req-id',
			'rbt-risk',
			'rbt-bsns-impact',
			'rbt-custom-func-cmplx',
			'rbt-custom-risk',
			'rbt-custom-bsns-impact',
			'rbt-custom-fail-prob',
			'rbt-custom-testing-hours',
			'rbt-custom-testing-level',
			'rbt-effective-func-cmplx',
			'rbt-effective-risk',
			'rbt-effective-bsns-impact',
			'rbt-effective-fail-prob',
			'rbt-rnd-estim-effort-hours',
			'rbt-fail-prob',
			'rbt-testing-hours',
			'rbt-testing-level',
			'rbt-use-custom-func-cmplx',
			'rbt-use-custom-risk',
			'rbt-use-custom-bsns-impact',
			'rbt-use-custom-fail-prob',
			'rbt-use-custom-tl-and-te',
			'parent-id',
			'id',
			'order-id',
			'father-name',
			'hierarchical-path',
			'type-id',
			'req-reviewed',
			'req-rich-content',
			'target-rcyc',
			'target-rel',
			'user-01',
			'vc-checkin-comments',
			'vc-checkin-date',
			'vc-checkin-time',
			'vc-checkout-comments',
			'vc-checkout-date',
			'vc-checkout-time',
			'vc-checkin-user-name',
			'check-out-user-name',
			'vc-version-number',
			'vc-status',
			'req-ver-stamp',
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
	 * Get Author
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
	 * Set Author
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
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
	 * Get Creation Date as linux timestamp
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
	 * Set Creation Date as linux timestamp
	 * @param mixed $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		if(is_int($creationTime))
			$creationTime = date('Y-m-d', $creationTime);
		return $this->fields['creation-time'] = $creationTime;
	}
	
	/**
	 * Get Creation Time
	 * @return string
	 */
	public function getReqTime()
	{
		if(!isset($this->fields['req-time']))
			return null;
			
		$reqTime = $this->fields['req-time'];
		return $reqTime;
	}
	
	/**
	 * Set Creation Time
	 * @param string $reqTime
	 */
	public function setReqTime($reqTime)
	{
		if(strlen($reqTime) > 10)
			throw new QualityCenterInputException("Input [ReqTime] value [$reqTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($reqTime), 10);
		
		return $this->fields['req-time'] = $reqTime;
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getReqComment()
	{
		if(!isset($this->fields['req-comment']))
			return null;
			
		$reqComment = $this->fields['req-comment'];
		return $reqComment;
	}
	
	/**
	 * Set Description
	 * @param string $reqComment
	 */
	public function setReqComment($reqComment)
	{
		return $this->fields['req-comment'] = $reqComment;
	}
	
	/**
	 * Get Direct Cover Status
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
	 * Set Direct Cover Status
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
			'Not Covered',
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
	 * Get Has Rich Text
	 * @return string
	 */
	public function getHasRichContent()
	{
		if(!isset($this->fields['has-rich-content']))
			return null;
			
		$hasRichContent = $this->fields['has-rich-content'];
		return $hasRichContent;
	}
	
	/**
	 * Set Has Rich Text
	 * @param string $hasRichContent
	 */
	public function setHasRichContent($hasRichContent)
	{
		if(strlen($hasRichContent) > 1)
			throw new QualityCenterInputException("Input [HasRichContent] value [$hasRichContent] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasRichContent), 1);
		
		return $this->fields['has-rich-content'] = $hasRichContent;
	}
	
	/**
	 * Get Is Template
	 * @return string
	 */
	public function getIstemplate()
	{
		if(!isset($this->fields['istemplate']))
			return null;
			
		$istemplate = $this->fields['istemplate'];
		return $istemplate;
	}
	
	/**
	 * Set Is Template
	 * @param string $istemplate
	 */
	public function setIstemplate($istemplate)
	{
		return $this->fields['istemplate'] = $istemplate;
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
	 * Get Number of sons
	 * @return string
	 */
	public function getNoOfSons()
	{
		if(!isset($this->fields['no-of-sons']))
			return null;
			
		$noOfSons = $this->fields['no-of-sons'];
		return $noOfSons;
	}
	
	/**
	 * Set Number of sons
	 * @param string $noOfSons
	 */
	public function setNoOfSons($noOfSons)
	{
		return $this->fields['no-of-sons'] = $noOfSons;
	}
	
	/**
	 * Get Old Type (obsolete)
	 * @return string
	 */
	public function getReqType()
	{
		if(!isset($this->fields['req-type']))
			return null;
			
		$reqType = $this->fields['req-type'];
		return $reqType;
	}
	
	/**
	 * Set Old Type (obsolete)
	 * @param string $reqType
	 */
	public function setReqType($reqType)
	{
		$validValues = array(
			'Hardware',
			'Software',
		);
					
		if($reqType instanceof QualityCenterExpression)
		{
			$reqType->validateEnum('ReqType', $validValues);
		}			
		elseif(!in_array($reqType, $validValues))
		{
			throw new QualityCenterInputException("Input [ReqType] value [$reqType] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $reqType, $validValues);
		}
		
		return $this->fields['req-type'] = $reqType;
	}
	
	/**
	 * Get PPM Assigned To
	 * @return string
	 */
	public function getRequestAssignTo()
	{
		if(!isset($this->fields['request-assign-to']))
			return null;
			
		$requestAssignTo = $this->fields['request-assign-to'];
		return $requestAssignTo;
	}
	
	/**
	 * Set PPM Assigned To
	 * @param string $requestAssignTo
	 */
	public function setRequestAssignTo($requestAssignTo)
	{
		return $this->fields['request-assign-to'] = $requestAssignTo;
	}
	
	/**
	 * Get PPM Request Id
	 * @return string
	 */
	public function getRequestId()
	{
		if(!isset($this->fields['request-id']))
			return null;
			
		$requestId = $this->fields['request-id'];
		return $requestId;
	}
	
	/**
	 * Set PPM Request Id
	 * @param string $requestId
	 */
	public function setRequestId($requestId)
	{
		return $this->fields['request-id'] = $requestId;
	}
	
	/**
	 * Get PPM Request Note
	 * @return string
	 */
	public function getRequestNote()
	{
		if(!isset($this->fields['request-note']))
			return null;
			
		$requestNote = $this->fields['request-note'];
		return $requestNote;
	}
	
	/**
	 * Set PPM Request Note
	 * @param string $requestNote
	 */
	public function setRequestNote($requestNote)
	{
		return $this->fields['request-note'] = $requestNote;
	}
	
	/**
	 * Get PPM Request Status
	 * @return string
	 */
	public function getRequestStatus()
	{
		if(!isset($this->fields['request-status']))
			return null;
			
		$requestStatus = $this->fields['request-status'];
		return $requestStatus;
	}
	
	/**
	 * Set PPM Request Status
	 * @param string $requestStatus
	 */
	public function setRequestStatus($requestStatus)
	{
		$validValues = array(
			'1-Requirements Setup Completed',
			'2-Test Plan Setup Completed',
			'3-Test Lab Setup Completed',
			'4-Running Tests in Quality Center',
			'5-Test Execution Completed',
			'Cancelled',
			'Closed',
			'New',
		);
					
		if($requestStatus instanceof QualityCenterExpression)
		{
			$requestStatus->validateEnum('RequestStatus', $validValues);
		}			
		elseif(!in_array($requestStatus, $validValues))
		{
			throw new QualityCenterInputException("Input [RequestStatus] value [$requestStatus] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $requestStatus, $validValues);
		}
		
		return $this->fields['request-status'] = $requestStatus;
	}
	
	/**
	 * Get PPM Request Type
	 * @return string
	 */
	public function getRequestType()
	{
		if(!isset($this->fields['request-type']))
			return null;
			
		$requestType = $this->fields['request-type'];
		return $requestType;
	}
	
	/**
	 * Set PPM Request Type
	 * @param string $requestType
	 */
	public function setRequestType($requestType)
	{
		if(strlen($requestType) > 120)
			throw new QualityCenterInputException("Input [RequestType] value [$requestType] excceeded maximum length [120]", QualityCenterInputException::SIZE, strlen($requestType), 120);
		
		return $this->fields['request-type'] = $requestType;
	}
	
	/**
	 * Get PPM Server URL
	 * @return string
	 */
	public function getRequestServer()
	{
		if(!isset($this->fields['request-server']))
			return null;
			
		$requestServer = $this->fields['request-server'];
		return $requestServer;
	}
	
	/**
	 * Set PPM Server URL
	 * @param string $requestServer
	 */
	public function setRequestServer($requestServer)
	{
		if(strlen($requestServer) > 120)
			throw new QualityCenterInputException("Input [RequestServer] value [$requestServer] excceeded maximum length [120]", QualityCenterInputException::SIZE, strlen($requestServer), 120);
		
		return $this->fields['request-server'] = $requestServer;
	}
	
	/**
	 * Get PPM Synchronization Data
	 * @return string
	 */
	public function getRequestUpdates()
	{
		if(!isset($this->fields['request-updates']))
			return null;
			
		$requestUpdates = $this->fields['request-updates'];
		return $requestUpdates;
	}
	
	/**
	 * Set PPM Synchronization Data
	 * @param string $requestUpdates
	 */
	public function setRequestUpdates($requestUpdates)
	{
		if(strlen($requestUpdates) > 120)
			throw new QualityCenterInputException("Input [RequestUpdates] value [$requestUpdates] excceeded maximum length [120]", QualityCenterInputException::SIZE, strlen($requestUpdates), 120);
		
		return $this->fields['request-updates'] = $requestUpdates;
	}
	
	/**
	 * Get Priority
	 * @return string
	 */
	public function getReqPriority()
	{
		if(!isset($this->fields['req-priority']))
			return null;
			
		$reqPriority = $this->fields['req-priority'];
		return $reqPriority;
	}
	
	/**
	 * Set Priority
	 * @param string $reqPriority
	 */
	public function setReqPriority($reqPriority)
	{
		$validValues = array(
			'1-High',
			'2-Medium',
			'3-Low',
		);
					
		if($reqPriority instanceof QualityCenterExpression)
		{
			$reqPriority->validateEnum('ReqPriority', $validValues);
		}			
		elseif(!in_array($reqPriority, $validValues))
		{
			throw new QualityCenterInputException("Input [ReqPriority] value [$reqPriority] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $reqPriority, $validValues);
		}
		
		return $this->fields['req-priority'] = $reqPriority;
	}
	
	/**
	 * Get Product
	 * @return string
	 */
	public function getReqProduct()
	{
		if(!isset($this->fields['req-product']))
			return null;
			
		$reqProduct = $this->fields['req-product'];
		return $reqProduct;
	}
	
	/**
	 * Set Product
	 * @param string $reqProduct
	 */
	public function setReqProduct($reqProduct)
	{
		$validValues = array(
			'Applications',
			'Core',
			'ProfessionalServices',
		);
					
		if($reqProduct instanceof QualityCenterExpression)
		{
			$reqProduct->validateEnum('ReqProduct', $validValues);
		}			
		elseif(!in_array($reqProduct, $validValues))
		{
			throw new QualityCenterInputException("Input [ReqProduct] value [$reqProduct] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $reqProduct, $validValues);
		}
		
		return $this->fields['req-product'] = $reqProduct;
	}
	
	/**
	 * Get RBQM Analysis result data
	 * @return string
	 */
	public function getRbtAnalysisResultData()
	{
		if(!isset($this->fields['rbt-analysis-result-data']))
			return null;
			
		$rbtAnalysisResultData = $this->fields['rbt-analysis-result-data'];
		return $rbtAnalysisResultData;
	}
	
	/**
	 * Set RBQM Analysis result data
	 * @param string $rbtAnalysisResultData
	 */
	public function setRbtAnalysisResultData($rbtAnalysisResultData)
	{
		return $this->fields['rbt-analysis-result-data'] = $rbtAnalysisResultData;
	}
	
	/**
	 * Get RBQM Analysis setup data
	 * @return string
	 */
	public function getRbtAnalysisSetupData()
	{
		if(!isset($this->fields['rbt-analysis-setup-data']))
			return null;
			
		$rbtAnalysisSetupData = $this->fields['rbt-analysis-setup-data'];
		return $rbtAnalysisSetupData;
	}
	
	/**
	 * Set RBQM Analysis setup data
	 * @param string $rbtAnalysisSetupData
	 */
	public function setRbtAnalysisSetupData($rbtAnalysisSetupData)
	{
		return $this->fields['rbt-analysis-setup-data'] = $rbtAnalysisSetupData;
	}
	
	/**
	 * Get RBQM Assessment data
	 * @return string
	 */
	public function getRbtAssessmentData()
	{
		if(!isset($this->fields['rbt-assessment-data']))
			return null;
			
		$rbtAssessmentData = $this->fields['rbt-assessment-data'];
		return $rbtAssessmentData;
	}
	
	/**
	 * Set RBQM Assessment data
	 * @param string $rbtAssessmentData
	 */
	public function setRbtAssessmentData($rbtAssessmentData)
	{
		return $this->fields['rbt-assessment-data'] = $rbtAssessmentData;
	}
	
	/**
	 * Get RBQM Date of last Analysis as linux timestamp
	 * @return mixed
	 */
	public function getRbtLastAnalysisDate()
	{
		if(!isset($this->fields['rbt-last-analysis-date']))
			return null;
			
		$rbtLastAnalysisDate = $this->fields['rbt-last-analysis-date'];
		$rbtLastAnalysisDateDate = date_parse_from_format('Y-m-d', $rbtLastAnalysisDate);
		$rbtLastAnalysisDate = mktime(0, 0, 0, $rbtLastAnalysisDateDate['month'], $rbtLastAnalysisDateDate['day'], $rbtLastAnalysisDateDate['year']);
		
		return $rbtLastAnalysisDate;
	}
	
	/**
	 * Set RBQM Date of last Analysis as linux timestamp
	 * @param mixed $rbtLastAnalysisDate
	 */
	public function setRbtLastAnalysisDate($rbtLastAnalysisDate)
	{
		if(is_int($rbtLastAnalysisDate))
			$rbtLastAnalysisDate = date('Y-m-d', $rbtLastAnalysisDate);
		return $this->fields['rbt-last-analysis-date'] = $rbtLastAnalysisDate;
	}
	
	/**
	 * Get RBQM Exclude from analysis
	 * @return string
	 */
	public function getRbtIgnoreInAnalysis()
	{
		if(!isset($this->fields['rbt-ignore-in-analysis']))
			return null;
			
		$rbtIgnoreInAnalysis = $this->fields['rbt-ignore-in-analysis'];
		return $rbtIgnoreInAnalysis;
	}
	
	/**
	 * Set RBQM Exclude from analysis
	 * @param string $rbtIgnoreInAnalysis
	 */
	public function setRbtIgnoreInAnalysis($rbtIgnoreInAnalysis)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($rbtIgnoreInAnalysis instanceof QualityCenterExpression)
		{
			$rbtIgnoreInAnalysis->validateEnum('RbtIgnoreInAnalysis', $validValues);
		}			
		elseif(!in_array($rbtIgnoreInAnalysis, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtIgnoreInAnalysis] value [$rbtIgnoreInAnalysis] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtIgnoreInAnalysis, $validValues);
		}
		
		return $this->fields['rbt-ignore-in-analysis'] = $rbtIgnoreInAnalysis;
	}
	
	/**
	 * Get RBQM Functional Complexity
	 * @return string
	 */
	public function getRbtFuncCmplx()
	{
		if(!isset($this->fields['rbt-func-cmplx']))
			return null;
			
		$rbtFuncCmplx = $this->fields['rbt-func-cmplx'];
		return $rbtFuncCmplx;
	}
	
	/**
	 * Set RBQM Functional Complexity
	 * @param string $rbtFuncCmplx
	 */
	public function setRbtFuncCmplx($rbtFuncCmplx)
	{
		$validValues = array(
			'1',
			'2',
			'3',
		);
					
		if($rbtFuncCmplx instanceof QualityCenterExpression)
		{
			$rbtFuncCmplx->validateEnum('RbtFuncCmplx', $validValues);
		}			
		elseif(!in_array($rbtFuncCmplx, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtFuncCmplx] value [$rbtFuncCmplx] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtFuncCmplx, $validValues);
		}
		
		return $this->fields['rbt-func-cmplx'] = $rbtFuncCmplx;
	}
	
	/**
	 * Get RBQM ID of parent analysis req
	 * @return string
	 */
	public function getRbtAnalysisParentReqId()
	{
		if(!isset($this->fields['rbt-analysis-parent-req-id']))
			return null;
			
		$rbtAnalysisParentReqId = $this->fields['rbt-analysis-parent-req-id'];
		return $rbtAnalysisParentReqId;
	}
	
	/**
	 * Set RBQM ID of parent analysis req
	 * @param string $rbtAnalysisParentReqId
	 */
	public function setRbtAnalysisParentReqId($rbtAnalysisParentReqId)
	{
		return $this->fields['rbt-analysis-parent-req-id'] = $rbtAnalysisParentReqId;
	}
	
	/**
	 * Get RBQM Risk
	 * @return string
	 */
	public function getRbtRisk()
	{
		if(!isset($this->fields['rbt-risk']))
			return null;
			
		$rbtRisk = $this->fields['rbt-risk'];
		return $rbtRisk;
	}
	
	/**
	 * Set RBQM Risk
	 * @param string $rbtRisk
	 */
	public function setRbtRisk($rbtRisk)
	{
		$validValues = array(
			'A',
			'B',
			'C',
		);
					
		if($rbtRisk instanceof QualityCenterExpression)
		{
			$rbtRisk->validateEnum('RbtRisk', $validValues);
		}			
		elseif(!in_array($rbtRisk, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtRisk] value [$rbtRisk] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtRisk, $validValues);
		}
		
		return $this->fields['rbt-risk'] = $rbtRisk;
	}
	
	/**
	 * Get RBQM business impact
	 * @return string
	 */
	public function getRbtBsnsImpact()
	{
		if(!isset($this->fields['rbt-bsns-impact']))
			return null;
			
		$rbtBsnsImpact = $this->fields['rbt-bsns-impact'];
		return $rbtBsnsImpact;
	}
	
	/**
	 * Set RBQM business impact
	 * @param string $rbtBsnsImpact
	 */
	public function setRbtBsnsImpact($rbtBsnsImpact)
	{
		$validValues = array(
			'A',
			'B',
			'C',
		);
					
		if($rbtBsnsImpact instanceof QualityCenterExpression)
		{
			$rbtBsnsImpact->validateEnum('RbtBsnsImpact', $validValues);
		}			
		elseif(!in_array($rbtBsnsImpact, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtBsnsImpact] value [$rbtBsnsImpact] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtBsnsImpact, $validValues);
		}
		
		return $this->fields['rbt-bsns-impact'] = $rbtBsnsImpact;
	}
	
	/**
	 * Get RBQM custom Functional Complexity
	 * @return string
	 */
	public function getRbtCustomFuncCmplx()
	{
		if(!isset($this->fields['rbt-custom-func-cmplx']))
			return null;
			
		$rbtCustomFuncCmplx = $this->fields['rbt-custom-func-cmplx'];
		return $rbtCustomFuncCmplx;
	}
	
	/**
	 * Set RBQM custom Functional Complexity
	 * @param string $rbtCustomFuncCmplx
	 */
	public function setRbtCustomFuncCmplx($rbtCustomFuncCmplx)
	{
		$validValues = array(
			'1',
			'2',
			'3',
		);
					
		if($rbtCustomFuncCmplx instanceof QualityCenterExpression)
		{
			$rbtCustomFuncCmplx->validateEnum('RbtCustomFuncCmplx', $validValues);
		}			
		elseif(!in_array($rbtCustomFuncCmplx, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtCustomFuncCmplx] value [$rbtCustomFuncCmplx] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtCustomFuncCmplx, $validValues);
		}
		
		return $this->fields['rbt-custom-func-cmplx'] = $rbtCustomFuncCmplx;
	}
	
	/**
	 * Get RBQM custom Risk
	 * @return string
	 */
	public function getRbtCustomRisk()
	{
		if(!isset($this->fields['rbt-custom-risk']))
			return null;
			
		$rbtCustomRisk = $this->fields['rbt-custom-risk'];
		return $rbtCustomRisk;
	}
	
	/**
	 * Set RBQM custom Risk
	 * @param string $rbtCustomRisk
	 */
	public function setRbtCustomRisk($rbtCustomRisk)
	{
		$validValues = array(
			'A',
			'B',
			'C',
		);
					
		if($rbtCustomRisk instanceof QualityCenterExpression)
		{
			$rbtCustomRisk->validateEnum('RbtCustomRisk', $validValues);
		}			
		elseif(!in_array($rbtCustomRisk, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtCustomRisk] value [$rbtCustomRisk] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtCustomRisk, $validValues);
		}
		
		return $this->fields['rbt-custom-risk'] = $rbtCustomRisk;
	}
	
	/**
	 * Get RBQM custom business impact
	 * @return string
	 */
	public function getRbtCustomBsnsImpact()
	{
		if(!isset($this->fields['rbt-custom-bsns-impact']))
			return null;
			
		$rbtCustomBsnsImpact = $this->fields['rbt-custom-bsns-impact'];
		return $rbtCustomBsnsImpact;
	}
	
	/**
	 * Set RBQM custom business impact
	 * @param string $rbtCustomBsnsImpact
	 */
	public function setRbtCustomBsnsImpact($rbtCustomBsnsImpact)
	{
		$validValues = array(
			'A',
			'B',
			'C',
		);
					
		if($rbtCustomBsnsImpact instanceof QualityCenterExpression)
		{
			$rbtCustomBsnsImpact->validateEnum('RbtCustomBsnsImpact', $validValues);
		}			
		elseif(!in_array($rbtCustomBsnsImpact, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtCustomBsnsImpact] value [$rbtCustomBsnsImpact] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtCustomBsnsImpact, $validValues);
		}
		
		return $this->fields['rbt-custom-bsns-impact'] = $rbtCustomBsnsImpact;
	}
	
	/**
	 * Get RBQM custom failure probability
	 * @return string
	 */
	public function getRbtCustomFailProb()
	{
		if(!isset($this->fields['rbt-custom-fail-prob']))
			return null;
			
		$rbtCustomFailProb = $this->fields['rbt-custom-fail-prob'];
		return $rbtCustomFailProb;
	}
	
	/**
	 * Set RBQM custom failure probability
	 * @param string $rbtCustomFailProb
	 */
	public function setRbtCustomFailProb($rbtCustomFailProb)
	{
		$validValues = array(
			'1',
			'2',
			'3',
		);
					
		if($rbtCustomFailProb instanceof QualityCenterExpression)
		{
			$rbtCustomFailProb->validateEnum('RbtCustomFailProb', $validValues);
		}			
		elseif(!in_array($rbtCustomFailProb, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtCustomFailProb] value [$rbtCustomFailProb] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtCustomFailProb, $validValues);
		}
		
		return $this->fields['rbt-custom-fail-prob'] = $rbtCustomFailProb;
	}
	
	/**
	 * Get RBQM custom testing hours
	 * @return string
	 */
	public function getRbtCustomTestingHours()
	{
		if(!isset($this->fields['rbt-custom-testing-hours']))
			return null;
			
		$rbtCustomTestingHours = $this->fields['rbt-custom-testing-hours'];
		return $rbtCustomTestingHours;
	}
	
	/**
	 * Set RBQM custom testing hours
	 * @param string $rbtCustomTestingHours
	 */
	public function setRbtCustomTestingHours($rbtCustomTestingHours)
	{
		return $this->fields['rbt-custom-testing-hours'] = $rbtCustomTestingHours;
	}
	
	/**
	 * Get RBQM custom testing level
	 * @return string
	 */
	public function getRbtCustomTestingLevel()
	{
		if(!isset($this->fields['rbt-custom-testing-level']))
			return null;
			
		$rbtCustomTestingLevel = $this->fields['rbt-custom-testing-level'];
		return $rbtCustomTestingLevel;
	}
	
	/**
	 * Set RBQM custom testing level
	 * @param string $rbtCustomTestingLevel
	 */
	public function setRbtCustomTestingLevel($rbtCustomTestingLevel)
	{
		$validValues = array(
			'1-Full',
			'2-Partial',
			'3-Basic',
			'4-None',
		);
					
		if($rbtCustomTestingLevel instanceof QualityCenterExpression)
		{
			$rbtCustomTestingLevel->validateEnum('RbtCustomTestingLevel', $validValues);
		}			
		elseif(!in_array($rbtCustomTestingLevel, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtCustomTestingLevel] value [$rbtCustomTestingLevel] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtCustomTestingLevel, $validValues);
		}
		
		return $this->fields['rbt-custom-testing-level'] = $rbtCustomTestingLevel;
	}
	
	/**
	 * Get RBQM effective Functional Complexity
	 * @return string
	 */
	public function getRbtEffectiveFuncCmplx()
	{
		if(!isset($this->fields['rbt-effective-func-cmplx']))
			return null;
			
		$rbtEffectiveFuncCmplx = $this->fields['rbt-effective-func-cmplx'];
		return $rbtEffectiveFuncCmplx;
	}
	
	/**
	 * Set RBQM effective Functional Complexity
	 * @param string $rbtEffectiveFuncCmplx
	 */
	public function setRbtEffectiveFuncCmplx($rbtEffectiveFuncCmplx)
	{
		$validValues = array(
			'1',
			'2',
			'3',
		);
					
		if($rbtEffectiveFuncCmplx instanceof QualityCenterExpression)
		{
			$rbtEffectiveFuncCmplx->validateEnum('RbtEffectiveFuncCmplx', $validValues);
		}			
		elseif(!in_array($rbtEffectiveFuncCmplx, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtEffectiveFuncCmplx] value [$rbtEffectiveFuncCmplx] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtEffectiveFuncCmplx, $validValues);
		}
		
		return $this->fields['rbt-effective-func-cmplx'] = $rbtEffectiveFuncCmplx;
	}
	
	/**
	 * Get RBQM effective Risk
	 * @return string
	 */
	public function getRbtEffectiveRisk()
	{
		if(!isset($this->fields['rbt-effective-risk']))
			return null;
			
		$rbtEffectiveRisk = $this->fields['rbt-effective-risk'];
		return $rbtEffectiveRisk;
	}
	
	/**
	 * Set RBQM effective Risk
	 * @param string $rbtEffectiveRisk
	 */
	public function setRbtEffectiveRisk($rbtEffectiveRisk)
	{
		$validValues = array(
			'A',
			'B',
			'C',
		);
					
		if($rbtEffectiveRisk instanceof QualityCenterExpression)
		{
			$rbtEffectiveRisk->validateEnum('RbtEffectiveRisk', $validValues);
		}			
		elseif(!in_array($rbtEffectiveRisk, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtEffectiveRisk] value [$rbtEffectiveRisk] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtEffectiveRisk, $validValues);
		}
		
		return $this->fields['rbt-effective-risk'] = $rbtEffectiveRisk;
	}
	
	/**
	 * Get RBQM effective business impact
	 * @return string
	 */
	public function getRbtEffectiveBsnsImpact()
	{
		if(!isset($this->fields['rbt-effective-bsns-impact']))
			return null;
			
		$rbtEffectiveBsnsImpact = $this->fields['rbt-effective-bsns-impact'];
		return $rbtEffectiveBsnsImpact;
	}
	
	/**
	 * Set RBQM effective business impact
	 * @param string $rbtEffectiveBsnsImpact
	 */
	public function setRbtEffectiveBsnsImpact($rbtEffectiveBsnsImpact)
	{
		$validValues = array(
			'A',
			'B',
			'C',
		);
					
		if($rbtEffectiveBsnsImpact instanceof QualityCenterExpression)
		{
			$rbtEffectiveBsnsImpact->validateEnum('RbtEffectiveBsnsImpact', $validValues);
		}			
		elseif(!in_array($rbtEffectiveBsnsImpact, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtEffectiveBsnsImpact] value [$rbtEffectiveBsnsImpact] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtEffectiveBsnsImpact, $validValues);
		}
		
		return $this->fields['rbt-effective-bsns-impact'] = $rbtEffectiveBsnsImpact;
	}
	
	/**
	 * Get RBQM effective failure probability
	 * @return string
	 */
	public function getRbtEffectiveFailProb()
	{
		if(!isset($this->fields['rbt-effective-fail-prob']))
			return null;
			
		$rbtEffectiveFailProb = $this->fields['rbt-effective-fail-prob'];
		return $rbtEffectiveFailProb;
	}
	
	/**
	 * Set RBQM effective failure probability
	 * @param string $rbtEffectiveFailProb
	 */
	public function setRbtEffectiveFailProb($rbtEffectiveFailProb)
	{
		$validValues = array(
			'1',
			'2',
			'3',
		);
					
		if($rbtEffectiveFailProb instanceof QualityCenterExpression)
		{
			$rbtEffectiveFailProb->validateEnum('RbtEffectiveFailProb', $validValues);
		}			
		elseif(!in_array($rbtEffectiveFailProb, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtEffectiveFailProb] value [$rbtEffectiveFailProb] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtEffectiveFailProb, $validValues);
		}
		
		return $this->fields['rbt-effective-fail-prob'] = $rbtEffectiveFailProb;
	}
	
	/**
	 * Get RBQM estimated RnD effort
	 * @return string
	 */
	public function getRbtRndEstimEffortHours()
	{
		if(!isset($this->fields['rbt-rnd-estim-effort-hours']))
			return null;
			
		$rbtRndEstimEffortHours = $this->fields['rbt-rnd-estim-effort-hours'];
		return $rbtRndEstimEffortHours;
	}
	
	/**
	 * Set RBQM estimated RnD effort
	 * @param string $rbtRndEstimEffortHours
	 */
	public function setRbtRndEstimEffortHours($rbtRndEstimEffortHours)
	{
		return $this->fields['rbt-rnd-estim-effort-hours'] = $rbtRndEstimEffortHours;
	}
	
	/**
	 * Get RBQM failure probability
	 * @return string
	 */
	public function getRbtFailProb()
	{
		if(!isset($this->fields['rbt-fail-prob']))
			return null;
			
		$rbtFailProb = $this->fields['rbt-fail-prob'];
		return $rbtFailProb;
	}
	
	/**
	 * Set RBQM failure probability
	 * @param string $rbtFailProb
	 */
	public function setRbtFailProb($rbtFailProb)
	{
		$validValues = array(
			'1',
			'2',
			'3',
		);
					
		if($rbtFailProb instanceof QualityCenterExpression)
		{
			$rbtFailProb->validateEnum('RbtFailProb', $validValues);
		}			
		elseif(!in_array($rbtFailProb, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtFailProb] value [$rbtFailProb] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtFailProb, $validValues);
		}
		
		return $this->fields['rbt-fail-prob'] = $rbtFailProb;
	}
	
	/**
	 * Get RBQM testing hours
	 * @return string
	 */
	public function getRbtTestingHours()
	{
		if(!isset($this->fields['rbt-testing-hours']))
			return null;
			
		$rbtTestingHours = $this->fields['rbt-testing-hours'];
		return $rbtTestingHours;
	}
	
	/**
	 * Set RBQM testing hours
	 * @param string $rbtTestingHours
	 */
	public function setRbtTestingHours($rbtTestingHours)
	{
		return $this->fields['rbt-testing-hours'] = $rbtTestingHours;
	}
	
	/**
	 * Get RBQM testing level
	 * @return string
	 */
	public function getRbtTestingLevel()
	{
		if(!isset($this->fields['rbt-testing-level']))
			return null;
			
		$rbtTestingLevel = $this->fields['rbt-testing-level'];
		return $rbtTestingLevel;
	}
	
	/**
	 * Set RBQM testing level
	 * @param string $rbtTestingLevel
	 */
	public function setRbtTestingLevel($rbtTestingLevel)
	{
		$validValues = array(
			'1-Full',
			'2-Partial',
			'3-Basic',
			'4-None',
		);
					
		if($rbtTestingLevel instanceof QualityCenterExpression)
		{
			$rbtTestingLevel->validateEnum('RbtTestingLevel', $validValues);
		}			
		elseif(!in_array($rbtTestingLevel, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtTestingLevel] value [$rbtTestingLevel] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtTestingLevel, $validValues);
		}
		
		return $this->fields['rbt-testing-level'] = $rbtTestingLevel;
	}
	
	/**
	 * Get RBQM use custom Functional Complexity
	 * @return string
	 */
	public function getRbtUseCustomFuncCmplx()
	{
		if(!isset($this->fields['rbt-use-custom-func-cmplx']))
			return null;
			
		$rbtUseCustomFuncCmplx = $this->fields['rbt-use-custom-func-cmplx'];
		return $rbtUseCustomFuncCmplx;
	}
	
	/**
	 * Set RBQM use custom Functional Complexity
	 * @param string $rbtUseCustomFuncCmplx
	 */
	public function setRbtUseCustomFuncCmplx($rbtUseCustomFuncCmplx)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($rbtUseCustomFuncCmplx instanceof QualityCenterExpression)
		{
			$rbtUseCustomFuncCmplx->validateEnum('RbtUseCustomFuncCmplx', $validValues);
		}			
		elseif(!in_array($rbtUseCustomFuncCmplx, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtUseCustomFuncCmplx] value [$rbtUseCustomFuncCmplx] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtUseCustomFuncCmplx, $validValues);
		}
		
		return $this->fields['rbt-use-custom-func-cmplx'] = $rbtUseCustomFuncCmplx;
	}
	
	/**
	 * Get RBQM use custom Risk
	 * @return string
	 */
	public function getRbtUseCustomRisk()
	{
		if(!isset($this->fields['rbt-use-custom-risk']))
			return null;
			
		$rbtUseCustomRisk = $this->fields['rbt-use-custom-risk'];
		return $rbtUseCustomRisk;
	}
	
	/**
	 * Set RBQM use custom Risk
	 * @param string $rbtUseCustomRisk
	 */
	public function setRbtUseCustomRisk($rbtUseCustomRisk)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($rbtUseCustomRisk instanceof QualityCenterExpression)
		{
			$rbtUseCustomRisk->validateEnum('RbtUseCustomRisk', $validValues);
		}			
		elseif(!in_array($rbtUseCustomRisk, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtUseCustomRisk] value [$rbtUseCustomRisk] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtUseCustomRisk, $validValues);
		}
		
		return $this->fields['rbt-use-custom-risk'] = $rbtUseCustomRisk;
	}
	
	/**
	 * Get RBQM use custom business impact
	 * @return string
	 */
	public function getRbtUseCustomBsnsImpact()
	{
		if(!isset($this->fields['rbt-use-custom-bsns-impact']))
			return null;
			
		$rbtUseCustomBsnsImpact = $this->fields['rbt-use-custom-bsns-impact'];
		return $rbtUseCustomBsnsImpact;
	}
	
	/**
	 * Set RBQM use custom business impact
	 * @param string $rbtUseCustomBsnsImpact
	 */
	public function setRbtUseCustomBsnsImpact($rbtUseCustomBsnsImpact)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($rbtUseCustomBsnsImpact instanceof QualityCenterExpression)
		{
			$rbtUseCustomBsnsImpact->validateEnum('RbtUseCustomBsnsImpact', $validValues);
		}			
		elseif(!in_array($rbtUseCustomBsnsImpact, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtUseCustomBsnsImpact] value [$rbtUseCustomBsnsImpact] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtUseCustomBsnsImpact, $validValues);
		}
		
		return $this->fields['rbt-use-custom-bsns-impact'] = $rbtUseCustomBsnsImpact;
	}
	
	/**
	 * Get RBQM use custom failure probability
	 * @return string
	 */
	public function getRbtUseCustomFailProb()
	{
		if(!isset($this->fields['rbt-use-custom-fail-prob']))
			return null;
			
		$rbtUseCustomFailProb = $this->fields['rbt-use-custom-fail-prob'];
		return $rbtUseCustomFailProb;
	}
	
	/**
	 * Set RBQM use custom failure probability
	 * @param string $rbtUseCustomFailProb
	 */
	public function setRbtUseCustomFailProb($rbtUseCustomFailProb)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($rbtUseCustomFailProb instanceof QualityCenterExpression)
		{
			$rbtUseCustomFailProb->validateEnum('RbtUseCustomFailProb', $validValues);
		}			
		elseif(!in_array($rbtUseCustomFailProb, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtUseCustomFailProb] value [$rbtUseCustomFailProb] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtUseCustomFailProb, $validValues);
		}
		
		return $this->fields['rbt-use-custom-fail-prob'] = $rbtUseCustomFailProb;
	}
	
	/**
	 * Get RBQM use custom results
	 * @return string
	 */
	public function getRbtUseCustomTlAndTe()
	{
		if(!isset($this->fields['rbt-use-custom-tl-and-te']))
			return null;
			
		$rbtUseCustomTlAndTe = $this->fields['rbt-use-custom-tl-and-te'];
		return $rbtUseCustomTlAndTe;
	}
	
	/**
	 * Set RBQM use custom results
	 * @param string $rbtUseCustomTlAndTe
	 */
	public function setRbtUseCustomTlAndTe($rbtUseCustomTlAndTe)
	{
		$validValues = array(
			'N',
			'Y',
		);
					
		if($rbtUseCustomTlAndTe instanceof QualityCenterExpression)
		{
			$rbtUseCustomTlAndTe->validateEnum('RbtUseCustomTlAndTe', $validValues);
		}			
		elseif(!in_array($rbtUseCustomTlAndTe, $validValues))
		{
			throw new QualityCenterInputException("Input [RbtUseCustomTlAndTe] value [$rbtUseCustomTlAndTe] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $rbtUseCustomTlAndTe, $validValues);
		}
		
		return $this->fields['rbt-use-custom-tl-and-te'] = $rbtUseCustomTlAndTe;
	}
	
	/**
	 * Get Req Father ID
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
	 * Set Req Father ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Req ID
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
	 * Set Req ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Req Order ID
	 * @return string
	 */
	public function getOrderId()
	{
		if(!isset($this->fields['order-id']))
			return null;
			
		$orderId = $this->fields['order-id'];
		return $orderId;
	}
	
	/**
	 * Set Req Order ID
	 * @param string $orderId
	 */
	public function setOrderId($orderId)
	{
		return $this->fields['order-id'] = $orderId;
	}
	
	/**
	 * Get Req Parent
	 * @return string
	 */
	public function getFatherName()
	{
		if(!isset($this->fields['father-name']))
			return null;
			
		$fatherName = $this->fields['father-name'];
		return $fatherName;
	}
	
	/**
	 * Set Req Parent
	 * @param string $fatherName
	 */
	public function setFatherName($fatherName)
	{
		if(strlen($fatherName) > 99999)
			throw new QualityCenterInputException("Input [FatherName] value [$fatherName] excceeded maximum length [99999]", QualityCenterInputException::SIZE, strlen($fatherName), 99999);
		
		return $this->fields['father-name'] = $fatherName;
	}
	
	/**
	 * Get Req Path
	 * @return string
	 */
	public function getHierarchicalPath()
	{
		if(!isset($this->fields['hierarchical-path']))
			return null;
			
		$hierarchicalPath = $this->fields['hierarchical-path'];
		return $hierarchicalPath;
	}
	
	/**
	 * Set Req Path
	 * @param string $hierarchicalPath
	 */
	public function setHierarchicalPath($hierarchicalPath)
	{
		if(strlen($hierarchicalPath) > 255)
			throw new QualityCenterInputException("Input [HierarchicalPath] value [$hierarchicalPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($hierarchicalPath), 255);
		
		return $this->fields['hierarchical-path'] = $hierarchicalPath;
	}
	
	/**
	 * Get Requirement Type
	 * @return string
	 */
	public function getTypeId()
	{
		if(!isset($this->fields['type-id']))
			return null;
			
		$typeId = $this->fields['type-id'];
		return $typeId;
	}
	
	/**
	 * Set Requirement Type
	 * @param string $typeId
	 */
	public function setTypeId($typeId)
	{
		return $this->fields['type-id'] = $typeId;
	}
	
	/**
	 * Get Reviewed
	 * @return string
	 */
	public function getReqReviewed()
	{
		if(!isset($this->fields['req-reviewed']))
			return null;
			
		$reqReviewed = $this->fields['req-reviewed'];
		return $reqReviewed;
	}
	
	/**
	 * Set Reviewed
	 * @param string $reqReviewed
	 */
	public function setReqReviewed($reqReviewed)
	{
		$validValues = array(
			'Not Reviewed',
			'Reviewed',
		);
					
		if($reqReviewed instanceof QualityCenterExpression)
		{
			$reqReviewed->validateEnum('ReqReviewed', $validValues);
		}			
		elseif(!in_array($reqReviewed, $validValues))
		{
			throw new QualityCenterInputException("Input [ReqReviewed] value [$reqReviewed] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $reqReviewed, $validValues);
		}
		
		return $this->fields['req-reviewed'] = $reqReviewed;
	}
	
	/**
	 * Get Rich Text
	 * @return string
	 */
	public function getReqRichContent()
	{
		if(!isset($this->fields['req-rich-content']))
			return null;
			
		$reqRichContent = $this->fields['req-rich-content'];
		return $reqRichContent;
	}
	
	/**
	 * Set Rich Text
	 * @param string $reqRichContent
	 */
	public function setReqRichContent($reqRichContent)
	{
		return $this->fields['req-rich-content'] = $reqRichContent;
	}
	
	/**
	 * Get Target Cycle
	 * @return string
	 */
	public function getTargetRcyc()
	{
		if(!isset($this->fields['target-rcyc']))
			return null;
			
		$targetRcyc = $this->fields['target-rcyc'];
		return $targetRcyc;
	}
	
	/**
	 * Set Target Cycle
	 * @param string $targetRcyc
	 */
	public function setTargetRcyc($targetRcyc)
	{
		return $this->fields['target-rcyc'] = $targetRcyc;
	}
	
	/**
	 * Get Target Release
	 * @return string
	 */
	public function getTargetRel()
	{
		if(!isset($this->fields['target-rel']))
			return null;
			
		$targetRel = $this->fields['target-rel'];
		return $targetRel;
	}
	
	/**
	 * Set Target Release
	 * @param string $targetRel
	 */
	public function setTargetRel($targetRel)
	{
		return $this->fields['target-rel'] = $targetRel;
	}
	
	/**
	 * Get Version
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
	 * Set Version
	 * @param string $user01
	 */
	public function setUser01($user01)
	{
		$validValues = array(
			'Eagle',
			'Falcon',
			'Gemini',
			'Post Eagle',
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
	 * @return mixed
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
	 * @param mixed $vcCheckinDate
	 */
	public function setVcCheckinDate($vcCheckinDate)
	{
		if(is_int($vcCheckinDate))
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
	 * Get Version Check Out Comments
	 * @return string
	 */
	public function getVcCheckoutComments()
	{
		if(!isset($this->fields['vc-checkout-comments']))
			return null;
			
		$vcCheckoutComments = $this->fields['vc-checkout-comments'];
		return $vcCheckoutComments;
	}
	
	/**
	 * Set Version Check Out Comments
	 * @param string $vcCheckoutComments
	 */
	public function setVcCheckoutComments($vcCheckoutComments)
	{
		return $this->fields['vc-checkout-comments'] = $vcCheckoutComments;
	}
	
	/**
	 * Get Version Check Out Date as linux timestamp
	 * @return mixed
	 */
	public function getVcCheckoutDate()
	{
		if(!isset($this->fields['vc-checkout-date']))
			return null;
			
		$vcCheckoutDate = $this->fields['vc-checkout-date'];
		$vcCheckoutDateDate = date_parse_from_format('Y-m-d', $vcCheckoutDate);
		$vcCheckoutDate = mktime(0, 0, 0, $vcCheckoutDateDate['month'], $vcCheckoutDateDate['day'], $vcCheckoutDateDate['year']);
		
		return $vcCheckoutDate;
	}
	
	/**
	 * Set Version Check Out Date as linux timestamp
	 * @param mixed $vcCheckoutDate
	 */
	public function setVcCheckoutDate($vcCheckoutDate)
	{
		if(is_int($vcCheckoutDate))
			$vcCheckoutDate = date('Y-m-d', $vcCheckoutDate);
		return $this->fields['vc-checkout-date'] = $vcCheckoutDate;
	}
	
	/**
	 * Get Version Check Out Time
	 * @return string
	 */
	public function getVcCheckoutTime()
	{
		if(!isset($this->fields['vc-checkout-time']))
			return null;
			
		$vcCheckoutTime = $this->fields['vc-checkout-time'];
		return $vcCheckoutTime;
	}
	
	/**
	 * Set Version Check Out Time
	 * @param string $vcCheckoutTime
	 */
	public function setVcCheckoutTime($vcCheckoutTime)
	{
		if(strlen($vcCheckoutTime) > 10)
			throw new QualityCenterInputException("Input [VcCheckoutTime] value [$vcCheckoutTime] excceeded maximum length [10]", QualityCenterInputException::SIZE, strlen($vcCheckoutTime), 10);
		
		return $this->fields['vc-checkout-time'] = $vcCheckoutTime;
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
	 * Get Version Checked Out By
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
	 * Set Version Checked Out By
	 * @param string $checkOutUserName
	 */
	public function setCheckOutUserName($checkOutUserName)
	{
		return $this->fields['check-out-user-name'] = $checkOutUserName;
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
					
		if($vcStatus instanceof QualityCenterExpression)
		{
			$vcStatus->validateEnum('VcStatus', $validValues);
		}			
		elseif(!in_array($vcStatus, $validValues))
		{
			throw new QualityCenterInputException("Input [VcStatus] value [$vcStatus] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $vcStatus, $validValues);
		}
		
		return $this->fields['vc-status'] = $vcStatus;
	}
	
	/**
	 * Get 
	 * @return string
	 */
	public function getReqVerStamp()
	{
		if(!isset($this->fields['req-ver-stamp']))
			return null;
			
		$reqVerStamp = $this->fields['req-ver-stamp'];
		return $reqVerStamp;
	}
	
	/**
	 * Set 
	 * @param string $reqVerStamp
	 */
	public function setReqVerStamp($reqVerStamp)
	{
		return $this->fields['req-ver-stamp'] = $reqVerStamp;
	}
	
}
