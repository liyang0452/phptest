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
class QualityCenterHost extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'host';
	}
	
	/**
	 * Get Attachment
	 * @return string
	 */
	public function getAttachment()
	{
		if(!isset($this->fields['attachment']))
			return null;
			
		$attachment = $this->fields['attachment'];
		return $attachment;
	}
	
	/**
	 * Set Attachment
	 * @param string $attachment
	 */
	public function setAttachment($attachment)
	{
		if(strlen($attachment) > 1)
			throw new QualityCenterInputException("Input [Attachment] value [$attachment] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($attachment), 1);
		
		return $this->fields['attachment'] = $attachment;
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
		if(strlen($description) > 200)
			throw new QualityCenterInputException("Input [Description] value [$description] excceeded maximum length [200]", QualityCenterInputException::SIZE, strlen($description), 200);
		
		return $this->fields['description'] = $description;
	}
	
	/**
	 * Get Name
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
	 * Set Name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 50)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($name), 50);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get REX Server
	 * @return string
	 */
	public function getRexServer()
	{
		if(!isset($this->fields['rex-server']))
			return null;
			
		$rexServer = $this->fields['rex-server'];
		return $rexServer;
	}
	
	/**
	 * Set REX Server
	 * @param string $rexServer
	 */
	public function setRexServer($rexServer)
	{
		if(strlen($rexServer) > 50)
			throw new QualityCenterInputException("Input [RexServer] value [$rexServer] excceeded maximum length [50]", QualityCenterInputException::SIZE, strlen($rexServer), 50);
		
		return $this->fields['rex-server'] = $rexServer;
	}
	
	/**
	 * Get 
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
	 * Set 
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
}
