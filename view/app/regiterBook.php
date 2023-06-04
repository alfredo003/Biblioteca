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

</head>

<body>
  <?php include_once './header.php';?>

  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="home.php" title="Voltar ao Incio" class="tip-bottom"><i
            class="icon-map-marker"></i>
          <?=NAME_SYSTEM?>.com</a>


      </div>

      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span2">
          </div>
          <div class="span8">
            <h2>Cadastrar Book</h2>
            <hr>
            <div class="widget-box">
              <div id="msg"></div>
              <form method="post" enctype="multipart/form-data" name="upload" id="save_book" class="form-horizontal">
                <div class="form-input">
                  <label for="">Titulo<span style="color:red;">*</span></label>
                  <input type="text" name="title" id="title">
                </div>
                <div class=" form-input">
                  <label for="">Nome do Autor<span style="color:red;">*</span></label>
                  <input type="text" name="nameAuthor" id="nameAuthor">
                </div>

                <div class="form-input">
                  <label for="">Descrição(Opcional)</label>
                  <textarea name="description" id="description">
                  </textarea>
                </div>
                <div class="form-input">
                  <label for="">Capa(PNG/JPG)<span style="color:red;">*</span></label>
                  <input type="file" name="cover" id="cover">
                </div>
                <div class="form-input">
                  <label for=""> Livro(PDF)<span style="color:red;">*</span></label>
                  <input type="file" name="book" id="book">
                </div>
                <div class=" form-input">
                  <label for="">Nivel Acesso<span style="color:red;">*</span></label>
                  <select name="access" id="">
                    <option value="all">Todos</option>
                  </select>
                </div><span id="load"></span>
                <br> <br>

                <div class="footer">
                  <button class="primary" type="submit">Salvar Book</button>
                  <button class="danger" id="modal_close" type="reset">Cancelar</button>
                </div>

              </form>
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
      <script src="../assets/js/jquery.form.js"></script>
      <script src="../assets/js/book.js"></script>


</body>

</html>