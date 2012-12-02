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
class QualityCenterAnalysisItemResult extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'analysis-item-result';
	}
	
	/**
	 * Get Context key
	 * @return string
	 */
	public function getContextKey()
	{
		if(!isset($this->fields['context-key']))
			return null;
			
		$contextKey = $this->fields['context-key'];
		return $contextKey;
	}
	
	/**
	 * Set Context key
	 * @param string $contextKey
	 */
	public function setContextKey($contextKey)
	{
		if(strlen($contextKey) > 36)
			throw new QualityCenterInputException("Input [ContextKey] value [$contextKey] excceeded maximum length [36]", QualityCenterInputException::SIZE, strlen($contextKey), 36);
		
		return $this->fields['context-key'] = $contextKey;
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
	 * Get Owner ID
	 * @return string
	 */
	public function getAnalysisItemId()
	{
		if(!isset($this->fields['analysis-item-id']))
			return null;
			
		$analysisItemId = $this->fields['analysis-item-id'];
		return $analysisItemId;
	}
	
	/**
	 * Set Owner ID
	 * @param string $analysisItemId
	 */
	public function setAnalysisItemId($analysisItemId)
	{
		return $this->fields['analysis-item-id'] = $analysisItemId;
	}
	
	/**
	 * Get Owner Version Stamp
	 * @return string
	 */
	public function getAnalysisItemVerStamp()
	{
		if(!isset($this->fields['analysis-item-ver-stamp']))
			return null;
			
		$analysisItemVerStamp = $this->fields['analysis-item-ver-stamp'];
		return $analysisItemVerStamp;
	}
	
	/**
	 * Set Owner Version Stamp
	 * @param string $analysisItemVerStamp
	 */
	public function setAnalysisItemVerStamp($analysisItemVerStamp)
	{
		return $this->fields['analysis-item-ver-stamp'] = $analysisItemVerStamp;
	}
	
	/**
	 * Get Result data
	 * @return string
	 */
	public function getData()
	{
		if(!isset($this->fields['data']))
			return null;
			
		$data = $this->fields['data'];
		return $data;
	}
	
	/**
	 * Set Result data
	 * @param string $data
	 */
	public function setData($data)
	{
		return $this->fields['data'] = $data;
	}
	
	/**
	 * Get Result expiration date.
	 * @return string
	 */
	public function getExpirationDate()
	{
		if(!isset($this->fields['expiration-date']))
			return null;
			
		$expirationDate = $this->fields['expiration-date'];
		return $expirationDate;
	}
	
	/**
	 * Set Result expiration date.
	 * @param string $expirationDate
	 */
	public function setExpirationDate($expirationDate)
	{
		return $this->fields['expiration-date'] = $expirationDate;
	}
	
}
