<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterAttachment.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterAttachmentFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterAttachmentService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'attachment';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterAttachment($xml);
	}
	
	/**
	 * @param QualityCenterAttachment $attachment
	 * @return QualityCenterAttachment
	 */
	public function create(QualityCenterAttachment $attachment)
	{
		return $this->createEntity($attachment);
	}
	
	/**
	 * @param int $attachmentId
	 */
	public function delete($attachmentId)
	{
		$this->deleteEntity($attachmentId);
	}
	
	/**
	 * @param int $attachmentId
	 * @return QualityCenterAttachment
	 */
	public function get($attachmentId)
	{
		return $this->getEntity($attachmentId);
	}
	
	/**
	 * @param QualityCenterAttachmentFilter $filter
	 * @return array<QualityCenterAttachment>
	 */
	public function search(QualityCenterAttachmentFilter $filter)
	{
		return $this->searchEntities($filter);
	}
	
	/**
	 * @param int $attachmentId
	 * @param QualityCenterAttachment $attachment
	 * @return QualityCenterAttachment
	 */
	public function update($attachmentId, QualityCenterAttachment $attachment)
	{
		return $this->updateEntity($attachmentId, $attachment);
	}
}
