<?
require_once "./DB/DBContext.php";
class Games {
  function __construct () {
    $this->db = new DBContext();
  }

  public function getTournements () {
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Tournament ORDER BY tournament_id DESC');
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getTournamentGames ($id) {
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Games WHERE fk_game_tournament = :id');
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getLastTournamentGames () {
//     SELECT * FROM T_Tournament WHERE tournament_date <= NOW() ORDER BY tournament_date DESC LIMIT 1
//     SELECT * FROM `T_Games` WHERE SELECT * FROM T_Games WHERE fk_game_tournament = {id}
    $this->db->connect();
    // Get last tournament
    $req = $this->db->pdo->prepare('SELECT * FROM T_Tournament WHERE tournament_date <= NOW() ORDER BY tournament_date DESC LIMIT 1');
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);

    // $req = $this->db->pdo->prepare('SELECT * FROM T_Tournament WHERE tournament_date <= NOW() ORDER BY tournament_date DESC LIMIT 1');
    // $req->execute();
  }
}