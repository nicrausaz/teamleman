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

    public function addPlayer ($data) {
      $this->db->connect();
      $req = $this->db->pdo->prepare('INSERT INTO T_Players (player_name, player_firstname, player_birthdate, player_size, player_club, player_email, player_fiba_profile)
        VALUES (:firstname, :name, :birthdate, :size, :club, :email, :link);');
      $req->bindParam(':firstname', $data['new_fsname'], PDO::PARAM_STR);
      $req->bindParam(':name', $data['new_name'], PDO::PARAM_STR);
      $req->bindParam(':birthdate', $data['new_birthdate'], PDO::PARAM_STR);
      $req->bindParam(':size', $data['new_size'], PDO::PARAM_STR);
      $req->bindParam(':club', $data['new_club'], PDO::PARAM_STR);
      $req->bindParam(':email', $data['new_email'], PDO::PARAM_STR);
      $req->bindParam(':link', $data['new_link'], PDO::PARAM_STR);
      $req->execute();
    }

    public function editPlayer ($data) {
      $this->db->connect();
      $req = $this->db->pdo->prepare('UPDATE T_Players SET player_name=:firstname,player_firstname=:name,player_birthdate=:birthdate,player_size=:size,player_club=:club,player_email=:email,player_fiba_profile=:link
      WHERE player_id=:id');
      $req->bindParam(':firstname', $data['fsname'], PDO::PARAM_STR);
      $req->bindParam(':name', $data['name'], PDO::PARAM_STR);
      $req->bindParam(':birthdate', $data['birthdate'], PDO::PARAM_STR);
      $req->bindParam(':size', $data['size'], PDO::PARAM_STR);
      $req->bindParam(':club', $data['club'], PDO::PARAM_STR);
      $req->bindParam(':email', $data['email'], PDO::PARAM_STR);
      $req->bindParam(':link', $data['link'], PDO::PARAM_STR);
      $req->bindParam(':id', $data['id'], PDO::PARAM_STR);
      $req->execute();
    }
  }