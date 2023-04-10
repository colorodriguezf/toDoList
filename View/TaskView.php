<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';
class TaskView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    function showLogin() {
        $this->smarty->display('templates/showLogin.tpl');
    }

    function showRegister() {
        $this->smarty->display('templates/showRegister.tpl');
    }

    function showHome($nombre_usuario="", $user_id = "", $tareas="") {
        $this->smarty->assign('nombre_usuario', $nombre_usuario);
        $this->smarty->assign('user_id', $user_id);
        $this->smarty->assign('tareas', $tareas);
        $this->smarty->display('templates/home.tpl');

    }



    function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
     }
     function showLoginLocation() {
        header("Location: " . BASE_URL . "");
     }

}