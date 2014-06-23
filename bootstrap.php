<?php
date_default_timezone_set('America/Sao_Paulo');

define('ROOT', realpath(__DIR__) . DIRECTORY_SEPARATOR);

if (! file_exists($autoload = ROOT . DIRECTORY_SEPARATOR . 'vendor/autoload.php')) {
    throw new RuntimeException('Dependencies not installed.');
}

require $autoload;

unset($autoload);