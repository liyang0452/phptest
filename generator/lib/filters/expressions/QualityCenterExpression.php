<?php
/**
 * @package External
 * @subpackage qc.filters
 */
abstract class QualityCenterExpression
{
	/**
	 * @param string $field
	 * @param array $validValues
	 * @throws QualityCenterInputException
	 */
	abstract public function validateEnum($field, array $validValues);
}
