<?php 
namespace Plastic\BattleLog;

use Plastic\BattleLog\Requester as Request;

class Soldier
{
	private $name;
	private $soldier;
	
	public function setName($name)
	{
		if (empty($name)) {
			throw new \InvalidArgumentException('Invalid name', 1);
		}
		
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}

    public function requestSoldier($soldier)
    {
		$log = new Request("http://api.bf4stats.com/api/playerInfo?plat=ps3&name={$soldier}&output=json&opt=names,stats");
		
		if (!$log) {
			throw new \Exception('Indefined request');
		}
		
		$this->soldier = json_decode($log->getResult(), true);
		
		if (array_key_exists('error', $this->soldier)) {
			throw new \Exception('Soldier not found');
		}
		
		return $this->soldier['player']['name'];
    }
}
