<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . "/../../../generator/lib/QualityCenterConnection.php";
require_once __DIR__ . "/../exceptions/QualityCenterConfigException.php";
require_once __DIR__ . "/../exceptions/QualityCenterSessionException.php";

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterSession
{
	/**
	 * @var string
	 */
	protected $server;
	
	/**
	 * @var int
	 */
	protected $port;
	
	/**
	 * @var string
	 */
	protected $username;
	
	/**
	 * @var string
	 */
	protected $domain;
	
	/**
	 * @var string
	 */
	protected $project;
	
	/**
	 * @var string
	 */
	protected $timeZone = 'America/New_York';
	
	/**
	 * @var array
	 */
	protected $cookies;
	
	/**
	 * @var QualityCenterSession
	 */
	private static $session;
	
	/**
	 * @var array
	 */
	private static $config;
	
	protected function __construct()
	{
	}
	
	protected static function initSession()
	{
		session_start();
		
		if(isset($_SESSION['QualityCenterSession']))
		{
			self::$session = $_SESSION['QualityCenterSession'];
			if(self::$session instanceof QualityCenterSession)
			{
				$connection = QualityCenterConnection::getInstance(self::$session->server, self::$session->port, self::$session->username);
				$connection->setCookies(self::$session->cookies);
				return;
			}
		}
	
		self::$session = new QualityCenterSession();
		if(!isset(self::$config['server']))
			throw new QualityCenterConfigException("Missing server configuration", QualityCenterConfigException::MISSING_VALUE);
			
		if(isset(self::$config['server']['host']))
			self::$session->server = self::$config['server']['host'];
		if(isset(self::$config['server']['port']))
			self::$session->port = self::$config['server']['port'];
		
		$connection = null;
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$connection = QualityCenterConnection::getInstance(self::$session->server, self::$session->port, $_POST['username'], $_POST['password']);
		}
		
		if(isset(self::$config['login']) && isset(self::$config['login']['username']) && isset(self::$config['login']['password']))
		{
			$connection = QualityCenterConnection::getInstance(self::$session->server, self::$session->port, self::$config['login']['username'], self::$config['login']['password']);
		}
		
		if($connection)
		{
			self::$session->cookies = $connection->getCookies();
			$_SESSION['QualityCenterSession'] = self::$session;
			return;
		}
		
		throw new QualityCenterSessionException("No session defined, login required", QualityCenterSessionException::NO_SESSION);
	}
	
	public static function init()
	{
		ob_start();
		
		$fileDir = realpath(__DIR__ . '/../../../');
		$filename = "$fileDir/config.ini";
		if(!file_exists($filename))
			throw new QualityCenterConfigException("Please copy $fileDir/config.template.ini to config.ini and set the required values", QualityCenterConfigException::NO_FILE_FOUND);
			
		try{
			self::$config = parse_ini_file($filename, true);
		}
		catch(Exception $e){
			throw new QualityCenterConfigException($e->getMessage(), QualityCenterConfigException::INVALID_FORMAT);
		}
		
		try{
			self::initSession();
		}
		catch(QualityCenterLoginException $e){
			throw new QualityCenterSessionException('Wrong username or password', QualityCenterSessionException::LOGIN_FAILED);
		}
		catch(QualityCenterException $e){
			throw new QualityCenterWebException($e->getMessage(), $e->getCode());
		}
		
		if(isset(self::$config['login']))
		{
			if(isset(self::$config['login']['timeZone']))
				self::$session->timeZone = self::$config['login']['timeZone'];
			if(isset(self::$config['login']['domain']))
				self::$session->domain = self::$config['login']['domain'];
			if(isset(self::$config['login']['project']))
				self::$session->project = self::$config['login']['project'];
		}
		
		if(isset($_POST['timeZone']))
			self::$session->timeZone = $_POST['timeZone'];
		if(isset($_POST['domain']))
			self::$session->domain = $_POST['domain'];
		if(isset($_POST['project']))
			self::$session->project = $_POST['project'];
		
		$_SESSION['QualityCenterSession'] = self::$session;
		
		ob_end_clean();
	}

	/**
	 * @return string
	 */
	public static function getDomain()
	{
		return self::$session->domain;
	}

	/**
	 * @return string
	 */
	public static function getProject()
	{
		return self::$session->project;
	}

	/**
	 * @return string
	 */
	public static function getUsername()
	{
		return self::$session->username;
	}
}


