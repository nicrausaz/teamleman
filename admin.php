<?php
  require_once "./Controllers/Administrators.php";
  $administrators = new Administrators();
  if ($_POST) {
    // print_r($administrators->checkLogin($_POST['username'], $_POST['password']));
  }
?>
<!DOCTYPE html>
<html lang="en">
<? include "./Templates/head.php"; ?>
<body>
  <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">
      <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="#">Administration</a></li>
      </ul>
    </div>
  </nav>
  <div class="uk-container uk-scope">
    <div class="uk-width-1-2@s uk-width-2-5@m">
      <ul class="uk-nav uk-nav-default">
        <li><a href="#">Tournois</a></li>
        <li><a href="#">Matchs</a></li>
        <li><a href="#">Joueurs</a></li>
      </ul>
    </div>
  </div>
    <a class="uk-button uk-button-default" href="#loginModal" uk-toggle>Open</a>
  <div id="loginModal" uk-modal>
    <div class="uk-modal-dialog">
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="uk-modal-header">
          <h2 class="uk-modal-title">Accès restreint</h2>
      </div>
      <div class="uk-modal-body">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="uk-margin">
          <input class="uk-input" type="text" placeholder="Nom de compte" name="username">
        </div>
        <div class="uk-margin">
          <input class="uk-input" type="password" placeholder="Mot de passe" name="password">
        </div>
        <button class="uk-button uk-button-default uk-modal-close" type="button">Annuler</button>
        <button class="uk-button uk-button-primary" type="submit">Connexion</button>
        </form>
      </div>
    </div>
</div>
</body>
</html>