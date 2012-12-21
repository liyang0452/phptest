<?php
/**
 * @package External
 * @subpackage qc.objects
 */
require_once __DIR__ . '/QualityCenterObject.php';

/**
 * @package External
 * @subpackage qc.objects
 */
abstract class QualityCenterEntity extends QualityCenterObject
{
	/**
	 * @var array
	 */
	protected $fields = array();
	
	/**
	 * @param mixed $data SimpleXMLElement or associative array
	 */
	public function __construct($data = null)
	{
		if(!$data)
			return;
			
		if(is_array($data))
		{
			foreach($data as $field => $value)
			{
				$setter = "set{$field}";
				if(is_callable(array($this, $setter)))
					$this->$setter($value);
			}
		}
			
		if($data instanceof SimpleXMLElement)
		{
			foreach($data->Fields->children() as $fieldXml)
			{
				/* @var $fieldXml SimpleXMLElement */
				$fieldAttributes = $fieldXml->attributes();
				$this->fields["$fieldAttributes->Name"] = "$fieldXml->Value";
			}
		}
	}

	/**
	 * return string
	 */
	abstract public function getQualityCenterEntityType();

	/**
	 * return int
	 */
	abstract public function getId();

	/**
	 * @return SimpleXMLElement
	 */
	public function toXml()
	{
		$xml = new SimpleXMLElement('<Entity Type="' . $this->getQualityCenterEntityType() . '" />');
		$fieldsXml = $xml->addChild('Fields');
		
		foreach($this->fields as $fieldName => $fieldValue)
		{
			if(is_null($fieldValue))
				continue;
			
			$fieldXml = $fieldsXml->addChild('Field');
			$fieldXml->addAttribute('Name', $fieldName);
			$fieldXml->addChild('Value', $fieldValue);
		}
		
		return $xml;
	}

	/**
	 * @return array
	 */
	public function toArray()
	{
		$array = array();
		foreach($this->fields as $field => $value)
		{
			$field = lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $field))));
			$array[$field] = $value;
		}
		return $array;
	}
}
