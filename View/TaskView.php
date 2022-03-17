<?php
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';
class TaskView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }
    function showLoginORRegister() {
        $this->smarty->display('templates/showLoginORRegister.tpl');
    }

    function showHome($nombre_usuario) {
        $this->smarty->assign('nombre_usaurio'. $nombre_usuario);
        $this->smarty->display('templates/home.tpl');

    }



    function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
     }
     function showLoginLocation() {
        header("Location: " . BASE_URL . "");
     }

}