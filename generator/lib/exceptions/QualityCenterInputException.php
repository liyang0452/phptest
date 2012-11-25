<?php
/**
 * @package External
 * @subpackage qc.exception
 */
class QualityCenterInputException extends QualityCenterException
{
	const SIZE = 'SIZE';
	const INVALID_ENUM = 'INVALID_ENUM';
	
	private $actual;
	
	private $expected;
	
	public function __construct($message, $code, $actual, $expected)
	{
		parent::__construct($message, $code);
		$this->actual = $actual;
		$this->expected = $expected;
	}
	
	/**
	 * @return mixed $actual
	 */
	public function getActual()
	{
		return $this->actual;
	}

	/**
	 * @return mixed $expected
	 */
	public function getExpected()
	{
		return $this->expected;
	}
}