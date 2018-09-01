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
        <? include "./Templates/results.php"; ?>
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
        <h1 class="uk-text-left">Médias</h1>
      <div class="uk-child-width-expand@s uk-text-center" uk-grid>
          <div class="uk-padding-large">
            <a href="https://www.facebook.com/teamleman3x3/" target="_blank" uk-icon="icon: facebook; ratio: 5" uk-tooltip="title: Aimez notre page Facebook !; pos: bottom"></a>
          </div>
          <div class="uk-padding-large">
            <a href="https://www.instagram.com/teamleman3x3/" target="_blank" uk-icon="icon: instagram; ratio: 5" uk-tooltip="title: Suivez nous sur Instagram !; pos: bottom"></a>
          </div>
          <div class="uk-padding-large">
            <a href="mailto:nicolas@crausaz.click;jeremy.dupradeau@gmail.com" uk-icon="icon: mail; ratio: 5" uk-tooltip="title: Contactez nous par e-mail !; pos: bottom"></a>
          </div>
        </div>
      </div>
      <a href="#" uk-totop uk-scroll class="uk-align-right"></a>
    </div>
</body>
</html>