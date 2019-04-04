<div class="uk-section uk-dark" id="players" uk-scrollspy="cls:uk-animation-fade">
  <h1 class="uk-text-right">Joueurs</h1>
  <div class="uk-child-width-1-5@m" uk-grid uk-scrollspy="cls: uk-animation-slide-left">
  <?php foreach ($players->getAll() as $player) { ?>
    <div>
      <?php
      if ($player['player_pic'] != "") { ?>
        <img src="assets/imgs/players/<?= $player['player_pic'] ?>" alt="playerpic">
      <?php } else { ?>
        <img src="assets/imgs/nopicture.jpg" alt="playerpic">
      <?php } ?>
        <h5 class="uk-card-title"><?= $player['player_firstname'] . " " . $player['player_name'] ?></h5>
        <hr>
        <ul class="uk-list">
          <li><?= $player['player_size'] ?> cm, <?= $helpers->getAgeFromDate($player['player_birthdate'])?> ans</li>
          <li><?= $player['player_club'] ?></li>
        </ul>
    </div>
    <?php } ?>
  </div>