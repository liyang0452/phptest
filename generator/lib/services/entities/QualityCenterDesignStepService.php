<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/QualityCenterDesignStep.php';
require_once __DIR__ . '/../../filters/entities/QualityCenterDesignStepFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterDesignStepService extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return 'design-step';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement $xml)
	{
		return new QualityCenterDesignStep($xml);
	}
	
	/**
	 * @param QualityCenterDesignStep $designStep
	 * @return QualityCenterDesignStep
	 */
	public function create(QualityCenterDesignStep $designStep)
	{
		return $this->createEntity($designStep);
	}
	
	/**
	 * @param int $designStepId
	 */
	public function delete($designStepId)
	{
		$this->deleteEntity($designStepId);
	}
	
	/**
	 * @param int $designStepId
	 * @return QualityCenterDesignStep
	 */
	public function get($designStepId)
	{
		return $this->getEntity($designStepId);
	}
	
	/**
	 * @param QualityCenterDesignStepFilter $filter
	 * @param QualityCenterPager $pager
	 * @return array<QualityCenterDesignStep>
	 */
	public function search(QualityCenterDesignStepFilter $filter, QualityCenterPager $pager = null)
	{
		return $this->searchEntities($filter, $pager);
	}
	
	/**
	 * @param int $designStepId
	 * @param QualityCenterDesignStep $designStep
	 * @return QualityCenterDesignStep
	 */
	public function update($designStepId, QualityCenterDesignStep $designStep)
	{
		return $this->updateEntity($designStepId, $designStep);
	}
}
