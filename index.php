<?php
require 'bootstrap.php';

$soldier = new Plastic\BattleLog\Soldier();
$soldier->setName('plastic-pg');

echo $soldier->getName();