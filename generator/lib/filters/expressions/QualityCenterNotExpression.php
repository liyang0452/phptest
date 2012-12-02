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
class QualityCenterNotExpression extends QualityCenterExpression
{
	/**
	 * @var string
	 */
	protected $value;
	
	/**
	 * @var string $value
	 */
	public function __construct($value)
	{
		$this->value = $value;
	}
	
	/**
	 * @return string
	 */
	public function __toString()
	{
		if(is_string($this->value) && strpos($this->value, ' ') > 0)
			$this->value = "'$this->value'";
			
		return "Not ($this->value)";
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterExpression::validate()
	 */
	public function validateEnum($field, array $validValues)
	{
		if($this->value instanceof QualityCenterExpression)
		{
			$this->value->validateEnum($field, $validValues);
		}
		elseif(!in_array($this->value, $validValues))
		{
			throw new QualityCenterInputException("Input [$field] value [$this->value] is not acceptable value, supported list [" . print_r($validValues, true) . "]", QualityCenterInputException::INVALID_ENUM, $this->value, $validValues);
		}
	}
}
