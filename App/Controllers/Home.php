<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Player;

class Home extends \Core\Controller
{
    public function indexAction()
    {
        $players = Player::getAll();
        print_r($players);
        View::renderTemplate('Home/index.php');
    }
}
