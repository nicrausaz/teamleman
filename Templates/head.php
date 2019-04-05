<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/uikit.min.css" />
  <script src="./assets/js/uikit.min.js"></script>
  <script src="./assets/js/uikit-icons.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124188532-1"></script>
  <script src="./assets/js/script.js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-124188532-1');
  </script>
  <link rel="icon" href="assets/imgs/logos/favicon.png" />
  <title>Team Leman 3x3</title>
  <?php
    session_start();
    require_once "./Controllers/Players.php";
    require_once "./Controllers/Tournaments.php";
    require_once "./Controllers/ShopItems.php";
    require_once "./Controllers/Helpers.php";
    $players = new Players();
    $tournaments = new Tournaments();
    $shopItems = new ShopItems();
    $helpers = new Helpers();
  ?>
</head>