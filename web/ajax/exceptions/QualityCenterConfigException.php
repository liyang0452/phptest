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
class QualityCenterConfigException extends QualityCenterWebException
{
	const NO_FILE_FOUND = 'NO_FILE_FOUND';
	const MISSING_VALUE = 'MISSING_VALUE';
	const INVALID_FORMAT = 'INVALID_FORMAT';
}