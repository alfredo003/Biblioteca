<?php

class Book {

    private  $nameAuthor;
    private $title;
    private $cover;
    private $file;
    private $descr;
    private $subTitle;
    private $access;
    
    function getNameAuthor() {
        return $this->nameAuthor;
    }
    function setNameAuthor($nameAuthor) {
        $this->nameAuthor = $nameAuthor;
    }
    function getTitle() {
        return $this->title;
    }
    function setTitle($title) {
        $this->title = $title;
    }

    function getCover() {
        return $this->cover;
    }
    function setCover($cover) {
        $this->cover = $cover;
    }

    function getFile() {
        return $this->file;
    }
    function setFile($file) {
        $this->file = $file;
    }
    function getDescr() {
        return $this->descr;
    }
    function setDescr($descr) {
        $this->descr = $descr;
    }
    function getSubTitle() {
        return $this->subTitle;
    }
    function setSubTitle($subTitle) {
        $this->subTitle = $subTitle;
    }
    function getAccess() {
        return $this->access;
    }
    function setAccess($access) {
        $this->access = $access;
    }


        
    public function saveBook(PDO $connection){
        $stmt = $connection->prepare("INSERT INTO `books`(`nameAuthor`, `title`, `cover`, `file`, `descr`, `subTitle`, `access`) VALUES (?,?,?,?,?,?,?)");
        $stmt->execute(
              array(
              $this->getNameAuthor(),
              $this->getTitle(),
              $this->getCover(),
              $this->getFile(),
              $this->getDescr(),
              $this->getSubTitle(),
              $this->getAccess()
             
              ));
              return $connection->lastInsertId();
    }
    
    public function myBook(PDO $connection,$id_book,$id_user){
        $stmt = $connection->prepare("INSERT INTO `savebooks`(`user`, `book`) VALUES(?,?)");
        $stmt->execute(
              array(
                $id_book,
                $id_user
              ));
              return $connection->lastInsertId();
    }
    public function myDownload(PDO $connection,$id_book,$id_user){
        $stmt = $connection->prepare("INSERT INTO `downloads`(`user`, `book`) VALUES(?,?)");
        $stmt->execute(
              array(
                $id_book,
                $id_user
              ));
              return $connection->lastInsertId();
    }
    public function DeletedMyHistory(PDO $connection,$book){
        $stmt = $connection->prepare("DELETE FROM `savebooks` WHERE id = ?");
        $stmt->execute(
              array(
                $book
              ));
              return $connection->lastInsertId();
    }

    public function delete(PDO $connection,$book){
        $stmt = $connection->prepare("DELETE FROM `books` WHERE id = ?");
        $stmt->execute(
              array(
                $book
              ));
              return $connection->lastInsertId();
    }
     
}