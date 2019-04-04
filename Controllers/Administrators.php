<?php
require_once "./DB/DBContext.php";

class Administrators {
  public $db;

  function __construct () {
    $this->db = new DBContext();
  }

  public function checkLogin ($username, $password) {
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Administrators WHERE administrator_username = :username');
    $req->bindParam(':username', $username, PDO::PARAM_STR);
    $req->execute();
    $user = $req->fetchAll(PDO::FETCH_ASSOC);

    if (count($user) == 1) {
      if (password_verify($password, $user[0]['administrator_password'])) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}