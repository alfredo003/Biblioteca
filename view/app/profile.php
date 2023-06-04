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
  <link rel="stylesheet" href="./../assets/css/modal.css" />
  <link rel="stylesheet" href="./../assets/css/form.css" />

</head>

<body>
  <?php include_once './header.php';?>
  <div
    style="margin-top:100px;border-radius:0px;width:400px;margin-left:35%;border:1px solid rgba(0,0,0,0.1);background:rgba(0,0,0,0.1);"
    aria-labelledby="myModalLabel">
    <img src="../assets/image/icons/icone-contato.png" class="img-rounded" style="width:200px;margin-left:20%;">
    <table class="table table-bordered table-striped">
      <tr>
        <td>Nome :</td>
        <td><?php echo $_SESSION['username']?></td>
      </tr>
      <tr>
        <td>Email / Telefone :</td>
        <td><?php echo $_SESSION['email']?></td>
      </tr>
      <tr>
        <td>Tipo de Conta :</td>
        <td><?php echo $_SESSION['type']?></td>
      </tr>
      <tr>
        <td>Codigo de Acesso :</td>
        <td><a class="text-error">DADO PROTEGIDO</a></td>
      </tr>
      <tr>
        <td>Palavra-Passe :</td>
        <td><a class="text-error">DADO PROTEGIDO</a></td>
      </tr>

    </table>

  </div>
</body>
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