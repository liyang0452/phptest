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
	
	/**
	 * @var int
	 */
	protected $totalResults = null;
	
	public function __toString()
	{
		if(!is_null($this->pageSize))
		{
			$startIndex = $this->pageIndex * $this->pageSize + 1;
			return "page-size={$this->pageSize}&start-index={$startIndex}";
		}
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
	
	/**
	 * @return int $totalResults
	 */
	public function getTotalResults()
	{
		return $this->totalResults;
	}

	/**
	 * @param int $totalResults
	 */
	public function setTotalResults($totalResults)
	{
		$this->totalResults = $totalResults;
	}
}
