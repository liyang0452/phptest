<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/exceptions/QualityCenterConnectionException.php';
require_once __DIR__ . '/exceptions/QualityCenterServerException.php';

/**
 * @package External
 * @subpackage qc
 */
class QualityCenterConnection
{
	const METHOD_GET = 'GET';
	const METHOD_POST = 'POST';
	const METHOD_DELETE = 'DELETE';
	
	/**
	 * This singleton instance
	 * @var QualityCenterConnection
	 */
	private static $instance;
	
	/**
	 * Curl handle
	 * @var resource
	 */
	private $ch;
	
	/**
	 * HTTP domain
	 * @var string
	 */
	private $server;
	
	/**
	 * HTTP port
	 * @var int
	 */
	private $port;
	
	/**
	 * HTTP path
	 * @var string
	 */
	private $action;
	
	/**
	 * HTTP headers to send
	 * @var array
	 */
	private $headers = array();
	
	/**
	 * HTTP POST data to send
	 * @var string
	 */
	private $xml = null;
	
	/**
	 * HTTP request method
	 * @var string
	 */
	private $method = self::METHOD_GET;
	
	/**
	 * HTTP cookies to send
	 * @var array
	 */
	private $cookies = array();
	
	/**
	 * @var string
	 */
	private $username;
	
	/**
	 * @param string $server
	 * @param string $port
	 * @param string $username
	 * @param string $password
	 */
	protected function __construct($server, $port, $username = null, $password = null)
	{
		$this->server = $server;
		$this->port = $port;
		
		if($username && $password)
			$this->login($username, $password);
	}
	
	/**
	 * @param string $server
	 * @param string $port
	 * @param string $username
	 * @param string $password
	 * @return QualityCenterConnection
	 */
	public static function getInstance($server = null, $port = null, $username = null, $password = null)
	{
		if(!self::$instance)
			self::$instance = new QualityCenterConnection($server, $port, $username, $password);
			
		return self::$instance;
	}
	
	/**
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	
	/**
	 * @param string $username
	 * @param string $password
	 */
	public function login($username, $password)
	{
		$this->username = $username;
		$this->action = 'authentication-point/authenticate';
		$this->headers = array("Authorization: Basic " . base64_encode("$username:$password"));
		$this->method = self::METHOD_GET;
		$this->getHeaders();
	}
	
	/**
	 * @param string $action
	 * @param string $xml
	 * @return string
	 */
	public function postNew($action, $xml)
	{
		$args = func_get_args();
		array_shift($args);
		array_shift($args);
		$this->action = @call_user_func_array('sprintf', array_merge(array($action), $args));
		$this->xml = $xml;
		$this->headers = array(
			'Accept: application/xml',
			'Content-Type: application/xml',
		);
		$this->method = self::METHOD_POST;
		return $this->getResult(201);
	}
	
	/**
	 * @param string $action
	 * @param string $xml
	 * @return string
	 */
	public function post($action, $xml)
	{
		$args = func_get_args();
		array_shift($args);
		array_shift($args);
		$this->action = @call_user_func_array('sprintf', array_merge(array($action), $args));
		$this->xml = $xml;
		$this->headers = array(
			'Accept: application/xml',
			'Content-Type: application/xml',
		);
		$this->method = self::METHOD_POST;
		return $this->getResult();
	}
	
	/**
	 * @param string $action
	 * @return string
	 */
	public function get($action)
	{
		$args = func_get_args();
		array_shift($args);
		$this->action = @call_user_func_array('sprintf', array_merge(array($action), $args));
		$this->headers = array();
		$this->method = self::METHOD_GET;
		return $this->getResult();
	}
	
	/**
	 * @param string $action
	 * @return string
	 */
	public function delete($action)
	{
		$args = func_get_args();
		array_shift($args);
		$this->action = @call_user_func_array('sprintf', array_merge(array($action), $args));
		$this->headers = array();
		$this->method = self::METHOD_DELETE;
		return $this->getResult();
	}
	
	/**
	 * 
	 */
	protected function init()
	{
		$this->action = str_replace(' ', '%20', $this->action);
		$url = "http://{$this->server}:{$this->port}/qcbin/{$this->action}";
		$this->ch = curl_init($url);
		echo "URL [$url]\n";
		curl_setopt($this->ch, CURLOPT_VERBOSE, true);
		
		foreach ($this->cookies as $cookie)
			$this->headers[] = "Cookie: $cookie";
			
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, $this->method);
	
		if($this->method == self::METHOD_POST)
		{
			echo "Sent data [" . $this->xml . "]\n";
			curl_setopt($this->ch, CURLOPT_POSTFIELDS, $this->xml);
		}
		//echo "Heaaders " . print_r($this->headers, true) . "\n";
	}
	
	/**
	 * @return string
	 */
	protected function getResult($expectedHttpCode = 200)
	{
		$this->init();
		
		curl_setopt($this->ch, CURLOPT_HEADER, false);
		$ret = curl_exec($this->ch);
		
		if($ret === false)
		{
			$errorCode = curl_errno($this->ch);
			$errorDescription = curl_error($this->ch);
			curl_close($this->ch);
			
			throw new QualityCenterConnectionException($errorDescription, $errorCode);
		}
		$httpCode = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
		curl_close($this->ch);
		
		echo "HTTP Code [$httpCode] Returned data [" . $ret . "]\n";
		if($httpCode != $expectedHttpCode)
		{
			$resultXml = new SimpleXMLElement($ret);
			throw new QualityCenterServerException($resultXml->Title, $resultXml->Id, $resultXml->StackTrace);
		}
		
		return $ret;
	}
	
	/**
	 * @return array
	 */
	public function getHeaders()
	{
		$this->init();
	
		curl_setopt($this->ch, CURLOPT_HEADER, true);
		curl_setopt($this->ch, CURLOPT_NOBODY, true);
		$ret = curl_exec($this->ch);
		curl_close($this->ch);
		
		if($ret)
		{
			$headers = explode("\n", $ret);
			foreach($headers as $header)
			{
				$header = trim($header, " \r\n\t");
				//echo "Parsing header [$header]\n";
				if(!trim($header) || !strpos($header, ':'))
					continue;
					
				list($headerName, $headerValue) = explode(':', $header, 2);
				if(strtolower(trim($headerName)) == 'set-cookie')
				{
					//echo "Added cookie [$headerValue]\n";
					$this->cookies[] = $headerValue;
				}					
			}
		}
		
		return $ret;
	}
}
