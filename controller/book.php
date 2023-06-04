<?php
require_once '../config/ligar_bd.php';
require_once '../model/Book.php';

usleep(400000);
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$getFile = $_FILES;
$nameAuthor = $getPost['nameAuthor'];
$title =$getPost['title'];
$descr= !empty($getPost['description'])?$getPost['description']:'...';
$subTitle= '---';
$access= $getPost['access'];
$cover=  $getFile['cover']['name']; 
$file=  $getFile['book']['name']; 

if(empty($nameAuthor)|| empty($title)||empty($access) || empty($cover) || empty($file) ){
   $response['message'] = "empty";
}else{
  
if (!file_exists("../uploads/cover")) {
mkdir("../uploads/cover", 0755);
}
move_uploaded_file($getFile['cover']['tmp_name'], "../uploads/cover/{$getFile['cover']['name']}");

if (!file_exists("../uploads/book")) {
mkdir("../uploads/book", 0755);
}
move_uploaded_file($getFile['book']['tmp_name'], "../uploads/book/{$getFile['book']['name']}");


 
$book = new Book();
$book->setNameAuthor($nameAuthor);
$book->setTitle($title);
$book->setCover($cover);
$book->setFile($file);
$book->setDescr($descr);
$book->setSubTitle($subTitle);
$book->setAccess($access);
$result=$book->saveBook(Ligar::chamar_bd());

if($result>0){
  $response['message'] = "success";
 
}else{
  $response['message'] = "error";
   
}
}

echo json_encode($response);
 