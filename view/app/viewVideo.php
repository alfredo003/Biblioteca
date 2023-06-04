<?php

error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
session_start();

$cod=$_SESSION['cod'];

if($cod>0){

}
else{
echo '<script type = "text/javascript">location.href="../index.php";</script>';
}
?>
    
<?php include_once './cabecalho.php';?>
<?php


include '../CONFIG/ligar_bd.php';


$pdo = Ligar::chamar_bd();
$Pegar_estudantes=$pdo->prepare("SELECT * FROM `videos_v`");
$Pegar_estudantes->execute();
$Linha = $Pegar_estudantes->fetch();


if(isset($_POST['Publicar'])){
  $arq1=$_FILES['arq']['name'];
  $arq1=str_replace(" ","_",$arq1);
  $arq1=str_replace("-","_",$arq1);


        move_uploaded_file($_FILES['arq']['tmp_name'],"../arquivos/videos/".$arq1);

       $idUtil =$_SESSION['cod'];
        $tema =trim(strip_tags($_POST['tema']));
        $legenda  = trim(strip_tags($_POST['legenda']));
        $upload = $arq1;

        if(empty($tema) || empty($legenda)||empty($upload)){
             header("location:../_utilizador/cadastrarVideos.php?sos=vazio");
            
        }else{
        $insertIMG="INSERT INTO `video`(`tema`, `legenda`, `upload`, `idUtil`) VALUES (:tema,:legenda,:upload,:idUtil)";
        try{
            $pdo = Ligar::chamar_bd();
            $result = $pdo->prepare($insertIMG);
            $result->bindParam(':tema',$tema,PDO::PARAM_STR);
            $result->bindParam(':legenda',$legenda,PDO::PARAM_STR);
            $result->bindParam(':upload',$upload,PDO::PARAM_STR);
            $result->bindParam(':idUtil',$idUtil,PDO::PARAM_STR);
            $result->execute();
           $contar=$result->rowCount();
           if($contar>0){
               header("location:../_utilizador/cadastrarVideos.php?sos=sucesso");
           }else{
                     header("location:../_utilizador/cadastrarVideos.php?sos=erro");
           }
            
        }catch(PDOException $e){
            echo $e;
        }}
}
?>
<div id="content">
  <div id="content-header">
      <div id="breadcrumb"> <a href="home.php" title="Voltar ao Incio" class="tip-bottom"><i class="icon-map-marker"></i>  Biblioteca-IMPN.com</a> 
  
    
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
        
     <div class="span10">
     <h2>Editar Video Aula</h2>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5></h5>
          </div>
          <div class="widget-content nopadding">
                    <div id="msg_entidade" name="msg_entidade"></div>
                    <form id="Publicar" action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            
             <div class="control-group">
                <label class="control-label">Tema do Video</label>
                <div class="controls">
                    <input type="text" class="span6" name="tema" placeholder="" value="<?=$Linha['tema']?>" />
                </div>
              </div>
           
                
              <div class="control-group">
                <label class="control-label">Descrição</label>
                <div class="controls">
                    <textarea name="legenda"><?=$Linha['legenda']?></textarea>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Upload do Video</label>
                <div class="controls">
                      <input type="file" name="arq"  class="span6" />
                </div>
              </div>
           
          <div class="widget-content"> 
              <button type="submit"class="btn btn-success" name="Publicar" style="background:rgb(4, 64, 138);"> Alterar </button>
             <button type="submit" class="btn btn-danger" >Cancelar</button>
          </div>
        
          <?php 
  if(!empty($_GET['sos'])){

  
  $sos = $_GET['sos'];
  
  if($sos == "sucesso"){
     echo "<div class='alert alert-success'style='border-radius:0px;'  role='alert'> <strong>Sucesso!</strong> Foi Carregado um Video no Sistema </div></script>"; 
  }
  if($sos == "erro"){
     echo "<div class='alert alert-danger'style='border-radius:0px;'  role='alert'> <strong>Erro!</strong> Não Foi Carregado nenhum Video no Sistema </div></script>"; 
  }
   if($sos == "vazio"){
     echo "<div class='alert alert-alert'style='border-radius:0px;'  role='alert'> <strong>Alerta!</strong> Não Foi Carregado nenhum Video no Sistema</div></script>"; 
  }}
  ?>
 
            </form>
          </div>
        </div>
      </div>
      
      
    </div><hr>
  </div>
</div>
    </div>
 <?php include_once'./Rodape.php';?>
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-colorpicker.js"></script> 
<script src="../js/bootstrap-datepicker.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/maruti.js"></script> 
<script src="../js/maruti.form_common.js"></script>
</script>
</body>
</html>
