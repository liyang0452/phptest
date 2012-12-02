<?php
/**
 * @package External
 * @subpackage qc.filters
 */
require_once __DIR__ . '/../QualityCenterFilter.php';
require_once __DIR__ . '/../expressions/QualityCenterExpression.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterAlertFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'description',
			'entity-type',
			'id',
			'sent-by-email',
			'key1',
			'key2',
			'key3',
			'status',
			'alert-type',
			'user',
		);
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		if(!isset($this->fields['description']))
			return null;
			
		$description = $this->fields['description'];
		return $description;
	}
	
	/**
	 * Set Description
	 * @param string $description
	 */
	public function setDescription($description)
	{
		return $this->fields['description'] = $description;
	}
	
	/**
	 * Get Entity
	 * @return string
	 */
	public function getEntityType()
	{
		if(!isset($this->fields['entity-type']))
			return null;
			
		$entityType = $this->fields['entity-type'];
		return $entityType;
	}
	
	/**
	 * Set Entity
	 * @param string $entityType
	 */
	public function setEntityType($entityType)
	{
		if(strlen($entityType) > 50)
			throw new QualityCenterInputException("Input [EntityType] value [$entityType] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($entityType), 50);
		
		return $this->fields['entity-type'] = $entityType;
	}
	
	/**
	 * Get ID
	 * @return string
	 */
	public function getId()
	{
		if(!isset($this->fields['id']))
			return null;
			
		$id = $this->fields['id'];
		return $id;
	}
	
	/**
	 * Set ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Is Sent
	 * @return string
	 */
	public function getSentByEmail()
	{
		if(!isset($this->fields['sent-by-email']))
			return null;
			
		$sentByEmail = $this->fields['sent-by-email'];
		return $sentByEmail;
	}
	
	/**
	 * Set Is Sent
	 * @param string $sentByEmail
	 */
	public function setSentByEmail($sentByEmail)
	{
		if(strlen($sentByEmail) > 1)
			throw new QualityCenterInputException("Input [SentByEmail] value [$sentByEmail] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($sentByEmail), 1);
		
		return $this->fields['sent-by-email'] = $sentByEmail;
	}
	
	/**
	 * Get Key1
	 * @return string
	 */
	public function getKey1()
	{
		if(!isset($this->fields['key1']))
			return null;
			
		$key1 = $this->fields['key1'];
		return $key1;
	}
	
	/**
	 * Set Key1
	 * @param string $key1
	 */
	public function setKey1($key1)
	{
		return $this->fields['key1'] = $key1;
	}
	
	/**
	 * Get Key2
	 * @return string
	 */
	public function getKey2()
	{
		if(!isset($this->fields['key2']))
			return null;
			
		$key2 = $this->fields['key2'];
		return $key2;
	}
	
	/**
	 * Set Key2
	 * @param string $key2
	 */
	public function setKey2($key2)
	{
		return $this->fields['key2'] = $key2;
	}
	
	/**
	 * Get Key3
	 * @return string
	 */
	public function getKey3()
	{
		if(!isset($this->fields['key3']))
			return null;
			
		$key3 = $this->fields['key3'];
		return $key3;
	}
	
	/**
	 * Set Key3
	 * @param string $key3
	 */
	public function setKey3($key3)
	{
		return $this->fields['key3'] = $key3;
	}
	
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		if(!isset($this->fields['status']))
			return null;
			
		$status = $this->fields['status'];
		return $status;
	}
	
	/**
	 * Set Status
	 * @param string $status
	 */
	public function setStatus($status)
	{
		return $this->fields['status'] = $status;
	}
	
	/**
	 * Get Type
	 * @return string
	 */
	public function getAlertType()
	{
		if(!isset($this->fields['alert-type']))
			return null;
			
		$alertType = $this->fields['alert-type'];
		return $alertType;
	}
	
	/**
	 * Set Type
	 * @param string $alertType
	 */
	public function setAlertType($alertType)
	{
		return $this->fields['alert-type'] = $alertType;
	}
	
	/**
	 * Get User Name
	 * @return string
	 */
	public function getUser()
	{
		if(!isset($this->fields['user']))
			return null;
			
		$user = $this->fields['user'];
		return $user;
	}
	
	/**
	 * Set User Name
	 * @param string $user
	 */
	public function setUser($user)
	{
		return $this->fields['user'] = $user;
	}
	
}
