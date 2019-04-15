<?php
class Helpers {
  public function getAgeFromDate ($date) {
    return $age = date_diff(date_create($date), date_create('now'))->y;
  }
  public function formatDate ($date) {
    $convertedDate = new DateTime($date);
    return $convertedDate->format('j.m.Y');
  }
  public function playerIsPlayingInTournament ($tournaments, $tournament_id, $player_id) {
    $alreadyPlayers = $tournaments->getTournamentPlayers($tournament_id);
    foreach ($alreadyPlayers as $key => $player) {
      if ($player['player_id'] == $player_id) return true;
    }
  }
}