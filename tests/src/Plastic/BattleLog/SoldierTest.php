<?php
namespace Plastic\BattleLog;

class SoldierTest extends \PHPUnit_Framework_TestCase
{
	public $Soldier = null;
	
	public function setUp()
	{
		$this->Soldier = new Soldier();
	}
	
	public function tearDown()
	{
		unset($this->Soldier);
	}
	
	public function testName()
	{
		$this->assertEmpty($this->Soldier->getName());
		
		$this->Soldier->setName('plastic-pg');
		$this->assertEquals('plastic-pg', $this->Soldier->getName());
	}
	
	/**
	 * @expectedException InvalidArgumentException
	 * @expectedExceptionMessage Invalid name
	 * @expectedExceptionCode 1
	 */
	public function testException()
	{
		$this->Soldier->setName(array());
	}
}
