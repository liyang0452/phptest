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
class QualityCenterDeletedAssetInfo extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'deleted-asset-info';
	}
	
	/**
	 * Get Asset description
	 * @return string
	 */
	public function getAssetDescription()
	{
		if(!isset($this->fields['asset-description']))
			return null;
			
		$assetDescription = $this->fields['asset-description'];
		return $assetDescription;
	}
	
	/**
	 * Set Asset description
	 * @param string $assetDescription
	 */
	public function setAssetDescription($assetDescription)
	{
		return $this->fields['asset-description'] = $assetDescription;
	}
	
	/**
	 * Get Deleted asset id
	 * @return string
	 */
	public function getAssetId()
	{
		if(!isset($this->fields['asset-id']))
			return null;
			
		$assetId = $this->fields['asset-id'];
		return $assetId;
	}
	
	/**
	 * Set Deleted asset id
	 * @param string $assetId
	 */
	public function setAssetId($assetId)
	{
		return $this->fields['asset-id'] = $assetId;
	}
	
	/**
	 * Get Deleted asset info id
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
	 * Set Deleted asset info id
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get Deleted asset name
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
	 * Set Deleted asset name
	 * @param string $name
	 */
	public function setName($name)
	{
		if(strlen($name) > 255)
			throw new QualityCenterInputException("Input [Name] value [$name] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($name), 255);
		
		return $this->fields['name'] = $name;
	}
	
	/**
	 * Get Deleted asset owner id
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
	 * Set Deleted asset owner id
	 * @param string $parentId
	 */
	public function setParentId($parentId)
	{
		return $this->fields['parent-id'] = $parentId;
	}
	
	/**
	 * Get Deleted asset owner type
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
	 * Set Deleted asset owner type
	 * @param string $parentType
	 */
	public function setParentType($parentType)
	{
		if(strlen($parentType) > 40)
			throw new QualityCenterInputException("Input [ParentType] value [$parentType] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($parentType), 40);
		
		return $this->fields['parent-type'] = $parentType;
	}
	
	/**
	 * Get Deleted asset path
	 * @return string
	 */
	public function getAssetPath()
	{
		if(!isset($this->fields['asset-path']))
			return null;
			
		$assetPath = $this->fields['asset-path'];
		return $assetPath;
	}
	
	/**
	 * Set Deleted asset path
	 * @param string $assetPath
	 */
	public function setAssetPath($assetPath)
	{
		if(strlen($assetPath) > 255)
			throw new QualityCenterInputException("Input [AssetPath] value [$assetPath] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($assetPath), 255);
		
		return $this->fields['asset-path'] = $assetPath;
	}
	
	/**
	 * Get Deleted asset type
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
	 * Set Deleted asset type
	 * @param string $description
	 */
	public function setDescription($description)
	{
		if(strlen($description) > 40)
			throw new QualityCenterInputException("Input [Description] value [$description] excceeded maximum length [40]", QualityCenterInputException::SIZE, strlen($description), 40);
		
		return $this->fields['description'] = $description;
	}
	
	/**
	 * Get Deleted by
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
	 * Set Deleted by
	 * @param string $owner
	 */
	public function setOwner($owner)
	{
		if(strlen($owner) > 60)
			throw new QualityCenterInputException("Input [Owner] value [$owner] excceeded maximum length [60]", QualityCenterInputException::SIZE, strlen($owner), 60);
		
		return $this->fields['owner'] = $owner;
	}
	
	/**
	 * Get Deleted date as linux timestamp
	 * @return mixed
	 */
	public function getLastModified()
	{
		if(!isset($this->fields['last-modified']))
			return null;
			
		$lastModified = $this->fields['last-modified'];
		$lastModifiedDate = date_parse_from_format('Y-m-d', $lastModified);
		$lastModified = mktime(0, 0, 0, $lastModifiedDate['month'], $lastModifiedDate['day'], $lastModifiedDate['year']);
		
		return $lastModified;
	}
	
	/**
	 * Set Deleted date as linux timestamp
	 * @param mixed $lastModified
	 */
	public function setLastModified($lastModified)
	{
		if(is_int($lastModified))
			$lastModified = date('Y-m-d', $lastModified);
		return $this->fields['last-modified'] = $lastModified;
	}
	
	/**
	 * Get Display type
	 * @return string
	 */
	public function getAssetDisplayType()
	{
		if(!isset($this->fields['asset-display-type']))
			return null;
			
		$assetDisplayType = $this->fields['asset-display-type'];
		return $assetDisplayType;
	}
	
	/**
	 * Set Display type
	 * @param string $assetDisplayType
	 */
	public function setAssetDisplayType($assetDisplayType)
	{
		if(strlen($assetDisplayType) > 255)
			throw new QualityCenterInputException("Input [AssetDisplayType] value [$assetDisplayType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($assetDisplayType), 255);
		
		return $this->fields['asset-display-type'] = $assetDisplayType;
	}
	
	/**
	 * Get Owner description
	 * @return string
	 */
	public function getOwnerDescription()
	{
		if(!isset($this->fields['owner-description']))
			return null;
			
		$ownerDescription = $this->fields['owner-description'];
		return $ownerDescription;
	}
	
	/**
	 * Set Owner description
	 * @param string $ownerDescription
	 */
	public function setOwnerDescription($ownerDescription)
	{
		return $this->fields['owner-description'] = $ownerDescription;
	}
	
	/**
	 * Get Owner display type
	 * @return string
	 */
	public function getOwnerDisplayType()
	{
		if(!isset($this->fields['owner-display-type']))
			return null;
			
		$ownerDisplayType = $this->fields['owner-display-type'];
		return $ownerDisplayType;
	}
	
	/**
	 * Set Owner display type
	 * @param string $ownerDisplayType
	 */
	public function setOwnerDisplayType($ownerDisplayType)
	{
		if(strlen($ownerDisplayType) > 255)
			throw new QualityCenterInputException("Input [OwnerDisplayType] value [$ownerDisplayType] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($ownerDisplayType), 255);
		
		return $this->fields['owner-display-type'] = $ownerDisplayType;
	}
	
	/**
	 * Get Owner name
	 * @return string
	 */
	public function getOwnerName()
	{
		if(!isset($this->fields['owner-name']))
			return null;
			
		$ownerName = $this->fields['owner-name'];
		return $ownerName;
	}
	
	/**
	 * Set Owner name
	 * @param string $ownerName
	 */
	public function setOwnerName($ownerName)
	{
		if(strlen($ownerName) > 255)
			throw new QualityCenterInputException("Input [OwnerName] value [$ownerName] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($ownerName), 255);
		
		return $this->fields['owner-name'] = $ownerName;
	}
	
}
