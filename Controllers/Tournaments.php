<?
require_once "./DB/DBContext.php";
class Tournaments {
  function __construct () {
    $this->db = new DBContext();
  }

  public function getTournaments () {
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Tournament WHERE tournament_date < NOW() ORDER BY tournament_date DESC');
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getFutureTournaments () {
    $this->db->connect();
    $req = $this->db->pdo->prepare('SELECT * FROM T_Tournament WHERE tournament_date >= NOW() ORDER BY tournament_date DESC');
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

  public function addGameToTournament ($data) {
    $this->db->connect();
    $req = $this->db->pdo->prepare('INSERT INTO T_Games (game_team1_name, game_team2_name, game_time, game_team1_score, game_team2_score, fk_game_tournament)
      VALUES (:team1, :team2, :gametime, :score1, :score2, :id);');
    $req->bindParam(':team1', $data['new_team1'], PDO::PARAM_STR);
    $req->bindParam(':team2', $data['new_team2'], PDO::PARAM_STR);
    $req->bindParam(':gametime', $data['new_time'], PDO::PARAM_STR);
    $req->bindParam(':score1', $data['new_score1'], PDO::PARAM_STR);
    $req->bindParam(':score2', $data['new_score2'], PDO::PARAM_STR);
    $req->bindParam(':id', $data['id'], PDO::PARAM_STR);
    $req->execute();
  }

  public function editGameOfTournament ($data) {
    $this->db->connect();
    $req = $this->db->pdo->prepare('UPDATE T_Games SET game_team1_name=:team1,game_team2_name=:team2,game_team1_score=:score1,game_team2_score=:score2,game_time=:time,fk_game_tournament=:id
    WHERE game_id=:game_id');
    $req->bindParam(':team1', $data['team1'], PDO::PARAM_STR);
    $req->bindParam(':team2', $data['team2'], PDO::PARAM_STR);
    $req->bindParam(':time', $data['time'], PDO::PARAM_STR);
    $req->bindParam(':score1', $data['score1'], PDO::PARAM_STR);
    $req->bindParam(':score2', $data['score2'], PDO::PARAM_STR);
    $req->bindParam(':game_id', $data['game_id'], PDO::PARAM_STR);
    $req->bindParam(':id', $data['id'], PDO::PARAM_STR);
    $req->execute();
  }
}