<?php
/**
 * @package External
 * @subpackage qc.objects
 */
abstract class QualityCenterEntity
{
	/**
	 * @var array
	 */
	protected $fields = array();
	
	/**
	 * @param SimpleXMLElement $xml
	 */
	public function __construct(SimpleXMLElement $xml = null)
	{
		if(!$xml)
			return;
			
		foreach($xml->Fields->children() as $fieldXml)
		{
			/* @var $fieldXml SimpleXMLElement */
			$fieldAttributes = $fieldXml->attributes();
			$this->fields["$fieldAttributes->Name"] = "$fieldXml->Value";
		}
	}

	/**
	 * return string
	 */
	abstract protected function _getEntityType();

	/**
	 * @return SimpleXMLElement
	 */
	public function toXml()
	{
		$xml = new SimpleXMLElement('<Entity Type="' . $this->_getEntityType() . '" />');
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
}
