<?
require_once "./DB/DBContext.php";
class Tournaments {
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

  public function addTournament ($data) {
    $this->db->connect();
    $req = $this->db->pdo->prepare('INSERT INTO T_Tournament (`tournament_name`, `tournament_location`, `tournament_date`, `tournament_final_ranking`, `tournament_fiba_link`)
      VALUES (:name, :location, :date, :ranking, :link);');
    $req->bindParam(':name', $data['name'], PDO::PARAM_STR);
    $req->bindParam(':location', $data['location'], PDO::PARAM_STR);
    $req->bindParam(':date', $data['date'], PDO::PARAM_STR);
    $req->bindParam(':ranking', $data['ranking'], PDO::PARAM_STR);
    $req->bindParam(':link', $data['link'], PDO::PARAM_STR);
    $req->execute();
  }

  public function editTournament ($data) {
    $this->db->connect();
    $req = $this->db->pdo->prepare('UPDATE T_Tournament SET tournament_name=:name,tournament_location=:location,tournament_date=:date,tournament_final_ranking=:ranking,tournament_fiba_link=:link
    WHERE tournament_id=:id');
    $req->bindParam(':id', $data['id'], PDO::PARAM_STR);
    $req->bindParam(':name', $data['name'], PDO::PARAM_STR);
    $req->bindParam(':location', $data['location'], PDO::PARAM_STR);
    $req->bindParam(':date', $data['date'], PDO::PARAM_STR);
    $req->bindParam(':ranking', $data['ranking'], PDO::PARAM_STR);
    $req->bindParam(':link', $data['link'], PDO::PARAM_STR);
    $req->execute();
  }
}