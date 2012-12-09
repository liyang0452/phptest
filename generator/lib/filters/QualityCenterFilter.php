<?php
/**
 * @package External
 * @subpackage qc.filters
 */
abstract class QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected $fields = array();
	
	/**
	 * @var array
	 */
	abstract protected function _getValidFields();
	
	public function fromArray($values)
	{
		$validFields = $this->_getValidFields();
		foreach($validFields as $field)
		{
			if(!isset($values[$field]))
				continue;
				
			$this->fields[$field] = $values[$field];
		}
	}
	
	public function __toString()
	{
		$ret = array();
		foreach($this->fields as $field => $defaultValue)
		{
			if(is_null($this->fields[$field]))
				continue;
				
			$value = $this->fields[$field];
			if(is_string($value) && strpos($value, ' ') > 0)
				$value = "'$value'";
				
			$ret[] = "{$field}[{$value}]";
		}
		return implode('; ', $ret);
	}
}
