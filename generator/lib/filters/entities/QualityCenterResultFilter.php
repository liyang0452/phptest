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
class QualityCenterResultFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'description',
			'id',
			'last-modified',
			'modified-by',
			'name',
			'run-id',
			'type',
			'ver-stamp',
		);
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
	 * Get Id
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
	 * Set Id
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
	 * Get Modified by
	 * @return string
	 */
	public function getModifiedBy()
	{
		if(!isset($this->fields['modified-by']))
			return null;
			
		$modifiedBy = $this->fields['modified-by'];
		return $modifiedBy;
	}
	
	/**
	 * Set Modified by
	 * @param string $modifiedBy
	 */
	public function setModifiedBy($modifiedBy)
	{
		if(strlen($modifiedBy) > 60)
			throw new QualityCenterInputException("Input [ModifiedBy] value [$modifiedBy] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($modifiedBy), 60);
		
		return $this->fields['modified-by'] = $modifiedBy;
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
	 * Get Owner Run id
	 * @return string
	 */
	public function getRunId()
	{
		if(!isset($this->fields['run-id']))
			return null;
			
		$runId = $this->fields['run-id'];
		return $runId;
	}
	
	/**
	 * Set Owner Run id
	 * @param string $runId
	 */
	public function setRunId($runId)
	{
		return $this->fields['run-id'] = $runId;
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
		$validValues = array(
			'Default',
			'Sprinter',
		);
		if(!in_array($type, $validValues))
			throw new QualityCenterInputException("Input [Type] value [$type] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $type, $validValues);
		
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
	
}
