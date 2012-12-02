<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/QualityCenterExpression.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterInExpression extends QualityCenterExpression
{
	/**
	 * @var array
	 */
	protected $values;
	
	/**
	 * @var array $values
	 */
	public function __construct(array $values)
	{
		$this->values = $values;
	}
	
	/**
	 * @return string
	 */
	public function __toString()
	{
		$ret = array();
		foreach($this->values as $value)
		{
			if(is_string($value) && strpos($value, ' ') > 0)
				$value = "'$value'";
				
			$ret[] = "$value";
		}
		return implode(' Or ', $ret);
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterExpression::validate()
	 */
	public function validateEnum($field, array $validValues)
	{
		foreach($this->values as $value)
		{
			if($value instanceof QualityCenterExpression)
			{
				$value->validateEnum($field, $validValues);
			}
			elseif(!in_array($value, $validValues))
			{
				throw new QualityCenterInputException("Input [$field] value [$value] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $value, $validValues);
			}
		}
	}
}
