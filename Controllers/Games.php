<?
require_once "./DB/DBContext.php";
class Games {
  function __construct () {
    $this->db = new DBContext();
  }

  public function getTournements () {
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Tournament WHERE tournament_date < NOW() ORDER BY tournament_date DESC');
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

  public function getTournamentPlayers ($id) {
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Play_In INNER JOIN T_Players ON player_id = fk_player WHERE fk_tournament = :id');
    $req->bindParam(':id', $id, PDO::PARAM_STR);
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
  }
}