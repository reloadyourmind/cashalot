<?php
namespace Cashalot\Model;

class Db
{
    public $dbUser;
    public $dbPassword;
    public $dbName;
    public $dbHost;

    public function __construct(
        $dbHost,
        $dbName,
        $dbUser,
        $dbPassword
    )
    {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPassword = $dbPassword;
    }

    public function connect() {
        return new \PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPassword);
    }

    private function disconnect(PDO &$connection) {
        return $connection = null;
    }

}