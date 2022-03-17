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


}