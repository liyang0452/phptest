<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';
require_once __DIR__ . '/../../filters/expressions/QualityCenterExpression.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class QualityCenterMilestone extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'milestone';
	}
	
	/**
	 * Get Attachment
	 * @return string
	 */
	public function getHasAttachments()
	{
		if(!isset($this->fields['has-attachments']))
			return null;
			
		$hasAttachments = $this->fields['has-attachments'];
		return $hasAttachments;
	}
	
	/**
	 * Set Attachment
	 * @param string $hasAttachments
	 */
	public function setHasAttachments($hasAttachments)
	{
		if(strlen($hasAttachments) > 1)
			throw new QualityCenterInputException("Input [HasAttachments] value [$hasAttachments] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasAttachments), 1);
		
		return $this->fields['has-attachments'] = $hasAttachments;
	}
	
	/**
	 * Get Count of KPIs links in a milestone
	 * @return string
	 */
	public function getKpisCount()
	{
		if(!isset($this->fields['kpis-count']))
			return null;
			
		$kpisCount = $this->fields['kpis-count'];
		return $kpisCount;
	}
	
	/**
	 * Set Count of KPIs links in a milestone
	 * @param string $kpisCount
	 */
	public function setKpisCount($kpisCount)
	{
		if(strlen($kpisCount) > 1)
			throw new QualityCenterInputException("Input [KpisCount] value [$kpisCount] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($kpisCount), 1);
		
		return $this->fields['kpis-count'] = $kpisCount;
	}
	
	/**
	 * Get Count of milestone-scope item links in a milestone
	 * @return string
	 */
	public function getMilestoneScopeitemCount()
	{
		if(!isset($this->fields['milestone-scopeitem-count']))
			return null;
			
		$milestoneScopeitemCount = $this->fields['milestone-scopeitem-count'];
		return $milestoneScopeitemCount;
	}
	
	/**
	 * Set Count of milestone-scope item links in a milestone
	 * @param string $milestoneScopeitemCount
	 */
	public function setMilestoneScopeitemCount($milestoneScopeitemCount)
	{
		if(strlen($milestoneScopeitemCount) > 1)
			throw new QualityCenterInputException("Input [MilestoneScopeitemCount] value [$milestoneScopeitemCount] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($milestoneScopeitemCount), 1);
		
		return $this->fields['milestone-scopeitem-count'] = $milestoneScopeitemCount;
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
	 * Get Due Date as linux timestamp
	 * @return int
	 */
	public function getDueDate()
	{
		if(!isset($this->fields['due-date']))
			return null;
			
		$dueDate = $this->fields['due-date'];
		$dueDateDate = date_parse_from_format('Y-m-d', $dueDate);
		$dueDate = mktime(0, 0, 0, $dueDateDate['month'], $dueDateDate['day'], $dueDateDate['year']);
		
		return $dueDate;
	}
	
	/**
	 * Set Due Date as linux timestamp
	 * @param int $dueDate
	 */
	public function setDueDate($dueDate)
	{
		$dueDate = date('Y-m-d', $dueDate);
		return $this->fields['due-date'] = $dueDate;
	}
	
	/**
	 * Get Milestone ID
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
	 * Set Milestone ID
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
	 * Get Parent (Release) ID
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
	 * Set Parent (Release) ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Start Tracking Date as linux timestamp
	 * @return int
	 */
	public function getStartDate()
	{
		if(!isset($this->fields['start-date']))
			return null;
			
		$startDate = $this->fields['start-date'];
		$startDateDate = date_parse_from_format('Y-m-d', $startDate);
		$startDate = mktime(0, 0, 0, $startDateDate['month'], $startDateDate['day'], $startDateDate['year']);
		
		return $startDate;
	}
	
	/**
	 * Set Start Tracking Date as linux timestamp
	 * @param int $startDate
	 */
	public function setStartDate($startDate)
	{
		$startDate = date('Y-m-d', $startDate);
		return $this->fields['start-date'] = $startDate;
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
