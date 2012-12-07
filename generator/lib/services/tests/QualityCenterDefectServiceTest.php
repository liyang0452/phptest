<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../entities/QualityCenterDefectService.php';
require_once __DIR__ . '/../entities/QualityCenterReleaseCycleService.php';
require_once 'PHPUnit/Autoload.php';


/**
 * @package External
 * @subpackage qc.services
 * QualityCenterDefectService test case.
 */
class QualityCenterDefectServiceTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var QualityCenterDefectService
	 */
	private $defectService;
	private $server,$port,$username,$password,$domain,$project,$timeZone;	
	/**
	 * Prepares the environment before running a test.
	 */
	public function setUp()
	{
		parent::setUp();
		
		$this->server = getenv('QC_SERVER');
		$this->port = getenv('QC_PORT');
		$this->username = getenv('QC_USERNAME');
		$this->password = getenv('QC_PASSWORD');
		$this->domain = getenv('QC_DOMAIN');
		$this->project = getenv('QC_PROJECT');
		$this->timeZone = isset($_ENV['QC_TZ']) ? getenv('QC_TZ') : 'America/New_York';
		
		date_default_timezone_set($timeZone);
		$connection = QualityCenterConnection::getInstance($this->server, $this->port, $this->username, $this->password);
		$this->defectService = new QualityCenterDefectService($connection, $this->domain, $this->project);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown()
	{
		$this->defectService = null;
		parent::tearDown();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct()
	{
	}
	
	/**
	 * Tests QualityCenterDefectService->create()
	 */
	public function testCreate()
	{
		
		$connection = QualityCenterConnection::getInstance();
		$releaseCycleFilter = new QualityCenterReleaseCycleFilter();
		$releaseCycleService = new QualityCenterReleaseCycleService($connection, $this->domain, $this->project);
		$releaseCycles = $releaseCycleService->search($releaseCycleFilter);
		$releaseCycle = array_pop($releaseCycles);
		/* @var $releaseCycle QualityCenterReleaseCycle */
		
		$defect = new QualityCenterDefect();
		$defect->setName('test1 sum');
		$defect->setDetectedBy('jess');
		$defect->setOwner('jess');
		$defect->setCreationTime(time());
		$defect->setSeverity('4-Medium');
		$defect->setStatus('New');
		//$defect->setTestReference('Progression');
		$defect->setUser02('Development');
		$defect->setUser03('Unknown');
		$defect->setUser07('New Issue');
		$defect->setUser08('Functional');
		$defect->setUser09('Gemini');
		$defect->setUser10('SAAS');
		$defect->setUser01('Automation');
		$defect->setUser11('Bug');
		$defect->setUser12('sf');
		$defect->setUser13(0);
		$defect->setDetectedInRcyc($releaseCycle->getId());
		$defect->setUser25('2-Gold');
		
		$createdDefect = $this->defectService->create($defect);
		$this->assertNotNull($createdDefect);
		//$this->assertType('QualityCenterDefect', $createdDefect);
		$this->assertNotNull($createdDefect->getDefectID());
		$this->assertEquals($defect->getSubject(), $createdDefect->getSubject());
		$this->assertEquals($defect->getName(), $createdDefect->getName());
		return $createdDefect->getDefectID();
	}
	
	/**
	 * Tests QualityCenterDefectService->get()
	 * @depends testCreate
	 */
	public function testGet($defectId)
	{
		$defect = $this->defectService->get($defectId);
		$this->assertNotNull($defect);
		$this->assertNotNull($defectId);
		//$this->assertType('QualityCenterDefect', $defect);
		return $defect;
	}
	
	/**
	 * Tests QualityCenterDefectService->update()
	 * @depends testGet
	 */
	public function testUpdate($defectId = null)
	{
		$updateDefect = new QualityCenterDefect();
		$updateDefect->setSummary('updated test1');
		$updatedDefect = $this->defectService->update($defectId, $updateDefect);
		$this->assertNotNull($updatedDefect);
		$this->assertType('QualityCenterDefect', $updatedDefect);
		$this->assertNotNull($updatedDefect->getDefectID());
		$this->assertEquals($updateDefect->getSummary(), $updatedDefect->getSummary());
		
		return $updatedDefect->getDefectID();
	}
	
	/**
	 * Tests QualityCenterDefectService->delete()
	 * @depends testUpdate
	 */
	public function testDelete($defectId)
	{
		$this->defectService->delete($defectId);
		$defect = $this->defectService->get($defectId);
		$this->assertNull($defect);
	}
	
	/**
	 * Tests QualityCenterDefectService->search()
	 */
	public function testSearch()
	{
		$filter = new QualityCenterDefectFilter();
		$filter->setOwner('tantan');
		
		$defects = $this->defectService->search($filter);
		$this->assertNotNull($defects);
		$this->assertType('array', $defects);
		$this->assertGreaterThan(0, count($defects));
		foreach($defects as $defect)
			$this->assertType('QualityCenterDefect', $defect);
	}

}

