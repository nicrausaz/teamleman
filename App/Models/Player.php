<?php

namespace App\Models;

use PDO;

class Player extends \Core\Model
{
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM T_Players');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
