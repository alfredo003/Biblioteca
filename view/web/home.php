<!DOCTYPE html>
<html lang="pt-br">
<?php 
include('./../../config/session.php');
include('./../../config/boot.php');
?>

<head>
  <title> <?=NAME_SYSTEM?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./../assets/vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/fullcalendar.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/maruti-style.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/uniform.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/maruti-media.css" class="skin-color" />
  <link rel="stylesheet" href="./../assets/vendor/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/uniform.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/select2.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/maruti-style.css" />
  <link rel="stylesheet" href="./../assets/vendor/css/maruti-media.css" class="skin-color" />
  <link rel="icon" href="./../assets/img/icon.jpg" />

  <link rel="stylesheet" type="text/css" href="./../assets/slide/style.css" />
  <script type="text/javascript" src="./../assets/slide/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="./../assets/slide/slide.js"></script>

</head>

<body>
  <?php include_once './header.php';?>

  <section id="galeria">

    <section id="buttons">
      <a href="" class="prev">&laquo;</a>
      <a href="" class="next">&raquo;</a>
    </section>
    <ul>



      <li>
        <img src="./../assets/image/slide/1.jpg" width="500" height="500" />
        <a href=''><span>...</span></a>
      </li>
      <li>
        <img src="./../assets/image/slide/2.jpg" width="500" height="500" />
        <a href=''><span>...</span></a>
      </li>

    </ul>

  </section>

  <script src=" ../assets/vendor/js/excanvas.min.js"></script>
  <script src="../assets/vendor/js/jquery.min.js"></script>
  <script src="../assets/vendor/js/jquery.ui.custom.js"></script>
  <script src="../assets/vendor/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/js/jquery.flot.min.js"></script>
  <script src="../assets/vendor/js/jquery.flot.resize.min.js"></script>
  <script src="../assets/vendor/js/jquery.peity.min.js"></script>
  <script src="../assets/vendor/js/fullcalendar.min.js"></script>
  <script src="../assets/vendor/js/maruti.js"></script>
  <script src="../assets/vendor/js/maruti.dashboard.js"></script>
  <script src="../assets/vendor/js/maruti.calendar.js"></script>

</body>

</html>