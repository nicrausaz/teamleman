<!DOCTYPE html>
<html lang="en">
<? include "./Templates/head.php"; ?>
<body>
  <? include "./Templates/navbar.php"; ?>
    <div class="sections">
    <div class="container" style="display: flex; justify-content: center;">
      <img src="App/assets/imgs/logo1.jpg" class="img-fluid" alt="mainpic" draggable="false">
    </div>
    <div class="part">
      <a class="anchor" id="about"></a>
      <div class="container">
        <h1 class="display-4">Présentation</h1>
      </div>
    </div>
    <div class="part">
      <a class="anchor" id="players"></a>
      <div class="container">
        <h1 class="display-4">Joueurs</h1>
        <p class="lead">Découvrez notre équipe !</p>
        <div class="row">
        <?php foreach ($players->getAll() as $player) { ?>
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="" alt="player_pic">
              <div class="card-body">
                <h5 class="card-title"><?= $player['player_firstname'] . " " . $player['player_name'] ?></h5>
                <p class="card-text">
                  <? print_r($player) ?>
                  <ul>
                    <li>asdf</li>
                  </ul>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
        </div>
        <?php } ?>
          </div>
        </div>
      </div>
    <div class="part">
      <a class="anchor" id="sponsors"></a>
      <div class="container">
        <h1 class="display-4">Sponsors</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
    <div class="part">
      <div class="container">
        <a class="anchor" id="results"></a>
        <h1 class="display-4">Résultats</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
    <div class="part">
      <div class="container">
        <a class="anchor" id="coming"></a>
        <h1 class="display-4">A venir</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
    <div class="part ">
      <div class="container">
        <a class="anchor" id="media"></a>
        <h1 class="display-4">Médias</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
  </div>
</body>
</html>