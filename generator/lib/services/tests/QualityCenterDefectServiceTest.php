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
		if (getenv('TZ')){
		    $this->timeZone = getenv('TZ');
		}else{
		    $this->timeZone = 'Asia/Jerusalem';
		}
		
		date_default_timezone_set($this->timeZone);
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
	public function testCreate($bugName="tester - disregard",$detectedBy="jess",$owner="jess",$severity="4-Medium",$status="New")
	{
		
		$connection = QualityCenterConnection::getInstance();
		$releaseCycleFilter = new QualityCenterReleaseCycleFilter();
		$releaseCycleService = new QualityCenterReleaseCycleService($connection, $this->domain, $this->project);
		$releaseCycles = $releaseCycleService->search($releaseCycleFilter);
		$releaseCycle = array_pop($releaseCycles);
		/* @var $releaseCycle QualityCenterReleaseCycle */
		
		$defect = new QualityCenterDefect();
		$defect->setName($bugName);
		$defect->setDetectedBy($detectedBy);
		$defect->setOwner($owner);
		$defect->setCreationTime(time());
		$defect->setSeverity($severity);
		$defect->setStatus($status);
		//$defect->setTestReference('Progression');
		$defect->setEnvironment('Development');
		$defect->setReproducibility('Unknown');
		$defect->setReason('New Issue');
		$defect->setDefectType('Functional');
		$defect->setTargetVersion('Gemini');
		$defect->setDeploymentType('SAAS');
		$defect->setTestType('Automation');
		$defect->setType('Bug');
		$defect->setSFID('sf');
		$defect->setPartnerID(0);
		$defect->setDetectedInRcyc($releaseCycle->getId());
		$defect->setClassOfService('2-Gold');
		$defect->setDescription('This app is cool and it works');
		
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
	public function testUpdate($defectId,$summary)
	{
		$updateDefect = new QualityCenterDefect();
		$updateDefect->setSummary($summary);
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

