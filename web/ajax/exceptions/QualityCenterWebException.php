<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/../../../generator/lib/exceptions/QualityCenterException.php";

/**
 * @package External
 * @subpackage qc.exception
 */
class QualityCenterWebException extends QualityCenterException
{
	public function __construct ($message, $code, $previous = null)
	{
		header("HTTP/1.0 500 $message");
		header("Status: 500 $message");
		header("X-QualityCenterWebException: $code");
		
		parent::__construct($message, $code, $previous);
	}
}