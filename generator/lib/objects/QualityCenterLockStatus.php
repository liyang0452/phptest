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
class QualityCenterLockStatus extends QualityCenterObject
{
	const STATUS_LOCKED_BY_ME = 'LOCKED_BY_ME';
	const STATUS_UNLOCKED = 'UNLOCKED';
	const STATUS_LOCKED_BY_OTHER = 'LOCKED_BY_OTHER';
	
	/**
	 * @var string
	 */
	protected $lockStatus;
	
	/**
	 * @var boolean
	 */
	protected $lockedByMe;
	
	/**
	 * @var string
	 */
	protected $lockUser;
	
	/**
	 * @return SimpleXMLElement
	 */
	public function toXml()
	{
		$xml = new SimpleXMLElement('<LockStatusEntity/>');
		$xml->addChild('LockStatus', $this->getLockStatus());
		$xml->addChild('LockedByMe', $this->getLockedByMe());
		$xml->addChild('LockUser', $this->getLockUser());
		
		return $xml;
	}
	
	/**
	 * @param string $lockUser
	 */
	public function lock($lockUser)
	{
		$this->setLockStatus(self::STATUS_LOCKED_BY_ME);
		$this->setLockedByMe(true);
		$this->setLockUser($lockUser);
	}
	
	/**
	 */
	public function unlock()
	{
		$this->setLockStatus(self::STATUS_UNLOCKED);
		$this->setLockedByMe(false);
		$this->setLockUser(null);
	}
	
	/**
	 * @return string $lockStatus
	 */
	public function getLockStatus()
	{
		return $this->lockStatus;
	}

	/**
	 * @return boolean $lockedByMe
	 */
	public function getLockedByMe()
	{
		return $this->lockedByMe;
	}

	/**
	 * @return string $lockUser
	 */
	public function getLockUser()
	{
		return $this->lockUser;
	}

	/**
	 * @param string $lockStatus
	 */
	public function setLockStatus($lockStatus)
	{
		$this->lockStatus = $lockStatus;
	}

	/**
	 * @param boolean $lockedByMe
	 */
	public function setLockedByMe($lockedByMe)
	{
		$this->lockedByMe = $lockedByMe;
	}

	/**
	 * @param string $lockUser
	 */
	public function setLockUser($lockUser)
	{
		$this->lockUser = $lockUser;
	}
}
