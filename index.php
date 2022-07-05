<?php
require_once 'bootstrap.php';
use Dotenv\Dotenv as Env;
use Cashalot\Model\Db;
$dotenv = Env::createImmutable(__DIR__.'/');
$dotenv->load();
$db = new Db($_ENV['DB_HOST'],$_ENV['DB_NAME'],$_ENV['DB_USER'],$_ENV['DB_PASS']);
//echo $_ENV['DB_HOST');
var_dump($db);