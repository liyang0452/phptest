<?php
/**
 * @package External
 * @subpackage qc.objects
 */
abstract class QualityCenterObject
{
	/**
	 * @param SimpleXMLElement $xml
	 */
	public function __construct(SimpleXMLElement $xml = null)
	{
		if(!$xml)
			return;
			
		foreach($xml->children() as $fieldName => $fieldValue)
		{
			$setter = "set{$fieldName}";
			if(is_callable(array($this, $setter)))
				$this->$setter("$fieldValue");
		}
		
		foreach($xml->attributes() as $fieldName => $fieldValue)
		{
			$setter = "set{$fieldName}";
			if(is_callable(array($this, $setter)))
				$this->$setter("$fieldValue");
		}
	}

	/**
	 * @return SimpleXMLElement
	 */
	abstract public function toXml();

	/**
	 * @return array
	 */
	abstract public function toArray();
}
