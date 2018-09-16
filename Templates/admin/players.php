<?php
if ($_POST) {
  if (isset($_POST['fsname']) && $_POST['name'] && $_POST['birthdate'] && $_POST['size'] && $_POST['club']) {
    // $players->editPlayer($_POST)
  }
  else if (isset($_POST['new_fsname']) && $_POST['new_name'] && $_POST['new_birthdate'] && $_POST['new_size'] && $_POST['new_club']) {
    $players->addPlayer($_POST);
  }
  else {
    echo "Erreur ou données manquantes";
  }
 }
?>
<ul uk-accordion="collapsible: false" class="uk-list-striped">
  <li>
    <a class="uk-accordion-title" href="#">Nouveau joueur</a>
    <div class="uk-accordion-content">
    <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Prénom</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_fsname" type="text" placeholder="Prénom" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nom</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_name" type="text" placeholder="Nom" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Date de naissance</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_birthdate" type="date" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Taille</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_size" type="number" min="130" placeholder="Taille" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Club</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_club" type="text" placeholder="Club" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Photo</label>
        <div class="uk-form-controls">
          <div class="js-upload" uk-form-custom>
            <input type="file" name="new_pic">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Choisir</button>
          </div>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_email" type="email" placeholder="Email">
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Lien profil FIBA</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_link" type="text" placeholder="Lien">
        </div>
      </div>
      <p uk-margin>
        <button type="submit" class="uk-button uk-button-primary uk-align-right">Ajouter</button>
      </p>
    </form>
    </div>
  </li>
  <?php foreach($players->getAll() as $player) { ?>
    <li>
      <a class="uk-accordion-title" href="#"><?= $player['player_firstname'] . " " . $player['player_name'] ?></a>
    <div class="uk-accordion-content">
    <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Prénom</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="fsname" type="text" placeholder="Prénom"  value="<?php echo $player['player_firstname'] ?>" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nom</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Nom"  value="<?php echo $player['player_name'] ?>" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Date de naissance</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="birthdate" type="date"  value="<?php echo $player['player_birthdate'] ?>" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Taille</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="size" type="number" min="130" placeholder="Taille" value="<?php echo $player['player_size'] ?>" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Club</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="club" type="text" placeholder="Club"  value="<?php echo $player['player_club'] ?>" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Photo</label>
        <div class="uk-form-controls">
          <div class="js-upload" uk-form-custom>
            <input type="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Choisir</button>
          </div>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="email" type="email" placeholder="Email" value="<?php echo $player['player_email'] ?>" >
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Lien profil FIBA</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="link" type="text" placeholder="Lien" value="<?php echo $player['player_fiba_profile'] ?>" >
        </div>
      </div>
      <p uk-margin>
        <button type="submit" class="uk-button uk-button-primary uk-align-right">Modifier</button>
      </p>
      </form>
    </div>
    </li>
  <?php } ?>
</ul>