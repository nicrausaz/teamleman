<?php
if ($_POST) {
  if (isset($_POST['price']) && isset($_POST['link'])) {
    $shopItems->editItem($_POST);
  }
  else if (isset($_POST['new_price']) && isset($_POST['new_link'])) {
    $shopItems->addItem($_POST);
  }
  else {
    // echo "Erreur ou données manquantes";
  }
 }
?>
<ul uk-accordion="collapsible: false" class="uk-list-striped">
  <li>
    <a class="uk-accordion-title" href="#">Nouveau produit</a>
    <div class="uk-accordion-content">
    <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nom</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_name" type="text" placeholder="Nom" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Prix</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_price" type="number" min="1" placeholder="Prix" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Lien</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="new_link" type="text" placeholder="Lien">
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Photo</label>
        <div class="uk-form-controls">
          <div class="js-upload" uk-form-custom>
            <input type="file" name="new_pic">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Choisir</button>
          </div>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Disponible</label>
        <div class="uk-form-controls">
          <label><input class="uk-checkbox" value="1" type="checkbox" name="new_available" checked> Disponible</label>
        </div>
      </div>
      <p uk-margin>
        <button type="submit" class="uk-button uk-button-primary uk-align-right">Ajouter</button>
      </p>
    </form>
    </div>
  </li>
  <?php foreach($shopItems->getAll() as $item) { ?>
    <li>
      <a class="uk-accordion-title" href="#"><?= $item['shop_item_name']?></a>
    <div class="uk-accordion-content">
    <form class="uk-form-horizontal uk-margin-large" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Nom</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="name" type="text" placeholder="Nom" value="<?php echo $item['shop_item_name'] ?>" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Prix</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="price" type="number" min="1" placeholder="Prix" value="<?php echo $item['shop_item_price'] ?>" required>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Lien</label>
        <div class="uk-form-controls">
          <input class="uk-input" id="form-horizontal-text" name="link" type="text" placeholder="Lien" value="<?php echo $item['shop_item_link'] ?>">
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Photo</label>
        <div class="uk-form-controls">
          <div class="js-upload" uk-form-custom>
            <input type="file" name="pic">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Choisir</button>
          </div>
        </div>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Disponible</label>
        <div class="uk-form-controls">
          <label><input class="uk-checkbox" value="1" type="checkbox" name="available" checked> Disponible</label value="<?php echo $item['shop_item_available'] ?>">
        </div>
      </div>
      <input type="text" name="id" value="<?php echo $item['shop_item_id'] ?>" style="display:none;"/>
      <p uk-margin>
        <button type="submit" class="uk-button uk-button-primary uk-align-right">Modifier</button>
      </p>
      </form>
    </div>
    </li>
  <?php } ?>
</ul>