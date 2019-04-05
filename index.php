<!DOCTYPE html>
<html lang="en">
<?php include "./Templates/head.php"; ?>
<body>
  <?php include "./Templates/navbar.php"; ?>
    <div class="uk-container uk-scope">
      <img src="./assets/imgs/logos/logo_banner.jpg" id="logo-banner" draggable="false">
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
        <?php include "./Templates/players.php"; ?>
      <!-- <hr> -->
        <?php include "./Templates/sponsors.php"; ?>
      <hr>
        <?php include "./Templates/results.php"; ?>
      <hr>
        <?php include "./Templates/soon.php"; ?>
      <!-- <hr> -->
        <!-- <?php include "./Templates/shopitems.php"; ?> -->
      <hr>
      <?php include "./Templates/medias.php"; ?>
</body>
</html>