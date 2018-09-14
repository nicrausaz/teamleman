<div class="uk-section uk-dark" id="results" uk-scrollspy="cls:uk-animation-fade">
  <h1 class="uk-text-right">Résultats</h1>
  <ul uk-accordion="collapsible: false" class="uk-list-striped">
    <?php foreach($tournaments->getTournements() as $tournament) { ?>
    <li>
      <a class="uk-accordion-title">
        <?= $tournament['tournament_name'] . ", " . $helpers->formatDate($tournament['tournament_date'])?>
        <a class="uk-text-primary" target="_blank" href="https://www.google.com/maps/place/<?=$tournament['tournament_location']?>">
        <span uk-icon="icon: location"></span> <?= $tournament['tournament_location']?>
        </a>
        <a class="uk-text-primary" target="_blank" href="<?=$tournament['tournament_fiba_link']?>">
          <span uk-icon="icon: link"></span>Lien FIBA
        </a>
      </a>
      <div class="uk-accordion-content uk-padding">
        <?php
          $tournamentGames = $tournaments->getTournamentGames($tournament['tournament_id']);
          if (count($tournamentGames) > 0) {
        ?>
        <div>
          <div class="uk-child-width-1-2@m uk-child-width-1-2@s" uk-grid>
            <div class="uk-text-left"><span uk-icon="icon: users"></span> Joueurs:
            <?php foreach($tournaments->getTournamentPlayers($tournament['tournament_id']) as $player) { ?>
              <b><?= $player['player_firstname'] ?></b>
            <?php } ?>
            </div>
            <div class="uk-text-right"><span uk-icon="icon: list"></span> Classement final: <b><?= $tournament['tournament_final_ranking'] ?></b></div>
          </div>

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