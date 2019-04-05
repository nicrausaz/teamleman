<div class="uk-section uk-dark" id="soon" uk-scrollspy="cls:uk-animation-fade">
  <h1 class="uk-text-right">A venir</h1>
  <ul class="uk-list uk-list-striped">
  <?php foreach($tournaments->getFutureTournaments() as $tournament) { ?>
  <li>
    <?= $tournament['tournament_name'] . ", " . $helpers->formatDate($tournament['tournament_date'])?>
    <a class="uk-text-primary" target="_blank" href="https://www.google.com/maps/place/<?=$tournament['tournament_location']?>"><br>
    <span uk-icon="icon: location"></span> <?= $tournament['tournament_location']?>
    </a>
    <a class="uk-text-primary" target="_blank" href="<?=$tournament['tournament_fiba_link']?>">
      <span uk-icon="icon: link"></span>Lien FIBA
    </a>
  </li>
  <?php } ?>
</div>