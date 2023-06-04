<?php
error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
session_start();

$codAccess=$_SESSION['codAccess'];
/**
 * if($codAccess>0){
 return;
}
else{
echo '<script type = "text/javascript">location.href="../index.php";</script>';
}
*/

if($_SESSION['type'] == "admin"){
header("location:./app/home.php");
}
if($_SESSION['type'] =="user" ){
header("location:./web/home.php");
}