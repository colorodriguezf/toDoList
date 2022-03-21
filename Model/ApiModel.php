<?php
class ApiModel  {
    private $db;
    
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_todolist;charset=utf8', 'root', '');
    }

function agregarTarea($usuario_fk, $tarea) {
    $sentencia = $this->db->prepare("INSERT INTO tareas(usuario_fk, tarea) VALUES(?,?)");
    $sentencia->execute(array($usuario_fk, $tarea));
    return $this->db->lastInsertId();
}

function getTask($idTarea) {
    $sentencia = $this->db->prepare("SELECT * FROM tareas WHERE id =?");
    $sentencia->execute(array($idTarea));
    $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
    return $tarea;
}
function getTasks($usuario) {
    $sentencia = $this->db->prepare("SELECT * FROM tareas WHERE usuario_fk =?");
    $sentencia->execute(array($usuario));
    $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $tareas;
}

function deleteTask($idTarea) {
    $sentencia = $this->db->prepare("DELETE FROM tareas WHERE id=?");
    $sentencia->execute(array($idTarea));
}

function tareaRealizada($usuario, $tarea, $realizado, $id)  {
    $sentencia = $this->db->prepare("UPDATE tareas SET usuario_fk=?, tarea=?, realizada=? WHERE id=?");
    $sentencia->execute(array($usuario, $tarea, $realizado, $id));
}

}
