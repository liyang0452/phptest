<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/QualityCenterWebException.php";

/**
 * @package External
 * @subpackage qc.exception
 */
class QualityCenterSessionException extends QualityCenterWebException
{
	const NO_SESSION = 'NO_SESSION';
	const LOGIN_FAILED = 'LOGIN_FAILED';
}