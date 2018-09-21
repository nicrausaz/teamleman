<div class="uk-section uk-dark" id="players" uk-scrollspy="cls:uk-animation-fade">
  <h1 class="uk-text-right">Joueurs</h1>
  <div class="uk-child-width-1-5@m" uk-grid uk-scrollspy="cls: uk-animation-slide-left">
  <?php foreach ($players->getAll() as $player) { ?>
    <div>
      <div class="uk-card uk-card-default">
        <div class="uk-card-media-top">
        <?php
        if ($player['player_pic'] != "") { ?>
          <img src="assets/imgs/players/<?= $player['player_pic'] ?>" alt="playerpic">
        <?php } else { ?>
          <img src="assets/imgs/nopicture.jpg" alt="playerpic">
        <?php } ?>
        </div>
        <div class="uk-card-body">
          <h3 class="uk-card-title"><?= $player['player_firstname'] . " " . $player['player_name'] ?></h3>
          <ul class="uk-list">
            <li>Taille: <?= $player['player_size'] ?> cm</li>
            <li>Âge: <?= $helpers->getAgeFromDate($player['player_birthdate'])?> ans</li>
            <li>Club (5x5): <?= $player['player_club'] ?></li>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>