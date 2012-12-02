<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';
require_once __DIR__ . '/../../filters/expressions/QualityCenterExpression.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class QualityCenterEventLog extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'event-log';
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
		if(strlen($action) > 50)
			throw new QualityCenterInputException("Input [Action] value [$action] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($action), 50);
		
		return $this->fields['action'] = $action;
	}
	
	/**
	 * Get Category
	 * @return string
	 */
	public function getCategory()
	{
		if(!isset($this->fields['category']))
			return null;
			
		$category = $this->fields['category'];
		return $category;
	}
	
	/**
	 * Set Category
	 * @param string $category
	 */
	public function setCategory($category)
	{
		if(strlen($category) > 50)
			throw new QualityCenterInputException("Input [Category] value [$category] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($category), 50);
		
		return $this->fields['category'] = $category;
	}
	
	/**
	 * Get Context
	 * @return string
	 */
	public function getContext()
	{
		if(!isset($this->fields['context']))
			return null;
			
		$context = $this->fields['context'];
		return $context;
	}
	
	/**
	 * Set Context
	 * @param string $context
	 */
	public function setContext($context)
	{
		if(strlen($context) > 100)
			throw new QualityCenterInputException("Input [Context] value [$context] excceeded maximum length [100]", QualityCenterInputException::SIZE, strlen($context), 100);
		
		return $this->fields['context'] = $context;
	}
	
	/**
	 * Get Creation Date
	 * @return string
	 */
	public function getCreationTime()
	{
		if(!isset($this->fields['creation-time']))
			return null;
			
		$creationTime = $this->fields['creation-time'];
		return $creationTime;
	}
	
	/**
	 * Set Creation Date
	 * @param string $creationTime
	 */
	public function setCreationTime($creationTime)
	{
		return $this->fields['creation-time'] = $creationTime;
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
		if(strlen($description) > 2000)
			throw new QualityCenterInputException("Input [Description] value [$description] excceeded maximum length [2000]", QualityCenterInputException::SIZE, strlen($description), 2000);
		
		return $this->fields['description'] = $description;
	}
	
	/**
	 * Get Event Log Id
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
	 * Set Event Log Id
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Event Name
	 * @return string
	 */
	public function getName()
	{
		if(!isset($this->fields['name']))
			return null;
			
		$name = $this->fields['name'];
		return $name;
	}
	
	/**
	 * Set Event Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 20)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [20]", QualityCenterInputException::SIZE, strlen($name), 20);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Event Type
	 * @return string
	 */
	public function getEventType()
	{
		if(!isset($this->fields['event-type']))
			return null;
			
		$eventType = $this->fields['event-type'];
		return $eventType;
	}
	
	/**
	 * Set Event Type
	 * @param string $eventType
	 */
	public function setEventType($eventType)
	{
		if(strlen($eventType) > 20)
			throw new QualityCenterInputException("Input [EventType] value [$eventType] excceeded maximum length [20]", QualityCenterInputException::SIZE, strlen($eventType), 20);
		
		return $this->fields['event-type'] = $eventType;
	}
	
	/**
	 * Get Flow Context Id
	 * @return string
	 */
	public function getFlowContextId()
	{
		if(!isset($this->fields['flow-context-id']))
			return null;
			
		$flowContextId = $this->fields['flow-context-id'];
		return $flowContextId;
	}
	
	/**
	 * Set Flow Context Id
	 * @param string $flowContextId
	 */
	public function setFlowContextId($flowContextId)
	{
		if(strlen($flowContextId) > 100)
			throw new QualityCenterInputException("Input [FlowContextId] value [$flowContextId] excceeded maximum length [100]", QualityCenterInputException::SIZE, strlen($flowContextId), 100);
		
		return $this->fields['flow-context-id'] = $flowContextId;
	}
	
	/**
	 * Get Is Deletable
	 * @return string
	 */
	public function getIsDeletable()
	{
		if(!isset($this->fields['is-deletable']))
			return null;
			
		$isDeletable = $this->fields['is-deletable'];
		return $isDeletable;
	}
	
	/**
	 * Set Is Deletable
	 * @param string $isDeletable
	 */
	public function setIsDeletable($isDeletable)
	{
		if(strlen($isDeletable) > 1)
			throw new QualityCenterInputException("Input [IsDeletable] value [$isDeletable] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isDeletable), 1);
		
		return $this->fields['is-deletable'] = $isDeletable;
	}
	
	/**
	 * Get Module
	 * @return string
	 */
	public function getModule()
	{
		if(!isset($this->fields['module']))
			return null;
			
		$module = $this->fields['module'];
		return $module;
	}
	
	/**
	 * Set Module
	 * @param string $module
	 */
	public function setModule($module)
	{
		if(strlen($module) > 50)
			throw new QualityCenterInputException("Input [Module] value [$module] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($module), 50);
		
		return $this->fields['module'] = $module;
	}
	
	/**
	 * Get Project Name
	 * @return string
	 */
	public function getProjectUid()
	{
		if(!isset($this->fields['project-uid']))
			return null;
			
		$projectUid = $this->fields['project-uid'];
		return $projectUid;
	}
	
	/**
	 * Set Project Name
	 * @param string $projectUid
	 */
	public function setProjectUid($projectUid)
	{
		if(strlen($projectUid) > 36)
			throw new QualityCenterInputException("Input [ProjectUid] value [$projectUid] excceeded maximum length [36]", QualityCenterInputException::SIZE, strlen($projectUid), 36);
		
		return $this->fields['project-uid'] = $projectUid;
	}
	
	/**
	 * Get Responsible
	 * @return string
	 */
	public function getOwner()
	{
		if(!isset($this->fields['owner']))
			return null;
			
		$owner = $this->fields['owner'];
		return $owner;
	}
	
	/**
	 * Set Responsible
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		if(strlen($owner) > 40)
			throw new QualityCenterInputException("Input [Owner] value [$owner] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($owner), 40);
		
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		if(!isset($this->fields['source']))
			return null;
			
		$source = $this->fields['source'];
		return $source;
	}
	
	/**
	 * Set Source
	 * @param string $source
	 */
	public function setSource($source)
	{
		if(strlen($source) > 50)
			throw new QualityCenterInputException("Input [Source] value [$source] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($source), 50);
		
		return $this->fields['source'] = $source;
	}
	
	/**
	 * Get Sub Module
	 * @return string
	 */
	public function getSubModule()
	{
		if(!isset($this->fields['sub-module']))
			return null;
			
		$subModule = $this->fields['sub-module'];
		return $subModule;
	}
	
	/**
	 * Set Sub Module
	 * @param string $subModule
	 */
	public function setSubModule($subModule)
	{
		if(strlen($subModule) > 50)
			throw new QualityCenterInputException("Input [SubModule] value [$subModule] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($subModule), 50);
		
		return $this->fields['sub-module'] = $subModule;
	}
	
}
