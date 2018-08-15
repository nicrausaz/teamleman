{% extends "base.html" %}

{% block title %}Accueil{% endblock %}

{% block body %}

{% embed "Shared/navbar.php" %}{% endembed %}

<div class="sections">
  <div class="container" style="display: flex; justify-content: center;">
    <img src="App/assets/imgs/logo1.jpg" class="img-fluid" alt="mainpic">
  </div>
  <div class="part">
    <a class="anchor" id="about"></a>
    <div class="container">
      <h2>Présentation</h2>
    </div>
  </div>
  <div class="part">
    <a class="anchor" id="players"></a>
    <div class="container">
      <h1 class="display-4">Joueurs</h1>
      <p class="lead"><?php print_r($players) ?></p>
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

{% endblock %}