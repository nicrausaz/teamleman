<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Player;

class Home extends \Core\Controller
{
    public function indexAction()
    {
        // $players = Player::getAll();
        $players = ['yess'];
        View::renderTemplate('Home/index.php', $players);
    }
}
