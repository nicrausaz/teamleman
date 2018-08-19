<?php
class DBContext
{
    private $DB_HOST = '192.168.1.124';
    private $DB_NAME = 'DB_TeamLeman';
    private $DB_USER = 'teamlemanserviceaccount';
    private $DB_PASSWORD = 'r5aAlhZNJ2n1WDnMg9Ke';
    public $pdo;

    public function connect () {
        $this->pdo = new PDO('mysql:port=3307;dbname=' . $this->DB_NAME . ';host=' . $this->DB_HOST, $this->DB_USER, $this->DB_PASSWORD);
    }

    public function close () {
        $this->pdo = null;
    }
}
