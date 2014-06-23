<?php 
namespace Plastic\BattleLog;

class Soldier
{
	private $name;
	
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
}