<?php
  include '../config/ligar_bd.php';
  require_once '../model/User.php';
  
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$data = array_map("strip_tags", $getPost);
echo json_encode($data);
$user = new User();
$result=$user->delete(Ligar::chamar_bd(),$data['user']);  