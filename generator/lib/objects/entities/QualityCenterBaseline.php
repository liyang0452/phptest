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
class QualityCenterBaseline extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'baseline';
	}
	
	/**
	 * Get Attachment
	 * @return string
	 */
	public function getHasAttachments()
	{
		if(!isset($this->fields['has-attachments']))
			return null;
			
		$hasAttachments = $this->fields['has-attachments'];
		return $hasAttachments;
	}
	
	/**
	 * Set Attachment
	 * @param string $hasAttachments
	 */
	public function setHasAttachments($hasAttachments)
	{
		if(strlen($hasAttachments) > 1)
			throw new QualityCenterInputException("Input [HasAttachments] value [$hasAttachments] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($hasAttachments), 1);
		
		return $this->fields['has-attachments'] = $hasAttachments;
	}
	
	/**
	 * Get Auto complete type
	 * @return string
	 */
	public function getAutocompleteType()
	{
		if(!isset($this->fields['autocomplete-type']))
			return null;
			
		$autocompleteType = $this->fields['autocomplete-type'];
		return $autocompleteType;
	}
	
	/**
	 * Set Auto complete type
	 * @param string $autocompleteType
	 */
	public function setAutocompleteType($autocompleteType)
	{
		return $this->fields['autocomplete-type'] = $autocompleteType;
	}
	
	/**
	 * Get Baseline ID
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
	 * Set Baseline ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Capture State
	 * @return string
	 */
	public function getCaptureState()
	{
		if(!isset($this->fields['capture-state']))
			return null;
			
		$captureState = $this->fields['capture-state'];
		return $captureState;
	}
	
	/**
	 * Set Capture State
	 * @param string $captureState
	 */
	public function setCaptureState($captureState)
	{
		return $this->fields['capture-state'] = $captureState;
	}
	
	/**
	 * Get Created By
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
	 * Set Created By
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Creation Date
	 * @return string
	 */
	public function getCreationDate()
	{
		if(!isset($this->fields['creation-date']))
			return null;
			
		$creationDate = $this->fields['creation-date'];
		return $creationDate;
	}
	
	/**
	 * Set Creation Date
	 * @param string $creationDate
	 */
	public function setCreationDate($creationDate)
	{
		return $this->fields['creation-date'] = $creationDate;
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
	 * Get Is repository captured
	 * @return string
	 */
	public function getIsRepositoryCaptured()
	{
		if(!isset($this->fields['is-repository-captured']))
			return null;
			
		$isRepositoryCaptured = $this->fields['is-repository-captured'];
		return $isRepositoryCaptured;
	}
	
	/**
	 * Set Is repository captured
	 * @param string $isRepositoryCaptured
	 */
	public function setIsRepositoryCaptured($isRepositoryCaptured)
	{
		if(strlen($isRepositoryCaptured) > 1)
			throw new QualityCenterInputException("Input [IsRepositoryCaptured] value [$isRepositoryCaptured] excceeded maximum length [1]", QualityCenterInputException::SIZE, strlen($isRepositoryCaptured), 1);
		
		return $this->fields['is-repository-captured'] = $isRepositoryCaptured;
	}
	
	/**
	 * Get Modified
	 * @return string
	 */
	public function getVts()
	{
		if(!isset($this->fields['vts']))
			return null;
			
		$vts = $this->fields['vts'];
		return $vts;
	}
	
	/**
	 * Set Modified
	 * @param string $vts
	 */
	public function setVts($vts)
	{
		return $this->fields['vts'] = $vts;
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
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Parent (Library) ID
	 * @return string
	 */
	public function getLibId()
	{
		if(!isset($this->fields['lib-id']))
			return null;
			
		$libId = $this->fields['lib-id'];
		return $libId;
	}
	
	/**
	 * Set Parent (Library) ID
	 * @param string $libId
	 */
	public function setLibId($libId)
	{
		return $this->fields['lib-id'] = $libId;
	}
	
	/**
	 * Get Version Stamp
	 * @return string
	 */
	public function getVerStamp()
	{
		if(!isset($this->fields['ver-stamp']))
			return null;
			
		$verStamp = $this->fields['ver-stamp'];
		return $verStamp;
	}
	
	/**
	 * Set Version Stamp
	 * @param string $verStamp
	 */
	public function setVerStamp($verStamp)
	{
		return $this->fields['ver-stamp'] = $verStamp;
	}
	
	/**
	 * Get baseline path field
	 * @return string
	 */
	public function getAttachPath()
	{
		if(!isset($this->fields['attach-path']))
			return null;
			
		$attachPath = $this->fields['attach-path'];
		return $attachPath;
	}
	
	/**
	 * Set baseline path field
	 * @param string $attachPath
	 */
	public function setAttachPath($attachPath)
	{
		if(strlen($attachPath) > 255)
			throw new QualityCenterInputException("Input [AttachPath] value [$attachPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($attachPath), 255);
		
		return $this->fields['attach-path'] = $attachPath;
	}
	
}
