<?
require_once "./DB/DBContext.php";

class Administrators {
  public $db;

  function __construct () {
    $this->db = new DBContext();
  }

  public function checkLogin ($username, $password) {
    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Administrators WHERE administrator_username = :username AND administrator_password = :password');
    $req->bindParam(':username', $username, PDO::PARAM_STR);
    $req->bindParam(':password', $hashedpwd, PDO::PARAM_STR);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
  }
}