<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
class DB {
    private $host;
    private $user;
    private $password;
    private $dbname;
    public $conn;

    public function __construct($host = 'localhost', $user = 'root', $password = '', $dbname = 'school') {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname) or die("Failed to connect to MySQLi" . $this->conn->connect_error) ;
    }

}