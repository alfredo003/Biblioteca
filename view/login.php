<!DOCTYPE html>
<html lang="en">
<?php 
include('./../config/boot.php');
session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?=NAME_SYSTEM?>
  </title>
  <link rel="stylesheet" href="./assets/theme_login/assets/css/style.css">
  <link rel="icon" href="./assets/img/icon.jpg" />
  <script src="./assets/vendor/js/jquery.min.js"></script>
  <script src="./assets/vendor/js/js/bootstrap.min.js"></script>
</head>

<body>

  <section class="area-login">

    <?php
	unset(
    $_SESSION['codAccess'],
    $_SESSION['username'],
    $_SESSION['email'],
    $_SESSION['type']
	);
  ?>

    <div class="login">
      <div>
        <img src="./assets/vendor/img/logo.png" alt="">
      </div>
      <div id="msg"></div>
      <form method='post' id="loginform">
        <input type="text" name="name" id="cod_access" placeholder="Codigo Acesso" autofocus>
        <input type="password" name="password" id="password" placeholder="Palavra-passe">
        <button id="loginBtn">ENTRAR</button>

      </form>


      <p><small>Esqueceu a senha?<a href="">Recuperar!</a></small></p>
    </div>

  </section>

  <script type="text/javascript" src="./assets/theme_login/assets/js/login.js"></script>

</body>

</html>