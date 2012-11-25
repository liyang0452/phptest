<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterConnection.php';

/**
 * @package External
 * @subpackage qc.services
 */
abstract class QualityCenterService
{
	/**
	 * @var QualityCenterConnection
	 */
	protected $connection;
	
	/**
	 * @var string
	 */
	protected $domain;
	
	/**
	 * @var string
	 */
	protected $project;
	
	/**
	 * @param QualityCenterConnection $connection
	 * @param string $domain
	 * @param string $project
	 */
	public function __construct(QualityCenterConnection $connection, $domain, $project)
	{
		$this->connection = $connection;
		$this->domain = $domain;
		$this->project = $project;		
	}
}
