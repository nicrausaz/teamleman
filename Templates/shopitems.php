<div class="uk-section uk-dark" id="coming" uk-scrollspy="cls:uk-animation-fade">
  <h1 class="uk-text-right">Boutique</h1>
  <?php
  $i = 1;
  foreach ($shopItems->getAll() as $item) {
    if ($i == 1) {
      echo '<div class="uk-child-width-expand@s uk-text-center" uk-grid>';
    }
  ?>
    <div>
      <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
        <img src="assets/imgs/nopicture.jpg" alt="">
        <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
          <p class="uk-h4 uk-margin-remove"><a><small><?= $item['shop_item_name'] ?></small></a></p>
        </div>
      </div>
    </div>
  <?php
      if ($i == 4) {
        echo '</div>';
        $i = 0;
      }
      $i++;
    }
  ?>
</div>