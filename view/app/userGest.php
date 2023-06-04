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
  $users=$pdo->prepare("SELECT * FROM `users`");
  $users->execute();
  $courses=$pdo->prepare("SELECT * FROM `courses`");
  $courses->execute();
?>
    <div class="container-fluid">
      <div class="row-fluid">



        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-list-alt"></i> </span>
              <h5>listagem dos Utilizadores</h5>
            </div>
            <div class="widget-content nopadding">

              <button class="btn btn-info" id="btn_new_user">
                <i class="icon  icon-plus"></i> NOVO UTILIZADOR
              </button>
              <div id="msg"></div>



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
                              <th>Nº</th>
                              <th>Nome</th>
                              <th>Email / Nº Telefone</th>
                              <th>Curso</th>
                              <th>Codigo de acesso</th>
                              <th>+</th>
                            </tr>
                          </thead>
                          <tbody id="table_user">
                            <?php $c=1;while ($user = $users->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                              <td><?=$c++?></td>
                              <td><?=$user['username']?></td>
                              <td><?=$user['email']?></td>
                              <td><?=$user['course']?></td>
                              <td><?=$user['codAccess']?></td>
                              <td>
                                <a onclick="deleteUser(<?=$user['id']?>)" class="btn btn-danger"><i
                                    class="icon icon-trash"></i></a>
                                <a href="  " class="btn btn-success"><i class="icon  icon-edit"></i></a>
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

        <dialog id="modal_new_user">
          <div>
            <form action="create_user" method="POST" enctype="multipart/form-data">
              <div class="header">
                <span> Novo Utilizador</span>
              </div>
              <div id="msg"></div>
              <div class="form-input">
                <label for="">Nome Utilizador</label>
                <input type="text" name="username" id="username" placeholder="">
              </div>
              <div class="form-input">
                <label for="">Email/NºTelefone</label>
                <input type="text" name="email" id="email" placeholder="">
              </div>
              <div class="form-input">
                <input type="hidden" name="type" id="type" value="user">
              </div>
              <div class="form-input">
                <label for="">Qual é o Curso?</label>
                <select name="course">
                  <?php while ($course = $courses->fetch(PDO::FETCH_ASSOC)) { ?>

                  <option value="<?=$course['id']?>"><?=$course['name']?></option>
                  <?php }?>

                </select>
                </<div>
                <div class=" form-input">
                  <label for="">Palavra-Passe</label>
                  <input type="text" name="password" id="password">
                </div>
                <div class="form-input">
                  <label for="">Confirmar Passe</label>
                  <input type="text" name="confirPassword" id="confirPassword">
                </div>

                <div class="form-input">
                  <label for="">Código de Acesso</label>
                  <input type="text" name="codAccess" id="codAccess" style="border:3px dotted red;">
                </div>
                <div class="footer">
                  <button class="primary" type="submit">Cadastrar Utilizador</button>
                  <button class="danger" id="modal_close" type="reset">Cancelar</button>
                </div>

            </form>

          </div>
        </dialog>

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
    <script src="../assets/js/user.js"></script>

</body>

</html>