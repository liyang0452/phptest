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
class QualityCenterUser extends QualityCenterObject
{
	/**
	 * @var string
	 */
	protected $fullName;

	/**
	 * @var string
	 */
	protected $name;
	
	/**
	 * @var string
	 */
	protected $email;
	
	/**
	 * @var string
	 */
	protected $phone;
	
	/* (non-PHPdoc)
	 * @see QualityCenterObject::toXml()
	 */
	public function toXml()
	{
		$xml = new SimpleXMLElement('<User/>');
		$xml->addAttribute('FullName', $this->getFullName());
		$xml->addAttribute('Name', $this->getName());
		$xml->addChild('Email', $this->getEmail());
		$xml->addChild('Phone', $this->getPhone());
		
		return $xml;
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterObject::toArray()
	 */
	public function toArray()
	{
		return array(
			'fullName' => $this->getFullName(),
			'name' => $this->getName(),
			'email' => $this->getEmail(),
			'phone' => $this->getPhone(),
		);
	}
	
	/**
	 * @return string $fullName
	 */
	public function getFullName()
	{
		return $this->fullName;
	}

	/**
	 * @return string $name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return string $email
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @return string $phone
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param string $fullName
	 */
	public function setFullName($fullName)
	{
		$this->fullName = $fullName;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @param string $phone
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}
}
