<?php
/**
 * @package External
 * @subpackage qc.objects
 */
class QualityCenterCheckOutParameters extends QualityCenterObject
{
	/**
	 * @var string
	 */
	protected $comment;
	
	/**
	 * @var int
	 */
	protected $version;
	
	/**
	 * @return SimpleXMLElement
	 */
	public function toXml()
	{
		$xml = new SimpleXMLElement('<CheckOutParameters/>');
		
		if(!is_null($this->getComment()))
			$xml->addChild('Comment', $this->getComment());
			
		if(!is_null($this->getVersion()))
			$xml->addChild('Version', $this->getVersion());
		
		return $xml;
	}
	
	/**
	 * @return string $comment
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * @return int $version
	 */
	public function getVersion()
	{
		return $this->version;
	}

	/**
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;
	}

	/**
	 * @param int $version
	 */
	public function setVersion($version)
	{
		$this->version = $version;
	}
}
