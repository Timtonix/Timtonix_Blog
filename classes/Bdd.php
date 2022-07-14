<?php

class Bdd
{
    private $host = "localhost";
    private $dbname = "blog";
    private $user = "root";
    private $password = "root";
    protected $pdo;


    public function connect()
    {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $this->pdo;
    }

}