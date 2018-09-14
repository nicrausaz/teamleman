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
        <li class="uk-active"><a href="#">Administration</a></li>
      </ul>
    </div>
  </nav>
  <div class="uk-container uk-scope">
    <ul uk-tab>
      <li class="uk-active"><a href="#tournament">Tournois</a></li>
      <li><a href="#players">Joueurs</a></li>
    </ul>
    <div class="uk-container uk-container-small">
      <?php include "./Templates/admin/tournaments.php"; ?>
    </div>
  </div>
</body>
</html>