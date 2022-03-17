<?php

class TaskModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_todolist;charset=utf8', 'root', '');
    }

    function getTasks($nombre_usuario) {
        $sentencia = $this->db->prepare("SELECT * FROM tareas WHERE usuario_fk=?");
        $sentencia->execute([$nombre_usuario]);
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }

}