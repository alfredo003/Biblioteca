<?php
include_once("../config/ligar_bd.php");
include_once("../model/User.php");

$user = new User();
$codAccess =filter_input(INPUT_POST,'codAccess');
$password = filter_input(INPUT_POST,'password');

if (empty($codAccess)|| empty($password)) {
    echo "É obrigatório preencher todos os campos";
}else{
    $user->setCodAccess(filter_input(INPUT_POST, 'codAccess'));
    $user->setPassword(filter_input(INPUT_POST, 'password'));
    $result=$user->verifyUser(Ligar::chamar_bd());

    if ($result ==0 ) {
        if ($result == 0) {
             echo $show['msg']="Porfavor, verifique seus dados";
         }elseif ($result == 1) {
             echo $show['msg']="Porfavor, contacte o Administrador";
        }else{
              echo $show['msg']="Porfavor, contacte o Administrador";
         }
    }else{
        echo true;
//alert("Login Efectuado com sucesso");location.href="../pages/inicio.php";</script>' ;
    }
}
?>