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

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="home.php" title="Voltar ao Incio" class="tip-bottom"><i
            class="icon-map-marker"></i>
          <?=NAME_SYSTEM?>.com</a>
      </div>
    </div>
    <?php
  include_once './../../config/ligar_bd.php';
  $pdo = Ligar::chamar_bd();
  $savebooks=$pdo->prepare("SELECT * FROM `savebooks_view` where user = {$_SESSION['codAccess']} ORDER BY
    `created_at` DESC");
    $savebooks->execute();
    $downloads=$pdo->prepare("SELECT * FROM `downloads_view` where user = {$_SESSION['codAccess']} ORDER BY `created_at` DESC");
    $downloads->execute();
    ?>
    <div class="container-fluid">
      <div class="row-fluid">



        <div class="span10">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-list-alt"></i> </span>
              <h5>Livros Salvos</h5>
            </div>
            <div class="widget-content nopadding">
              <div class="container-fluid">
                <div class="row-fluid">
                  <div class="span12">
                    <div id="msg"></div>
                    <div class="widget-box">
                      <div class="widget-title"> <span class="icon">

                        </span>

                      </div>
                      <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped with-check">
                          <thead>
                            <tr>
                              <th>Capa</th>
                              <th>Livro</th>
                              <th>Autor</th>
                              <th>Data</th>
                              <th>+</th>
                            </tr>
                          </thead>
                          <tbody id="table_user">
                            <?php $c=1;while ($savebook = $savebooks->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                              <td>
                                <div>
                                  <img src="./../../uploads/cover/<?=$savebook['cover']?>"
                                    style="width:100%;height: 100%;">

                                </div>
                              </td>
                              <td>
                                <a target="_blank"
                                  href="./../../uploads/book/<?=$savebook['file']?>"><?=$savebook['title']?></a>
                              </td>
                              <td>
                                <?=$savebook['nameAuthor']?>
                              </td>
                              <td><?=$savebook['created_at']?></td>
                              <td>
                                <button onclick="deletedSave(<?=$savebook['id']?>)" class="btn btn-danger"><i
                                    class="icon icon-trash"></i></button>

                              </td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>


                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="span10">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-list-alt"></i> </span>
              <h5>Downloads Feitos</h5>
            </div>
            <div class="widget-content nopadding">
              <div class="container-fluid">
                <div class="row-fluid">
                  <div class="span12">
                    <div class="widget-box">
                      <div class="widget-title"> <span class="icon">

                        </span>

                      </div>
                      <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped with-check">
                          <thead>
                            <tr>
                              <th>Capa</th>
                              <th>Livro</th>
                              <th>Autor</th>
                              <th>Data</th>
                            </tr>
                          </thead>
                          <tbody id="table_user">
                            <?php $c=1;while ($download = $downloads->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                              <td>
                                <div>
                                  <img src="./../../uploads/cover/<?=$download['cover']?>"
                                    style="width:100%;height: 100%;">

                                </div>
                              </td>
                              <td>
                                <a target="_blank"
                                  href="./../../uploads/book/<?=$download['file']?>"><?=$download['title']?></a>
                              </td>
                              <td>
                                <?=$download['nameAuthor']?>
                              </td>
                              <td><?=$download['created_at']?></td>

                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>


                  </div>
                </div>
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
    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/deleted_history.js"></script>

</body>

</html>