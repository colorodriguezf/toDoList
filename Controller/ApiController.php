<?php

require_once "Model/ApiModel.php";
require_once "View/ApiView.php";
require_once "./Helpers/AuthHelper.php";

class ApiController {

    private $model;
    private $view;
    private $authHelper;

    function __construct() {
        $this->model= new ApiModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
}
function getTasks($params= null) {
    $usuario = $params[':USERNAME'];
    
        $tareas = $this->model->getTasks($usuario);
        return $this->view->response($tareas, 200);
}

function agregarTarea($params = null){
    
    $body = $this->getBody();
    $ultimoId = $this->model->agregarTarea($body->usuario_fk, $body->tarea);
    var_dump($ultimoId);
    if ($ultimoId) {
            $this->view->response("Tarea añadida con exito. Tendra el id= $ultimoId", 200);
        } else {
            $this->view->response("La  tarea no se pudo insertar", 500);
        }
}

function eliminarTarea($params = null) {
    $logueado = $this->authHelper->checkLogedIn();
    $idTarea = $params[':ID'];
    if ($logueado) {
        $tarea = $this->model->getTask($idTarea);
        if ($tarea) {
            $this->model->deleteTask($idTarea);
            return $this->view->response("El comentario con el id=$idTarea fue borrada con exito", 200);
        } else {
            return $this->view->response("El comentario con el id=$idTarea no existe", 404);
        }
    }
}

// Devuelve el body del request
private function getBody() {
    //trae lo que le mandaron en el body
    $bodyString = file_get_contents("php://input");
    //te devuelve el string en tipo objeto
    return json_decode($bodyString);
}


}
