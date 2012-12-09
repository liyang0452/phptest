<?php
/**
 * @package External
 * @subpackage qc.services
 */
require_once __DIR__ . '/QualityCenterService.php';
require_once __DIR__ . '/../objects/QualityCenterUser.php';
require_once __DIR__ . '/../filters/QualityCenterUserFilter.php';

/**
 * @package External
 * @subpackage qc.services
 */
class QualityCenterUserService extends QualityCenterService
{
	/**
	 * @param SimpleXMLElement $xml
	 * @return array<QualityCenterUser>
	 */
	protected function xmlToObjects(SimpleXMLElement $xml)
	{
		$array = array();
		foreach($xml as $userXml)
			$array[] = new QualityCenterUser($userXml);
			
		return $array;
	}
	
	/**
	 * @param QualityCenterUser $user
	 * @return QualityCenterUser
	 */
	public function create(QualityCenterUser $user)
	{
		$action = 'rest/domains/%s/projects/%s/customization/users';
		$xml = $this->connection->setExpectedHttpCode(201);
		$xml = $this->connection->post($action, $user->toXml()->saveXML(), $this->domain, $this->project);
		return new QualityCenterUser(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param int $id
	 */
	public function delete($id)
	{
		$action = 'rest/domains/%s/projects/%s/customization/users/%d';
		$this->connection->delete($action, $this->domain, $this->project, $id);
	}
	
	/**
	 * @param int $id
	 * @return QualityCenterUser
	 */
	public function get($id)
	{
		$action = 'rest/domains/%s/projects/%s/customization/users/%d';
		$xml = $this->connection->get($action, $this->domain, $this->project, $id);
		return new QualityCenterUser(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param QualityCenterFilter $filter
	 * @return array<QualityCenterUser>
	 */
	public function search(QualityCenterFilter $filter)
	{
		$action = 'rest/domains/%s/projects/%s/customization/users?query={%s}';
		$xml = $this->connection->get($action, $this->domain, $this->project, $filter);
		return $this->xmlToObjects(new SimpleXMLElement($xml));
	}
	
	/**
	 * @param int $id
	 * @param QualityCenterUser $user
	 * @return QualityCenterUser
	 */
	public function update($id, QualityCenterUser $user)
	{
		$action = 'rest/domains/%s/projects/%s/customization/users/%d';
		$xml = $this->connection->put($action, $user->toXml()->saveXML(), $this->domain, $this->project, $id);
		return new QualityCenterUser(new SimpleXMLElement($xml));
	}
}
