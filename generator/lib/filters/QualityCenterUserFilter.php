<?php
/**
 * @package External
 * @subpackage qc.filters
 */
require_once __DIR__ . '/QualityCenterFilter.php';
require_once __DIR__ . '/expressions/QualityCenterExpression.php';
require_once __DIR__ . '/../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterUserFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'name',
		);
	}
	
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		if(!isset($this->fields['name']))
			return null;
			
		return $this->fields['name'];
	}
	
	/**
	 * Set Name
	 * @param string $name
	 */
	public function setName($name)
	{
		return $this->fields['name'] = $name;
	}
}
