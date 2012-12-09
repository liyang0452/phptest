<?php
/**
 * @package External
 * @subpackage qc.exception
 */
class QualityCenterException extends Exception
{
	public function __construct ($message = null, $code = null, $previous = null)
	{
		parent::__construct($message, null, $previous);
		$this->code = $code;
	}
}