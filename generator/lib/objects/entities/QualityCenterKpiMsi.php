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
class QualityCenterKpiMsi extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'kpiMsi';
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
	 * Get Is Active
	 * @return string
	 */
	public function getIsActive()
	{
		if(!isset($this->fields['is-active']))
			return null;
			
		$isActive = $this->fields['is-active'];
		return $isActive;
	}
	
	/**
	 * Set Is Active
	 * @param string $isActive
	 */
	public function setIsActive($isActive)
	{
		if(strlen($isActive) > 1)
			throw new QualityCenterInputException("Input [IsActive] value [$isActive] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isActive), 1);
		
		return $this->fields['is-active'] = $isActive;
	}
	
	/**
	 * Get Is Custom Threshold
	 * @return string
	 */
	public function getIsThresholdCustom()
	{
		if(!isset($this->fields['is-threshold-custom']))
			return null;
			
		$isThresholdCustom = $this->fields['is-threshold-custom'];
		return $isThresholdCustom;
	}
	
	/**
	 * Set Is Custom Threshold
	 * @param string $isThresholdCustom
	 */
	public function setIsThresholdCustom($isThresholdCustom)
	{
		if(strlen($isThresholdCustom) > 1)
			throw new QualityCenterInputException("Input [IsThresholdCustom] value [$isThresholdCustom] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isThresholdCustom), 1);
		
		return $this->fields['is-threshold-custom'] = $isThresholdCustom;
	}
	
	/**
	 * Get KPI Id
	 * @return string
	 */
	public function getKpiId()
	{
		if(!isset($this->fields['kpi-id']))
			return null;
			
		$kpiId = $this->fields['kpi-id'];
		return $kpiId;
	}
	
	/**
	 * Set KPI Id
	 * @param string $kpiId
	 */
	public function setKpiId($kpiId)
	{
		return $this->fields['kpi-id'] = $kpiId;
	}
	
	/**
	 * Get MilestoneScopeItem Id
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
	 * Set MilestoneScopeItem Id
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
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
