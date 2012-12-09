<?php
/**
 * @package External
 * @subpackage qc.filters
 */
class QualityCenterPager
{
	/**
	 * @var int
	 */
	protected $pageIndex = null;
	
	/**
	 * @var int
	 */
	protected $pageSize = null;
	
	public function __toString()
	{
		if(!is_null($this->pageSize))
		{
			$startIndex = $this->pageIndex * $this->pageSize;
			return "page-size={$this->pageSize}&start-index={$startIndex}";
		}
	}
	
	/**
	 * @return int $pageIndex
	 */
	public function getPageIndex()
	{
		return $this->pageIndex;
	}

	/**
	 * @return int $pageSize
	 */
	public function getPageSize()
	{
		return $this->pageSize;
	}

	/**
	 * @param int $pageIndex
	 */
	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
	}

	/**
	 * @param int $pageSize
	 */
	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}
}
