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

    public function addItem ($data) {
      // print_r($data);
      // $this->db->connect();
      // $req = $this->db->pdo->prepare('INSERT INTO T_Shop_Items(shop_item_name, shop_item_price, shop_item_link, shop_item_available)
      //   VALUES (:name, :price, :link, :available);');
      // $req->bindParam(':name', $data['name'], PDO::PARAM_STR);
      // $req->bindParam(':price', $data['price'], PDO::PARAM_STR);
      // $req->bindParam(':link', $data['link'], PDO::PARAM_STR);
      // if (isset($data['available'])) {
      //   $req->bindParam(':available', true, PDO::PARAM_BOOL);
      // } else {
      //   $req->bindParam(':available', false, PDO::PARAM_BOOL);
      // }
      // $req->execute();
    }

    public function editItem () {
      $this->db->connect();
      $req = $this->db->pdo->prepare('SELECT * FROM T_Shop_Items');
      $req->execute();
      return $req->fetchAll(PDO::FETCH_ASSOC);
    }
  }