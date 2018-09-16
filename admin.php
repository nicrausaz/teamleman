<?php
include "./Templates/head.php";
  if (!isset($_SESSION['username'])) {
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">
      <ul class="uk-navbar-nav">
        <li class="uk-active"><a>Administration</a></li>
      </ul>
    </div>
    <div class="uk-navbar-right">
      <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="./Templates/admin/logout.php">Déconnexion <span uk-icon="sign-out"></span></a></li>
      </ul>
    </div>
  </nav>
  <div class="uk-container uk-scope">
    <ul uk-tab>
      <li class="uk-active"><a href="#tournament" id="tabTournament">Tournois</a></li>
      <li><a href="#players" id="tabPlayers">Joueurs</a></li>
    </ul>
    <div class="uk-container uk-container-small">
      <div id="tournaments"><?php include "./Templates/admin/tournaments.php"; ?></div>
      <div id="players"><?php include "./Templates/admin/players.php"; ?></div>
    </div>
  </div>
</body>
</html>