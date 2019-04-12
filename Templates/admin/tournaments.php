<?php
if ($_POST) {
  if (isset($_POST['name']) && isset($_POST['location']) && isset($_POST['date'])) {
    if (isset($_POST['id'])) {
      $tournaments->editTournament($_POST);
    } else {
      $tournaments->addTournament($_POST);
    }
  }
  else if (isset($_POST['new_time']) && isset($_POST['new_team1']) && isset($_POST['new_team2'])) {
    $tournaments->addGameToTournament($_POST);
  }
  else if (isset($_POST['time']) && isset($_POST['team1']) && isset($_POST['team2'])) {
    $tournaments->editGameOfTournament($_POST);
  }
  else {
    echo "Erreur ou données manquantes";
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
            <input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Nom" required>
          </div>
      </div>
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Lieu</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="location" type="text" placeholder="Lieu" required>
          </div>
      </div>
      <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Date</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="date" type="date" required>
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
            <input class="uk-input" id="form-horizontal-text" name="link" type="text" placeholder="Lien">
          </div>
      </div>
      <p uk-margin>
        <button type="submit" class="uk-button uk-button-primary uk-align-right">Ajouter</button>
      </p>
      </form>
    </div>
  </li>
  <?php foreach($tournaments->getTournaments() as $tournament) { ?>
    <li>
      <a class="uk-accordion-title" href="#"><?= $tournament['tournament_name'] ?></a>
    <div class="uk-accordion-content">
      <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Nom</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Nom" value="<?php echo $tournament['tournament_name'] ?>" required>
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Lieu</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="location" type="text" placeholder="Lieu" value="<?php echo $tournament['tournament_location'] ?>" required>
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-horizontal-text">Date</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="date" type="date" value="<?php echo $tournament['tournament_date'] ?>" required>
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
            <input class="uk-input" id="form-horizontal-text" name="link" type="text" placeholder="Lien" value="<?php echo $tournament['tournament_fiba_link'] ?>">
          </div>
        </div>
        <input type="text" name="id" value="<?php echo $tournament['tournament_id'] ?>" style="display:none;"/>
        <p uk-margin>
          <button type="submit" class="uk-button uk-button-primary uk-align-right">Modifier</button>
        </p>
      </form>
      <hr class="uk-divider-icon">
      <div>
        <?php foreach ($players->getAll() as $key => $player) { ?>
          <input class="uk-checkbox" type="checkbox" name="tournamentplayers[]" id="<?= $player['player_firstname'] . $player['player_name']; ?>">
          <label for="<?= $player['player_firstname'] . $player['player_name']; ?>"><?= $player['player_firstname'] . " " . $player['player_name']; ?></label>
          <br>
        <?php } ?>
      </div>
      <!-- <?php echo "<pre>"; ?>
      <?php $playerssss = $players->getAll(); print_r($playerssss); ?>
      <?php echo "</pre>"; ?> -->

      <hr class="uk-divider-icon">
      <table class="uk-table">
        <caption></caption>
          <thead>
            <tr>
              <th>Heure</th>
              <th>Equipe 1</th>
              <th>Score 1</th>
              <th>Equipe 2</th>
              <th>Score 2</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid lightgrey;">
              <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <td><input class="uk-input" id="form-horizontal-text" name="new_time" type="text" placeholder="10:30" required></td>
                <td><input class="uk-input" id="form-horizontal-text" name="new_team1" type="text" value="Team Leman" required></td>
                <td><input class="uk-input" id="form-horizontal-text" name="new_score1" type="number" min="0" placeholder="Score 1"></td>
                <td><input class="uk-input" id="form-horizontal-text" name="new_team2" type="text" placeholder="Equipe 2" required></td>
                <td><input class="uk-input" id="form-horizontal-text" name="new_score2" type="number" min="0" placeholder="Score 2"></td>
                <input type="text" name="id" value="<?php echo $tournament['tournament_id'] ?>" style="display:none;"/>
                <td><button type="submit" class="uk-button uk-button-primary uk-align-right">Ajouter</button></td>
              </form>
            </tr>
            <?php $tournamentGames = $tournaments->getTournamentGames($tournament['tournament_id']);
            if (count($tournamentGames) > 0) {
              foreach ($tournamentGames as $game) { ?>
              <tr>
                <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <td><input class="uk-input" id="form-horizontal-text" name="time" type="text" value="<?php echo $game['game_time'] ?>" required></td>
                  <td><input class="uk-input" id="form-horizontal-text" name="team1" type="text" value="<?php echo $game['game_team1_name'] ?>" required></td>
                  <td><input class="uk-input" id="form-horizontal-text" name="score1" type="number" min="0" value="<?php echo $game['game_team1_score'] ?>"></td>
                  <td><input class="uk-input" id="form-horizontal-text" name="team2" type="text" value="<?php echo $game['game_team2_name'] ?>" required></td>
                  <td><input class="uk-input" id="form-horizontal-text" name="score2" type="number" min="0" value="<?php echo $game['game_team2_score'] ?>"></td>
                  <input type="text" name="game_id" value="<?php echo $game['game_id'] ?>" style="display:none;"/>
                  <input type="text" name="id" value="<?php echo $tournament['tournament_id'] ?>" style="display:none;"/>
                  <td><button type="submit" class="uk-button uk-button-primary uk-align-right">Modifier</button></td>
                </form>
              </tr>
            <?php }} ?>
        </tbody>
      </table>
    </div>
    </li>
  <?php } ?>
</ul>