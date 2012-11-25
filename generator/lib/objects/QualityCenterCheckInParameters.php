<?php
/**
 * @package External
 * @subpackage qc.objects
 */
class QualityCenterCheckInParameters extends QualityCenterObject
{
	/**
	 * @var string
	 */
	protected $comment;
	
	/**
	 * @var boolean
	 */
	protected $overrideLastVersion;
	
	/**
	 * @return SimpleXMLElement
	 */
	public function toXml()
	{
		$xml = new SimpleXMLElement('<CheckInParameters/>');
		$xml->addChild('Comment', $this->getComment());
		$xml->addChild('OverrideLastVersion', $this->getOverrideLastVersion());
		
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
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;
	}
	
	/**
	 * @return boolean $overrideLastVersion
	 */
	public function getOverrideLastVersion()
	{
		return $this->overrideLastVersion;
	}

	/**
	 * @param boolean $overrideLastVersion
	 */
	public function setOverrideLastVersion($overrideLastVersion)
	{
		$this->overrideLastVersion = $overrideLastVersion;
	}
}
