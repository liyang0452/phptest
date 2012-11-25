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
class QualityCenterDesignStepFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'attachment',
			'description',
			'expected',
			'has-params',
			'link-test',
			'vts',
			'id',
			'step-name',
			'step-order',
			'parent-id',
			'vc-user-name',
			'ver-stamp',
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
	 * Get Expected Result
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
	 * Set Expected Result
	 * @param string $expected
	 */
	public function setExpected($expected)
	{
		return $this->fields['expected'] = $expected;
	}
	
	/**
	 * Get Has Params
	 * @return string
	 */
	public function getHasParams()
	{
		if(!isset($this->fields['has-params']))
			return null;
			
		$hasParams = $this->fields['has-params'];
		return $hasParams;
	}
	
	/**
	 * Set Has Params
	 * @param string $hasParams
	 */
	public function setHasParams($hasParams)
	{
		if(strlen($hasParams) > 1)
			throw new QualityCenterInputException("Input [HasParams] value [$hasParams] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasParams), 1);
		
		return $this->fields['has-params'] = $hasParams;
	}
	
	/**
	 * Get Link Test
	 * @return string
	 */
	public function getLinkTest()
	{
		if(!isset($this->fields['link-test']))
			return null;
			
		$linkTest = $this->fields['link-test'];
		return $linkTest;
	}
	
	/**
	 * Set Link Test
	 * @param string $linkTest
	 */
	public function setLinkTest($linkTest)
	{
		return $this->fields['link-test'] = $linkTest;
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
	public function getStepName()
	{
		if(!isset($this->fields['step-name']))
			return null;
			
		$stepName = $this->fields['step-name'];
		return $stepName;
	}
	
	/**
	 * Set Step Name
	 * @param string $stepName
	 */
	public function setStepName($stepName)
	{
		if(strlen($stepName) > 255)
			throw new QualityCenterInputException("Input [StepName] value [$stepName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($stepName), 255);
		
		return $this->fields['step-name'] = $stepName;
	}
	
	/**
	 * Get Step#
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
	 * Set Step#
	 * @param string $stepOrder
	 */
	public function setStepOrder($stepOrder)
	{
		return $this->fields['step-order'] = $stepOrder;
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
	public function getVcUserName()
	{
		if(!isset($this->fields['vc-user-name']))
			return null;
			
		$vcUserName = $this->fields['vc-user-name'];
		return $vcUserName;
	}
	
	/**
	 * Set Version Checked Out By
	 * @param string $vcUserName
	 */
	public function setVcUserName($vcUserName)
	{
		return $this->fields['vc-user-name'] = $vcUserName;
	}
	
	/**
	 * Get 
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
	 * Set 
	 * @param string $verStamp
	 */
	public function setVerStamp($verStamp)
	{
		return $this->fields['ver-stamp'] = $verStamp;
	}
	
}
