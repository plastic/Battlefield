<?php
require 'bootstrap.php';

use Plastic\BattleLog\Soldier as Soldier;

$soldier = new Soldier();
$soldier->setName('plastic-pg');
echo $soldier->requestSoldier($soldier->getName());