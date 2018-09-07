<div class="uk-container uk-margin-large-top">
  <div class="uk-card uk-card-default uk-card-body uk-width-1-3 uk-align-center">
    <h3>Connectez-vous</h3>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="uk-margin">
          <input class="uk-input" type="text" placeholder="Nom de compte" name="username">
        </div>
        <div class="uk-margin">
          <input class="uk-input" type="password" placeholder="Mot de passe" name="password">
        </div>
        <button class="uk-button uk-button-primary" type="submit">Connexion</button>
      </form>
  </div>
</div>