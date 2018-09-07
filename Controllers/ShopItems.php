<?php
  require_once "./DB/DBContext.php";
  class ShopItems {
    public $db;

    function __construct () {
      $this->db = new DBContext();
    }

    public function getAll () {
      $this->db->connect();
      $req = $this->db->pdo->prepare('SELECT * FROM T_Shop_Items');
      $req->execute();
      return $req->fetchAll(PDO::FETCH_ASSOC);
    }
  }