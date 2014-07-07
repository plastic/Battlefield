<?php
namespace spec\Plastic\BattleLog;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SoldierSpec extends ObjectBehavior
{
	public function it_is_initializable()
	{
		$this->shouldHaveType('Plastic\BattleLog\Soldier');
	}

	public function it_return_name()
	{
		$this->setName('plastic-pg');
		$this->getName()->shouldReturn('plastic-pg');
	}
	
	public function it_request_soldier()
	{
		$this->setName('plastic-pg');
		$this->requestSoldier($this->getName())->shouldReturn('plastic-pg');
	}
}