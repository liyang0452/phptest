<?php
/**
 * @package External
 * @subpackage qc.filters
 */
require_once __DIR__ . '/../QualityCenterFilter.php';
require_once __DIR__ . '/../expressions/QualityCenterExpression.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';

/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterReqTraceFilter extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(
			'owner',
			'creation-date',
			'from-req-id',
			'vts',
			'id',
			'to-req-id',
			'comment',
		);
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
	 * Get Creation Date as linux timestamp
	 * @return mixed
	 */
	public function getCreationDate()
	{
		if(!isset($this->fields['creation-date']))
			return null;
			
		$creationDate = $this->fields['creation-date'];
		$creationDateDate = date_parse_from_format('Y-m-d', $creationDate);
		$creationDate = mktime(0, 0, 0, $creationDateDate['month'], $creationDateDate['day'], $creationDateDate['year']);
		
		return $creationDate;
	}
	
	/**
	 * Set Creation Date as linux timestamp
	 * @param mixed $creationDate
	 */
	public function setCreationDate($creationDate)
	{
		if(is_int($creationDate))
			$creationDate = date('Y-m-d', $creationDate);
		return $this->fields['creation-date'] = $creationDate;
	}
	
	/**
	 * Get From Requirement ID
	 * @return string
	 */
	public function getFromReqId()
	{
		if(!isset($this->fields['from-req-id']))
			return null;
			
		$fromReqId = $this->fields['from-req-id'];
		return $fromReqId;
	}
	
	/**
	 * Set From Requirement ID
	 * @param string $fromReqId
	 */
	public function setFromReqId($fromReqId)
	{
		return $this->fields['from-req-id'] = $fromReqId;
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
	 * Get Requirement Trace ID
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
	 * Set Requirement Trace ID
	 * @param string $id
	 */
	public function setId($id)
	{
		return $this->fields['id'] = $id;
	}
	
	/**
	 * Get To Requirement ID
	 * @return string
	 */
	public function getToReqId()
	{
		if(!isset($this->fields['to-req-id']))
			return null;
			
		$toReqId = $this->fields['to-req-id'];
		return $toReqId;
	}
	
	/**
	 * Set To Requirement ID
	 * @param string $toReqId
	 */
	public function setToReqId($toReqId)
	{
		return $this->fields['to-req-id'] = $toReqId;
	}
	
	/**
	 * Get Trace Comment
	 * @return string
	 */
	public function getComment()
	{
		if(!isset($this->fields['comment']))
			return null;
			
		$comment = $this->fields['comment'];
		return $comment;
	}
	
	/**
	 * Set Trace Comment
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		if(strlen($comment) > 255)
			throw new QualityCenterInputException("Input [Comment] value [$comment] excceeded maximum length [255]", QualityCenterInputException::SIZE, strlen($comment), 255);
		
		return $this->fields['comment'] = $comment;
	}
	
}
