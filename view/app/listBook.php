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
  <link rel="stylesheet" href="./../assets/css/form-control.css" />
  <link rel="stylesheet" href="./../assets/css/listBook.css" />

  <link rel="stylesheet" type="text/css" href="./../assets/slide/style.css" />
  <script type="text/javascript" src="./../assets/slide/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="./../assets/slide/slide.js"></script>

</head>

<body>
  <?php include_once './header.php';?>

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Voltar ao Incio" class="tip-bottom"><i
            class="icon-map-marker"></i>
          <?=NAME_SYSTEM?>.com</a>

      </div>
      <?php
  include_once './../../config/ligar_bd.php';
$pdo = Ligar::chamar_bd();
$books=$pdo->prepare("SELECT * FROM `books`");
$books->execute();
$countBooks =$books->rowCount();
$downloads=$pdo->prepare("SELECT * FROM `downloads`");
$downloads->execute();
$countDownloads =$downloads->rowCount();
?>
      <div class="container-fluid">
        <div class="row-fluid">


          <center>
            <ul class="stat-boxes">

              <a href="listagemManuais.php">
                <li>
                  <div class="left peity_line_good"><i class="icon-bookmark"></i></div>

                  <div class="right"> <strong><?=$countBooks?></strong>LIVROS</div>
                </li>
              </a>
              <a href="listagemLivros.php">
                <li>
                  <div class="left peity_line_good"><i class="icon-book"></i></div>
                  <div class="right"> <strong><?=$countDownloads?></strong>DOWNLOAD</div>
                </li>
              </a>


            </ul>
          </center>
          <div class="span11">
            <div class="widget-box">

              <div class="widget-title">
                <span class="icon"><i class="icon-book"></i></span>
                <h5>Listagem dos Livros</h5>
              </div>
              <div id="msg"></div>
              <div class="widget-content nopadding">

                <?php 
               $c=0;
                 while ($book = $books->fetch(PDO::FETCH_ASSOC)) { $c=$c+1; ?>
                <div class="main_box">
                  <img src="../../uploads/cover/<?=$book['cover']?>" style="width:100%;height: 100%;">
                  <div class="legend">
                    <p>Alfredo Manuel</p>
                  </div>

                  <a class="btn btn-danger" onclick="deleteBook(<?=$book['id']?>)"
                    style="background:red; color:#fff;">Eliminar</a>
                  <a class="btn btn-success" href="#" style="color:#fff;">Editar</a>
                  <a class="btn btn-info" target="_blank" href="../../uploads/book/<?=$book['file']?>"
                    style="background:#003399; color:#fff;">Ver</a>


                </div>
                <?php }?>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

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
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/book.js"></script>