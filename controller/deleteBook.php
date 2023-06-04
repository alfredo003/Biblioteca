<?php
  include '../config/ligar_bd.php';
  require_once '../model/Book.php';
  
  $getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  $data = array_map("strip_tags", $getPost);
  echo json_encode($data);
$book = new Book();
$result=$book->delete(Ligar::chamar_bd(),$data['book']);  