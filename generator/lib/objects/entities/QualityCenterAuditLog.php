<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class QualityCenterAuditLog extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'audit-log';
	}
	
	/**
	 * Get Action
	 * @return string
	 */
	public function getAction()
	{
		if(!isset($this->fields['action']))
			return null;
			
		$action = $this->fields['action'];
		return $action;
	}
	
	/**
	 * Set Action
	 * @param string $action
	 */
	public function setAction($action)
	{
		if(strlen($action) > 200)
			throw new QualityCenterInputException("Input [Action] value [$action] excceeded maximum length [200]", QualityCenterInputException::SIZE, strlen($action), 200);
		
		return $this->fields['action'] = $action;
	}
	
	/**
	 * Get Audit Description
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
	 * Set Audit Description
	 * @param string $description
	 */
	public function setDescription($description)
	{
		return $this->fields['description'] = $description;
	}
	
	/**
	 * Get Entity ID
	 * @return string
	 */
	public function getParentId()
	{
		if(!isset($this->fields['parent-id']))
			return null;
			
		$parentId = $this->fields['parent-id'];
		return $parentId;
	}
	
	/**
	 * Set Entity ID
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Entity Type
	 * @return string
	 */
	public function getParentType()
	{
		if(!isset($this->fields['parent-type']))
			return null;
			
		$parentType = $this->fields['parent-type'];
		return $parentType;
	}
	
	/**
	 * Set Entity Type
	 * @param string $parentType
	 */
	public function setParentType($parentType)
	{
		if(strlen($parentType) > 200)
			throw new QualityCenterInputException("Input [ParentType] value [$parentType] excceeded maximum length [200]", QualityCenterInputException::SIZE, strlen($parentType), 200);
		
		return $this->fields['parent-type'] = $parentType;
	}
	
	/**
	 * Get Log Record Context ID
	 * @return string
	 */
	public function getFatherId()
	{
		if(!isset($this->fields['father-id']))
			return null;
			
		$fatherId = $this->fields['father-id'];
		return $fatherId;
	}
	
	/**
	 * Set Log Record Context ID
	 * @param string $fatherId
	 */
	public function setFatherId($fatherId)
	{
		return $this->fields['father-id'] = $fatherId;
	}
	
	/**
	 * Get Log Record ID
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
	 * Set Log Record ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Session ID
	 * @return string
	 */
	public function getSessionId()
	{
		if(!isset($this->fields['session-id']))
			return null;
			
		$sessionId = $this->fields['session-id'];
		return $sessionId;
	}
	
	/**
	 * Set Session ID
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId)
	{
		return $this->fields['session-id'] = $sessionId;
	}
	
	/**
	 * Get Time as linux timestamp
	 * @return int
	 */
	public function getCreationTime()
	{
		if(!isset($this->fields['creation-time']))
			return null;
			
		$creationTime = $this->fields['creation-time'];
		$creationTimeDate = date_parse_from_format('Y-m-d', $creationTime);
		$creationTime = mktime(0, 0, 0, $creationTimeDate['month'], $creationTimeDate['day'], $creationTimeDate['year']);
		
		return $creationTime;
	}
	
	/**
	 * Set Time as linux timestamp
	 * @param int $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		$creationTime = date('Y-m-d', $creationTime);
		return $this->fields['creation-time'] = $creationTime;
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
		if(strlen($user) > 2000)
			throw new QualityCenterInputException("Input [User] value [$user] excceeded maximum length [2000]", QualityCenterInputException::SIZE, strlen($user), 2000);
		
		return $this->fields['user'] = $user;
	}
	
}
