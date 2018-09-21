<!DOCTYPE html>
<html lang="en">
<? include "./Templates/head.php"; ?>
<body>
  <? include "./Templates/navbar.php"; ?>

    <div class="uk-container uk-scope">
      <div class="uk-section uk-dark" id="about" uk-scrollspy="cls:uk-animation-fade">
      <h1 class="uk-text-left">Présentation</h1>
        <p>
          Le Team Leman a vu le jour en septembre 2017 à l’aube de son premier tournoi 3x3.
          Depuis est né une passion pour cette discipline qui entrera au J.O de Tokyo 2020.
        </p>
        <p>
          Ses joueurs viennent principalement du canton de Vaud et Valais. Avec plus de 4111 kilomètres au compteur pour notre première saison à écouler les tournois,
          notre but est de participer à un maximum de tournois chaque année.
        </p>
        <p>
          Une partie de nos joueurs s’est classée dans le Top 20 et même Top 10 du ranking Fiba 3x3 Suisse,
          ainsi même qu’une troisième place en U23.
        </p>
      </div>
      <hr>
        <? include "./Templates/players.php"; ?>
      <hr>
        <? include "./Templates/sponsors.php"; ?>
      <hr>
        <? include "./Templates/results.php"; ?>
      <hr>
        <? include "./Templates/shopitems.php"; ?>
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