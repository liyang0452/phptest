<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/QualityCenterException.php';

/**
 * @package External
 * @subpackage qc.exception
 */
class QualityCenterServerException extends QualityCenterException
{
	/**
	 * @var string
	 */
	private $serverStackTrace;
	
	public function __construct ($message, $code, $serverStackTrace)
	{
		parent::__construct($message, $code);
		$this->serverStackTrace = $serverStackTrace;
	}
	
	/**
	 * @return string $serverStackTrace
	 */
	public function getServerStackTrace()
	{
		return $this->serverStackTrace;
	}
}