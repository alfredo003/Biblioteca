<?php

class User{

private $courses="SELECT * FROM courses";
private $username;
private $email;
private $type;
private $password;
private $codAccess; 
private $course;

function getUsername() {
    return $this->username;
}
function setUsername($username) {
    $this->username = $username;
}
function getEmail() {
    return $this->email;
}
function setEmail($email) {
    $this->email = $email;
}
function getType() {
    return $this->type;
}
function setType($type) {
    $this->type = $type;
}
function getPassword() {
    return $this->password;
}
function setPassword($password) {
    $this->password = $password;
}
function getCodAccess() {
    return $this->codAccess;
}
function setCodAccess($codAccess) {
    $this->codAccess = $codAccess;
}
function getCourse() {
    return $this->course;
}
function setCourse($course) {
    $this->course = $course;
}

public function createUser(PDO $connection) {
    $stmt = $connection->prepare("INSERT INTO users(`username`, `email`, `type`, `password`, `codAccess`, `course`) VALUES (?,?,?,?,?,?)");
    $stmt->execute(   
        array(
            $this->getUsername(),
            $this->getEmail(), 
            $this->getType(),
            $this->getPassword(),
            $this->getCodAccess(),
            $this->getCourse()
       ));
    
   return $connection->lastInsertId();
 }

public function verifyUser(PDO $connection){
    $queryExecute = $connection->prepare("SELECT * FROM users WHERE BINARY password=? AND BINARY codAccess=?");
    $queryExecute->execute(array( 
        $this->getPassword(),
        $this->getCodAccess()  
        ));
    $result = $queryExecute->rowCount();

    if ($result == 1) {
        $dataUser[] = $queryExecute->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['username']=$dataUser[0]['username'];
        $_SESSION['codAccess']=$dataUser[0]['id'];
        $_SESSION['email']=$dataUser[0]['email'];
        $_SESSION['type']=$dataUser[0]['type'];
        $_SESSION['course']=$dataUser[0]['course'];
        return $dataUser;
    }else{
        return 0;  
    }
}

public function delete(PDO $connection,$user){
    $stmt = $connection->prepare("DELETE FROM `users` WHERE id = ?");
    $stmt->execute(
          array(
            $user
          ));
          return $connection->lastInsertId();
}

}