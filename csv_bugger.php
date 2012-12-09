#!/usr/bin/php
<?php

/* this script accepts a file with the fields delimeted by '||' and submits all bugs included.
Comments are supported and can be accomplished by placing "#" in the beginning of the line 

Example file, file.csv
$ cat file.csv
#############################################################################################################################################################################
Jess is testing something||jess||Linux012||yair||4-Medium||New||Customer site||Always||Code fix||Functional||Bug||Falcon||On Prem||Installation||null||0||2-Gold
# this is a comment
Jess is testing something else||jess||Linux012||jess||5-Minor||New||Customer site||Always||Configuration||Functional||Bug||Falcon||On Prem||Installation||null||0||1-Silver
#############################################################################################################################################################################
*/

define ('PROJ_DIR',dirname(__FILE__));
define ('PRODUCT_VER','Falcon');
define ('TARGET_VER','Gemini');
require_once ('Zend/Test/PHPUnit/ControllerTestCase.php');
require_once PROJ_DIR . '/generator/lib/services/entities/QualityCenterDefectService.php';
require_once PROJ_DIR . '/generator/lib/services/entities/QualityCenterReleaseCycleService.php';

class QualityCenterDefectServiceCLI extends PHPUnit_Framework_TestCase
{
	private $defectService;
	
    public function __construct()
    {
	self::setUp();
	$this->connection = QualityCenterConnection::getInstance();
	$this->defectService = new QualityCenterDefectService($this->connection, $this->domain, $this->project);
    }
    public function new_bug($subject,$creator,$description,$owner=null,$severity='4-Medium',$status='New',$env='Customer site',$reproducibility='Always',$reason='Code fix',$defect_type='Functional',$type='Bug',$product_ver=CURR_VER,$deployment_type='On Prem',$submittion_type='Installation',$SF_ID='sf',$partner_id=0,$customer_type='2-Gold')
    {
	    $releaseCycleFilter = new QualityCenterReleaseCycleFilter();
	    $releaseCycleService = new QualityCenterReleaseCycleService($this->connection, $this->domain, $this->project);
	    $releaseCycles = $releaseCycleService->search($releaseCycleFilter);
	    $releaseCycle = array_pop($releaseCycles);
	    
	    $defect = new QualityCenterDefect();
	    $defect->setName($subject);
	    $defect->setDetectedBy($creator);
	    $defect->setDescription($description);
	    $defect->setOwner($owner);
	    $defect->setCreationTime(time());
	    $defect->setSeverity($severity);
	    $defect->setStatus($status);
	    $defect->setEnvironment($env);
	    $defect->setReproducibility($reproducibility);
	    $defect->setReason($reason);
	    $defect->setType($type);
	    $defect->setDefectType($defect_type);
	    $defect->setDetectionVersion($product_ver);
	    $defect->setTargetVersion(TARGET_VER);
	    $defect->setDeploymentType($deployment_type);
	    $defect->setTestType($submittion_type);
	    $defect->setSFID($SF_ID);
	    $defect->setPartnerID($partner_id);
	    $defect->setDetectedInRcyc($releaseCycle->getId());
	    $defect->setClassOfService($customer_type);
	    $createdDefect = $this->defectService->create($defect);
    }
    protected function tearDown()
    {
	    $this->defectService = null;
	    parent::tearDown();
    }

    /**
    * Prepares the environment before running a test.
    */
    protected function setUp()
    {
	    parent::setUp();
	    
	    $this->server = getenv('QC_SERVER');
	    $this->port = getenv('QC_PORT');
	    $this->username = getenv('QC_USERNAME');
	    $this->password = getenv('QC_PASSWORD');
	    $this->domain = getenv('QC_DOMAIN');
	    $this->project = getenv('QC_PROJECT');
	    $this->timeZone = isset($_ENV['QC_TZ']) ? getenv('QC_TZ') : 'America/New_York';
	    
	    date_default_timezone_set($this->timeZone);
	    $connection = QualityCenterConnection::getInstance($this->server, $this->port, $this->username, $this->password);
	    $this->defectService = new QualityCenterDefectService($connection, $this->domain, $this->project);
    }
}

if ($argc < 2){
    die ("Usage: ".__FILE__. '</path/to/bug/entry/file>'."\n");
}

if (!(getenv('QC_SERVER')&&getenv('QC_PORT')&&getenv('QC_DOMAIN')&&getenv('QC_PROJECT')&&getenv('QC_USERNAME')&&getenv('QC_PASSWORD'))){
    die ('Sorry :( you need to set: QC_SERVER,QC_PORT,QC_DOMAIN,QC_PROJECT,QC_USERNAME,QC_PASSWORD ENV vars for this to work.'."\n");
}
$bugs_file=$argv[1];
$bugs=file($bugs_file);
$qc=new QualityCenterDefectServiceCLI();
for($i=0;$i<count($bugs);$i++){
    if (preg_match('/^\s*#/',$bugs[$i])||preg_match('/^$/',$bugs[$i])){
	continue;
    }
    list($subject,$creator,$description,$owner,$severity,$status,$env,$reproducibility,$reason,$defect_type,$type,$product_ver,$deployment_type,$submittion_type,$SF_ID,$partner_id,$customer_type)=explode('||',trim($bugs[$i]));
    $qc->new_bug($subject,$creator,$description,$owner,$severity,$status,$env,$reproducibility,$reason,$defect_type,$type,$product_ver,$deployment_type,$submittion_type,$SF_ID,$partner_id,$customer_type);
}

?>
