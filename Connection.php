<?php
declare(strict_types = 1);

class Connection
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'becode';
    private $connect;

    public function __construct()
    {
        $connectionString = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';chartset=utf8';
        try {
            $this->connect = new PDO($connectionString, $this->user, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'connected yeah!';
        } catch (Exception $e) {
            $this->connect = 'Error connecting';
            echo "ERROR: " . $e->getMessage();
        }
    }
}

$connect = new Connection();