<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller
{
    public function indexAction()
    {
        // $player = Models\Player->getAll();
        View::renderTemplate('Home/index.html');
    }
}
