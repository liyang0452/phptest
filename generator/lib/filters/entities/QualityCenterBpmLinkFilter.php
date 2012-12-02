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
class QualityCenterBpmLinkFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'first-endpoint-id',
			'id',
			'second-endpoint-id',
		);
	}
	
	/**
	 * Get From Requirement ID
	 * @return string
	 */
	public function getFirstEndpointId()
	{
		if(!isset($this->fields['first-endpoint-id']))
			return null;
			
		$firstEndpointId = $this->fields['first-endpoint-id'];
		return $firstEndpointId;
	}
	
	/**
	 * Set From Requirement ID
	 * @param string $firstEndpointId
	 */
	public function setFirstEndpointId($firstEndpointId)
	{
		return $this->fields['first-endpoint-id'] = $firstEndpointId;
	}
	
	/**
	 * Get Link ID
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
	 * Set Link ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get To Requirement ID
	 * @return string
	 */
	public function getSecondEndpointId()
	{
		if(!isset($this->fields['second-endpoint-id']))
			return null;
			
		$secondEndpointId = $this->fields['second-endpoint-id'];
		return $secondEndpointId;
	}
	
	/**
	 * Set To Requirement ID
	 * @param string $secondEndpointId
	 */
	public function setSecondEndpointId($secondEndpointId)
	{
		return $this->fields['second-endpoint-id'] = $secondEndpointId;
	}
	
}
