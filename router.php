<?php

require_once 'libs\smarty-3.1.39\Router.php';
require_once 'Controller/TaskController.php';
require_once 'Controller/UserController.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$router = new Router();

$router->setDefaultRoute('TaskController','showLoginORRegister');

$router->addRoute('home', 'GET', 'TaskController', 'showHome');

$router->addRoute('register', 'POST', 'UserController', 'UserRegister');
$router->addRoute('verify', 'POST', 'UserController', 'verifyLogin');
$router->addRoute('logout', 'GET', 'UserController', 'logout');









$router->route($_GET['action'], $_SERVER['REQUEST_METHOD']);