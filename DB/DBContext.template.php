<?php
class DBContext
{
    private $DB_HOST = '';
    private $DB_NAME = '';
    private $DB_USER = '';
    private $DB_PASSWORD = '';
    public $pdo;

    public function connect () {
        $this->pdo = new PDO('mysql:port=3307;dbname=' . $this->DB_NAME . ';host=' . $this->DB_HOST, $this->DB_USER, $this->DB_PASSWORD);
    }

    public function close () {
        $this->pdo = null;
    }
}
