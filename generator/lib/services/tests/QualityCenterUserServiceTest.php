<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterUserService.php';

/**
 * @package External
 * @subpackage qc.services
 * QualityCenterUserService test case.
 */
class QualityCenterUserServiceTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var QualityCenterUserService
	 */
	private $userService;
	
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
		$this->userService = new QualityCenterUserService($connection, $domain, $project);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown()
	{
		$this->userService = null;
		parent::tearDown();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct()
	{
	}
	
	/**
	 * Tests QualityCenterUserService->create()
	 */
	public function testCreate()
	{
//		$user = new QualityCenterUser();
//		$user->setName('test1 name');
//		
//		$createdUser = $this->userService->create($user);
//		$this->assertNotNull($createdUser);
//		$this->assertType('QualityCenterUser', $createdUser);
//		$this->assertNotNull($createdUser->getUserID());
//		$this->assertEquals($user->getSubject(), $createdUser->getSubject());
//		$this->assertEquals($user->getSummary(), $createdUser->getSummary());
//		return $createdUser->getUserID();
	}
	
	/**
	 * Tests QualityCenterUserService->get()
	 * @depends testCreate
	 */
	public function testGet($userId)
	{
//		$user = $this->userService->get($userId);
//		$this->assertNotNull($user);
//		$this->assertNotNull($user->getUserID());
//		$this->assertType('QualityCenterUser', $user);
//		return $user->getUserID();
	}
	
	/**
	 * Tests QualityCenterUserService->update()
	 * @depends testGet
	 */
	public function testUpdate($userId = null)
	{
//		$updateUser = new QualityCenterUser();
//		$updateUser->setSummary('updated test1');
//		$updatedUser = $this->userService->update($userId, $updateUser);
//		$this->assertNotNull($updatedUser);
//		$this->assertType('QualityCenterUser', $updatedUser);
//		$this->assertNotNull($updatedUser->getUserID());
//		$this->assertEquals($updateUser->getSummary(), $updatedUser->getSummary());
//		
//		return $updatedUser->getUserID();
	}
	
	/**
	 * Tests QualityCenterUserService->delete()
	 * @depends testUpdate
	 */
	public function testDelete($userId)
	{
//		$this->userService->delete($userId);
//		$user = $this->userService->get($userId);
//		$this->assertNull($user);
	}
	
	/**
	 * Tests QualityCenterUserService->search()
	 */
	public function testSearch()
	{
		$filter = new QualityCenterUserFilter();
		
		$users = $this->userService->search($filter);
		$this->assertNotNull($users);
		$this->assertType('array', $users);
		$this->assertGreaterThan(0, count($users));
		foreach($users as $user)
			$this->assertType('QualityCenterUser', $user);
	}

}

