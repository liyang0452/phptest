<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../entities/QualityCenterDefectService.php';
require_once __DIR__ . '/../entities/QualityCenterReleaseCycleService.php';
require_once __DIR__ . '/../QualityCenterLockService.php';
require_once __DIR__ . '/../QualityCenterVersionService.php';

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

	/**
	 * @var QualityCenterLockService
	 */
	private $lockService;

	/**
	 * @var QualityCenterVersionService
	 */
	private $versionService;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp()
	{
		parent::setUp();
		
		$server = $_ENV['QC_SERVER'];
		$port = $_ENV['QC_PORT'];
		$username = $_ENV['QC_USERNAME'];
		$password = $_ENV['QC_PASSWORD'];
		$domain = $_ENV['QC_DOMAIN'];
		$project = $_ENV['QC_PROJECT'];
		$timeZone = isset($_ENV['QC_TZ']) ? $_ENV['QC_TZ'] : 'America/New_York';
		
		date_default_timezone_set($timeZone);
		$connection = QualityCenterConnection::getInstance($server, $port, $username, $password);
		$this->defectService = new QualityCenterDefectService($connection, $domain, $project);
		$this->lockService = new QualityCenterLockService($connection, $domain, $project);
		$this->versionService = new QualityCenterVersionService($connection, $domain, $project);
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
		$domain = $_ENV['QC_DOMAIN'];
		$project = $_ENV['QC_PROJECT'];
		
		$connection = QualityCenterConnection::getInstance();
		$releaseCycleFilter = new QualityCenterReleaseCycleFilter();
		$releaseCycleService = new QualityCenterReleaseCycleService($connection, $domain, $project);
		$releaseCycles = $releaseCycleService->search($releaseCycleFilter);
		$releaseCycle = array_pop($releaseCycles);
		/* @var $releaseCycle QualityCenterReleaseCycle */
		
		$defect = new QualityCenterDefect();
		$defect->setSummary('test1 sum');
		$defect->setDetectedBy('tantan');
		$defect->setAssignedTo('tantan');
		$defect->setCreationTime(time());
		$defect->setSeverity('4-Medium');
		$defect->setStatus('New');
		$defect->setTestType('Progression');
		$defect->setEnvironment('Development');
		$defect->setReproducibility('Unknown');
		$defect->setReason('New Issue');
		$defect->setDefectType('Functional');
		$defect->setTargetVersion('Gemini');
		$defect->setDeploymentType('SAAS');
		$defect->setType('Ticket');
		$defect->setSFID('sf');
		$defect->setPartnerID(0);
		$defect->setDetectedInRcyc($releaseCycle->getId());
		$defect->setClassOfService('2-Gold');
		
		$createdDefect = $this->defectService->create($defect);
		$this->assertNotNull($createdDefect);
		$this->assertType('QualityCenterDefect', $createdDefect);
		$this->assertNotNull($createdDefect->getDefectID());
		$this->assertEquals($defect->getSubject(), $createdDefect->getSubject());
		$this->assertEquals($defect->getSummary(), $createdDefect->getSummary());
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
		$this->assertNotNull($defect->getDefectID());
		$this->assertType('QualityCenterDefect', $defect);
		return $defect->getDefectID();
	}
	
	/**
	 * Tests QualityCenterDefectService->update()
	 * @depends testGet
	 */
	public function testUpdate($defectId = null)
	{
		$this->lockService->lock('defect', $defectId);
		$this->versionService->checkOut('defect', $defectId);
		
		$defect = new QualityCenterDefect();
		$defect->setSummary('updated test1');
		$updatedDefect = $this->defectService->update($defectId, $defect);
		$this->assertNotNull($updatedDefect);
		$this->assertType('QualityCenterDefect', $updatedDefect);
		$this->assertNotNull($updatedDefect->getDefectID());
		$this->assertEquals($defect->getSummary(), 'updated test1');
		
		$this->versionService->checkIn('defect', $defectId, 'just a test');
		$this->lockService->unlock('defect', $defectId);
		
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
		$filter->setAssignedTo('tantan');
		
		$defects = $this->defectService->search($filter);
		$this->assertNotNull($defects);
		$this->assertType('array', $defects);
		$this->assertGreaterThan(0, count($defects));
		foreach($defects as $defect)
			$this->assertType('QualityCenterDefect', $defect);
	}

}

