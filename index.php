<!DOCTYPE html>
<html lang="en">
<? include "./Templates/head.php"; ?>
<body>
  <? include "./Templates/navbar.php"; ?>

    <div class="uk-container uk-scope">
      <div class="uk-section uk-dark" id="about">
      <h1 class="uk-align-left">Présentation</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
      </div>
      <hr>
      <div class="uk-section uk-dark" id="players">
        <h1 class="uk-text-right">Joueurs</h1>
        <div class="uk-child-width-1-4@m" uk-grid uk-scrollspy="cls: uk-animation-slide-left">
        <?php foreach ($players->getAll() as $player) { ?>
          <div>
            <div class="uk-card uk-card-default">
              <div class="uk-card-media-top">
              <img src="assets/imgs/players/<?= $player['player_pic'] ?>"  alt="playerpic">
              </div>
              <div class="uk-card-body">
                <h3 class="uk-card-title"><?= $player['player_firstname'] . " " . $player['player_name'] ?></h3>
                <ul class="uk-list">
                  <li>Taille: <?= $player['player_size'] ?>cm</li>
                  <li>Âge: <?= $helpers->getAgeFromDate($player['player_birthdate'])?></li>
                  <li>Club (5x5): <?= $player['player_club'] ?></li>
                </ul>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      <hr>
      <div class="uk-section uk-dark" id="sponsors" uk-scrollspy="cls:uk-animation-fade">
      <h1 class="uk-align-left">Sponsors</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
        </div>
      <hr>
      <div class="uk-section uk-dark" id="results" uk-scrollspy="cls:uk-animation-fade">
        <h1 class="uk-text-right">Résultats</h1>
        <ul uk-accordion="collapsible: false" class="uk-list-striped">
          <?php foreach($games->getTournements() as $tournament) { ?>
          <li>
            <a class="uk-accordion-title">
              <?= $tournament['tournament_name']?>
              <a class="uk-text-primary" target="_blank" href="https://www.google.com/maps/place/<?=$tournament['tournament_location']?>">
                <i class="fas fa-map-marker-alt"></i> <?= $tournament['tournament_location']?>
              </a>
            </a>
            <div class="uk-accordion-content uk-padding">
              <?php
                $tournamentGames = $games->getTournamentGames($tournament['tournament_id']);
               if (count($tournamentGames) > 0) {
              ?>
              <div>
                <p class="uk-text-right">Classement final: <b><?= $tournament['tournament_final_ranking'] ?></b></p>
                <hr class="uk-divider-icon">
                <ul class="uk-list uk-list-divider">
                  <?php foreach($tournamentGames as $game) { ?>
                    <li>
                      <div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
                        <div class="uk-text-left"><?= $game['game_team1_name'] ?></div>
                        <div class="uk-text-center"><b><?= $game['game_team1_score'] . "-" . $game['game_team2_score'] ?></b></div>
                        <div class="uk-text-right"><?= $game['game_team2_name'] ?></div>
                      </div>
                    </li>
                  <?php } ?>
                </ul>
              </div>
              <? } else { ?>
                <p class="uk-text-center"><b>Les résultats de ce tournoi ne sont pas encore disponibles</b></p>
              <?php } ?>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
      <hr>
      <div class="uk-section uk-dark" id="coming" uk-scrollspy="cls:uk-animation-fade">
      <h1 class="uk-align-left">A venir</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
      </div>
      <hr>
      <div class="uk-section uk-dark" id="coming" uk-scrollspy="cls:uk-animation-fade">
      <h1 class="uk-align-right">Boutique</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
      </div>
      <hr>
      <div class="uk-section uk-dark" id="media" uk-scrollspy="cls:uk-animation-fade">
      <h1 class="uk-align-left">Médias</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
      </div>
      <a href="#" uk-totop uk-scroll class="uk-align-right"></a>
    </div>
</body>
</html>