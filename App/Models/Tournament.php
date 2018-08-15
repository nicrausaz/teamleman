<?php

namespace App\Models;

use PDO;

class Tournament extends \Core\Model
{
    public static function getAll()
    {
      // returns all tournaments
      $db = static::getDB();
      $stmt = $db->query('SELECT * FROM T_Tournament');
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($tournament_id)
    {
      // return full infos (tournament, games and player) from a tournament
    }
}
