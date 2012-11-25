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
class QualityCenterReportUserTemplateFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'field-list',
			'name',
			'id',
			'owner',
			'type',
		);
	}
	
	/**
	 * Get User Field List
	 * @return string
	 */
	public function getFieldList()
	{
		if(!isset($this->fields['field-list']))
			return null;
			
		$fieldList = $this->fields['field-list'];
		return $fieldList;
	}
	
	/**
	 * Set User Field List
	 * @param string $fieldList
	 */
	public function setFieldList($fieldList)
	{
		return $this->fields['field-list'] = $fieldList;
	}
	
	/**
	 * Get User Template File Name
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
	 * Set User Template File Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get User Template ID
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
	 * Set User Template ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get User Template ID
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
	 * Set User Template ID
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get User Template Type
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
	 * Set User Template Type
	 * @param string $type
	 */
	public function setType($type)
	{
		if(strlen($type) > 40)
			throw new QualityCenterInputException("Input [Type] value [$type] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($type), 40);
		
		return $this->fields['type'] = $type;
	}
	
}
