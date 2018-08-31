<?php
  require_once "./DB/DBContext.php";
  class Players {
    public $db;

    function __construct () {
      $this->db = new DBContext();
    }

    public function getAll () {
      $this->db->connect();
      $req = $this->db->pdo->prepare('SELECT * FROM T_Players');
      $req->execute();
      return $req->fetchAll(PDO::FETCH_ASSOC);
    }
  }