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
        <p class="lead"><pre><?php print_r($players->getAll()); ?></pre></p>
        <div class="row">
          <div class="col">
          <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
          </div>
          <div class="col">
          <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
          </div>
          <div class="col">
            <div class="card">
    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
          </div>
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