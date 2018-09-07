<?php
  require_once "./Controllers/Administrators.php";
  $administrators = new Administrators();
  function showContent ($administrators) {
    if ($_POST) {
      if ($administrators->checkLogin($_POST['username'], $_POST['password'])) {
        return true;
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<? include "./Templates/head.php"; ?>
<body>
  <nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">
      <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="#">Administration</a></li>
      </ul>
    </div>
  </nav>
  <div class="uk-container uk-scope">
    <?php
    if (showContent($administrators)) {
      include "./Templates/adminContent.php";
    } else {
      include "./Templates/loginForm.php";
    } ?>
  </div>
</body>
</html>