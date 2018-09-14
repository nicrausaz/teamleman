<?php
if ($_POST) {
  if ($_POST['name'] && $_POST['location'] && $_POST['date']) {
    if (isset($_POST['id'])) {
      $tournaments->editTournament($_POST);
    } else {
      $tournaments->addTournament($_POST);
    }
  } else {
    echo "Erreur";
  }
}
?>
<ul uk-accordion="collapsible: false" class="uk-list-striped">
  <li>
    <a class="uk-accordion-title" href="#">Nouveau tournoi</a>
    <div class="uk-accordion-content">
    <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Nom</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Nom">
          </div>
      </div>
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Lieu</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="location" type="text" placeholder="Lieu">
          </div>
      </div>
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Date</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="date" type="date">
          </div>
      </div>
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Classement final</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="ranking" type="number" min="1" placeholder="Classement">
          </div>
      </div>
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Lien FIBA</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="link" type="text" placeholder="Lieu">
          </div>
      </div>
      <p uk-margin>
        <button type="submit" class="uk-button uk-button-primary uk-align-right">Ajouter</button>
      </p>
      </form>
    </div>
  </li>
  <?php foreach($tournaments->getTournements() as $tournament) { ?>
    <li>
      <a class="uk-accordion-title" href="#"><?= $tournament['tournament_name'] ?></a>
    <div class="uk-accordion-content">
      <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Nom</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Nom" value="<?php echo $tournament['tournament_name'] ?>">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Lieu</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="location" type="text" placeholder="Lieu" value="<?php echo $tournament['tournament_location'] ?>">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Date</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="date" type="date" value="<?php echo $tournament['tournament_date'] ?>">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Classement final</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="ranking" type="number" min="1" placeholder="Classement" value="<?php echo $tournament['tournament_final_ranking'] ?>">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Lien FIBA</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="link" type="text" placeholder="Lieu" value="<?php echo $tournament['tournament_fiba_link'] ?>">
          </div>
        </div>
        <input type="text" name="id" value="<?php echo $tournament['tournament_id'] ?>" style="display:none;"/>
        <p uk-margin>
          <button type="submit" class="uk-button uk-button-primary uk-align-right">Ajouter</button>
        </p>
      </form>
    </div>
    </li>
  <?php } ?>
</ul>