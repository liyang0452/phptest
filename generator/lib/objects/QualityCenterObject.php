<?php
/**
 * @package External
 * @subpackage qc.objects
 */
abstract class QualityCenterObject
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
			$setter = "set{$fieldAttributes->Name}";
			if(is_callable(array($this, $setter)))
				$this->$setter("$fieldXml->Value");
		}
	}

	/**
	 * @return SimpleXMLElement
	 */
	abstract public function toXml();
}
