<?php

class UserModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_todolist;charset=utf8', 'root', '');
    }
    function createUser($nombre_usuario, $nickname, $correo, $password) {        
            $sentencia = $this->db->prepare("INSERT INTO users(username, nickname, mail, password) VALUES(?,?,?,?)");
            $sentencia->execute(array($nombre_usuario,$nickname,$correo,$password));  
    }
    function checkUserFromDB($username) {
        $sentencia = $this->db->prepare("SELECT * FROM users WHERE username=?");
        $sentencia->execute([$username]);
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}