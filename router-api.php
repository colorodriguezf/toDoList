
<?php

require_once 'libs/smarty-3.1.39/Router.php';
require_once "Controller/ApiController.php";



$router = new router();

$router->addRoute('tarea','POST','ApiController','agregarTarea');
$router->addRoute('tarea/:ID', 'DELETE', 'ApiController', 'eliminarTarea');
$router->addRoute('tarea/:USERNAME', 'GET', 'ApiController', 'getTasks');

$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);