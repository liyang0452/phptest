<?php
require_once  __DIR__ . '/lib/QualityCenterConnection.php';
if (getenv('QC_SERVER')&&getenv('QC_PORT')&&getenv('QC_DOMAIN')&&getenv('QC_PROJECT')&&getenv('QC_USERNAME')&&getenv('QC_PASSWORD')){
    echo "Using credentials from ENV vars\n";
    $server=getenv('QC_SERVER');
    $port=getenv('QC_PORT');
    $domain=getenv('QC_DOMAIN');
    $project=getenv('QC_PROJECT');
    $username=getenv('QC_USERNAME');
    $password=getenv('QC_PASSWORD');
}elseif($argc < 7){
    die('Usage: ' . __FILE__ . ' <qc server> <port> <domain> <project> <user> <passwd>'."\n");
    list($file, $server, $port, $domain, $project, $username, $password) = $argv;
}

QualityCenterRestGenerator::init($server, $port, $domain, $project, $username, $password);

class QualityCenterRestGenerator
{
	/**
	 * @var QualityCenterConnection
	 */
	static protected $connection = null;
	
	/**
	 * @var SimpleXMLElement
	 */
	static protected $listsXml = null;
	
	/**
	 * @var string
	 */
	static protected $domain = null;
	
	/**
	 * @var string
	 */
	static protected $project = null;
	
	/**
	 * @var string
	 */
	static protected $currentEntity = null;
	
	static public function init($server, $port, $domain, $project, $username, $password)
	{
		self::$domain = $domain;
		self::$project = $project;
		self::$connection = QualityCenterConnection::getInstance($server, $port, $username, $password);
		
		$action = 'rest/domains/%s/projects/%s/customization/lists';
		$lists = self::$connection->get($action, self::$domain, self::$project);
		file_put_contents('xml/lists.xml', $lists);
		self::$listsXml = new SimpleXMLElement($lists);
		
		self::generateEntities();
	}
	
	/**
	 * @return SimpleXMLElement
	 */
	static protected function getList($listId)
	{
		$paths = self::$listsXml->xpath("/Lists/List[Id = '$listId']");
		if(count($paths))
			return reset($paths);
		
		return null;
	}
	
	static protected function generateEntities()
	{
		$action = 'rest/domains/%s/projects/%s/customization/entities';
		$entities = self::$connection->get($action, self::$domain, self::$project);
		file_put_contents('xml/entities.xml', $entities);
		$entitiesXml = new SimpleXMLElement($entities);
		
		$action = 'rest/domains/%s/projects/%s/customization/entities/%s/fields';
		foreach($entitiesXml as $entityXml)
		{
			/* @var $entityXml SimpleXMLElement */
			$entityType = $entityXml->Name;
			self::$currentEntity = $entityType;
			$objectName = self::translateToObjectName($entityType);
			
			$fields = self::$connection->get($action, self::$domain, self::$project, $entityType);
			if (!is_dir('xml/entities')){
			    mkdir('xml/entities',0755,true);
			}
			file_put_contents("xml/entities/$entityType.fields.xml", $fields);
			$fieldsXml = new SimpleXMLElement($fields);
			
			self::generateEntityClass($entityType, $fieldsXml);
			self::generateEntityFilter($entityType, $fieldsXml);
			self::generateEntityService($entityType, $fieldsXml);
		}
	}

	static protected function translateToObjectName($name)
	{
		return preg_replace('/[^\w\d]/', '', ucwords(str_replace('-', ' ', $name)));
	}
	
	static protected function generateEntityAttribute($attributeName, SimpleXMLElement $fieldXml)
	{
		$fieldAttributes = $fieldXml->attributes();
		$attributeDescription = $fieldAttributes->Label;
		$attributeSystemName = $fieldAttributes->Name;
		$attributeType = "$fieldXml->Type";
			
		$varName = lcfirst($attributeName);
		$phpType = 'string';
		$validation = '';
		$getterCast = '';
		$setterCast = '';
		
		switch($attributeType)
		{
			case 'String':
				if(isset($fieldXml->Size) && is_numeric("$fieldXml->Size") && intval($fieldXml->Size) > 0)
				{
					$validation = "
		if(strlen(\${$varName}) > {$fieldXml->Size})
			throw new QualityCenterInputException(\"Input [$attributeName] value [\${$varName}] excceeded maximum length [{$fieldXml->Size}]\", QualityCenterInputException::SIZE, strlen(\${$varName}), {$fieldXml->Size});
		";
			}
				break;
				
			case 'Date':
				$phpType = 'int';
				$attributeDescription .= ' as linux timestamp';
				
				$getterCast = "
		\${$varName}Date = date_parse_from_format('Y-m-d', \${$varName});
		\${$varName} = mktime(0, 0, 0, \${$varName}Date['month'], \${$varName}Date['day'], \${$varName}Date['year']);
		";
				$setterCast = "
		\${$varName} = date('Y-m-d', \${$varName});";
			
				break;
				
			case 'LookupList':
				$nodeName = 'List-Id';
				$xmlList = self::getList($fieldXml->$nodeName);
				if(!$xmlList)
				{
					echo "List id [{$fieldXml->$nodeName}] not found for attribute [$varName] for entity [" . self::$currentEntity . "]";
				}
				else
				{
					$validation = "
		\$validValues = array(";
					
					foreach($xmlList->Items->children() as $item)
					{
						/* @var $item SimpleXMLElement */
						$attributes = $item->attributes();
						$validation .= "
			'{$attributes->value}',";
					}
					
					$validation .= "
		);
					
		if(\${$varName} instanceof QualityCenterExpression)
		{
			\${$varName}->validateEnum('$attributeName', \$validValues);
		}			
		elseif(!in_array(\${$varName}, \$validValues))
		{
			throw new QualityCenterInputException(\"Input [$attributeName] value [\${$varName}] is not acceptable value, supported list [\" . print_r(\$validValues, true) . \"]\", QualityCenterInputException::INVALID_ENUM, \${$varName}, \$validValues);
		}
		";
				}
				break;
		}
		
		return "
	/**
	 * Get $attributeDescription
	 * @return $phpType
	 */
	public function get{$attributeName}()
	{
		if(!isset(\$this->fields['$attributeSystemName']))
			return null;
			
		\${$varName} = \$this->fields['$attributeSystemName'];{$getterCast}
		return \${$varName};
	}
	
	/**
	 * Set $attributeDescription
	 * @param $phpType \${$varName}
	 */
	public function set{$attributeName}(\${$varName})
	{{$setterCast}{$validation}
		return \$this->fields['$attributeSystemName'] = \${$varName};
	}
	";
	}
	
	static protected function generateEntityClass($entityType, SimpleXMLElement $fieldsXml)
	{
		$objectName = self::translateToObjectName($entityType);
		$className = 'QualityCenter' . $objectName;
		echo "Generating $className\n";
		
		$class = "<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntity.php';
require_once __DIR__ . '/../../exceptions/QualityCenterInputException.php';
require_once __DIR__ . '/../../filters/expressions/QualityCenterExpression.php';

/**
 * @package External
 * @subpackage qc.entities
 */
class $className extends QualityCenterEntity
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntity::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return '$entityType';
	}
	";
	
		$attributeNames = array();
		foreach($fieldsXml as $fieldXml)
		{
			/* @var $fieldXml SimpleXMLElement */
			$fieldAttributes = $fieldXml->attributes();
			$attributeName = self::translateToObjectName("$fieldAttributes->Name");
			$attributeNames[] = strtolower($attributeName);
			$class .= self::generateEntityAttribute($attributeName, $fieldXml);
		}
	
		foreach($fieldsXml as $fieldXml)
		{
			/* @var $fieldXml SimpleXMLElement */
			$fieldAttributes = $fieldXml->attributes();
			$attributeName = self::translateToObjectName("$fieldAttributes->Label");
			if($attributeName && preg_match('/^[a-zA-Z][a-z-A-Z0-9]*$/', $attributeName) && !in_array(strtolower($attributeName), $attributeNames))
			{
				$attributeNames[] = strtolower($attributeName);
				$class .= self::generateEntityAttribute($attributeName, $fieldXml);
			}
		}
		
		$class .= '
}
';
		file_put_contents("lib/objects/entities/$className.php", $class);
	}
	
	static protected function generateEntityService($entityType, SimpleXMLElement $fieldsXml)
	{
		$objectName = self::translateToObjectName($entityType);
		$entityName = lcfirst($objectName);
		$objectClassName = 'QualityCenter' . $objectName;
		$className = 'QualityCenter' . $objectName . 'Service';
		echo "Generating $className\n";
		
		$class = "<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/../QualityCenterEntityService.php';
require_once __DIR__ . '/../../objects/entities/$objectClassName.php';
require_once __DIR__ . '/../../filters/entities/{$objectClassName}Filter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class $className extends QualityCenterEntityService
{
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::getQualityCenterEntityType()
	 */
	public function getQualityCenterEntityType()
	{
		return '$entityType';
	}
	
	/* (non-PHPdoc)
	 * @see QualityCenterEntityService::xmlToObject()
	 */
	protected function xmlToObject(SimpleXMLElement \$xml)
	{
		return new $objectClassName(\$xml);
	}
	
	/**
	 * @param $objectClassName \${$entityName}
	 * @return $objectClassName
	 */
	public function create($objectClassName \${$entityName})
	{
		return \$this->createEntity(\${$entityName});
	}
	
	/**
	 * @param int \${$entityName}Id
	 */
	public function delete(\${$entityName}Id)
	{
		\$this->deleteEntity(\${$entityName}Id);
	}
	
	/**
	 * @param int \${$entityName}Id
	 * @return $objectClassName
	 */
	public function get(\${$entityName}Id)
	{
		return \$this->getEntity(\${$entityName}Id);
	}
	
	/**
	 * @param {$objectClassName}Filter \$filter
	 * @return array<$objectClassName>
	 */
	public function search({$objectClassName}Filter \$filter)
	{
		return \$this->searchEntities(\$filter);
	}
	
	/**
	 * @param int \${$entityName}Id
	 * @param $objectClassName \${$entityName}
	 * @return $objectClassName
	 */
	public function update(\${$entityName}Id, $objectClassName \${$entityName})
	{
		return \$this->updateEntity(\${$entityName}Id, \${$entityName});
	}
}
";
		
		file_put_contents("lib/services/entities/$className.php", $class);
	}
	
	static protected function generateEntityFilter($entityType, SimpleXMLElement $fieldsXml)
	{
		$objectName = self::translateToObjectName($entityType);
		$className = 'QualityCenter' . $objectName . 'Filter';
		echo "Generating $className\n";
		
		$class = "<?php
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
class $className extends QualityCenterFilter
{
	/**
	 * @var array
	 */
	protected function _getValidFields()
	{
		return array(";

		foreach($fieldsXml as $fieldXml)
		{
			/* @var $fieldXml SimpleXMLElement */
			$fieldAttributes = $fieldXml->attributes();
			$class .= "
			'{$fieldAttributes->Name}',";
		}
		$class .= "
		);
	}
	";
	
		$attributeNames = array();
		foreach($fieldsXml as $fieldXml)
		{
			/* @var $fieldXml SimpleXMLElement */
			$fieldAttributes = $fieldXml->attributes();
			$attributeName = self::translateToObjectName("$fieldAttributes->Name");
			$attributeNames[] = strtolower($attributeName);
			$class .= self::generateEntityAttribute($attributeName, $fieldXml);
		}
	
		foreach($fieldsXml as $fieldXml)
		{
			/* @var $fieldXml SimpleXMLElement */
			$fieldAttributes = $fieldXml->attributes();
			$attributeName = self::translateToObjectName("$fieldAttributes->Label");
			if($attributeName && preg_match('/^[a-zA-Z][a-z-A-Z0-9]*$/', $attributeName) && !in_array(strtolower($attributeName), $attributeNames))
			{
				$attributeNames[] = strtolower($attributeName);
				$class .= self::generateEntityAttribute($attributeName, $fieldXml);
			}
		}
		
		$class .= "
}
";
	
		file_put_contents("lib/filters/entities/$className.php", $class);
	}
}

