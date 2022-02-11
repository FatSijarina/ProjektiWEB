<?php


class DatabaseMySQLiConfiguration
{
    private $connection;

    private $servername = "localhost";
    private $username = "root";
    private $dbName = "useri";
    private $password = "";

    public function __construct()
    {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
    }

    protected function getConnection()
    {
        return $this->connection;
    }
}


?>