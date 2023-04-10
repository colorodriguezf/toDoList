<?php
require_once "./Model/TaskModel.php";
require_once "./View/TaskView.php";
require_once "./Helpers/AuthHelper.php";

class TaskController {
    private $model;
    private $view;
    private $authHelper;
    
    function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
        $this->authHelper = new AuthHelper();
    }

    function login() {
        $this->view->showLogin();
    }

    function register() {
        $this->view->showRegister();
    }

    function showHome() {
        $logueado = $this->authHelper->checkLogedIn();
        if($logueado) {
            $tareas= $this->model->getTasks($_SESSION['nombre_usuario']);
            $this->view->showHome($_SESSION['nombre_usuario'], $_SESSION['user_id'], $tareas);
        }
        else {
            $this->view->showLoginLocation();
        }
    }

}