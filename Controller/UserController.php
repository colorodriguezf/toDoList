<?php
require_once "Model/UserModel.php";
require_once "View/UserView.php";
require_once "View/TaskView.php";

class UserController {
  private $model;
  private $view;
  private $taskView;

  function __construct()  {
    $this->model = new UserModel();
    $this->view = new UserView();
    $this->taskView = new TaskView();
  }
  function userRegister(){
    if (!empty($_POST['correo']) && !empty($_POST['nickname']) && !empty($_POST['nombre_usuario']) && !empty($_POST['password'])) {
                      $nombre_usuario = $_POST['nombre_usuario'];
                      $nickname=$_POST['nickname'];
                      $correo = $_POST['correo'];
                      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    }
                    $this->model->createUser($nombre_usuario,$nickname,$correo,$password);
                    $this->view->showLoginLocation();
                  }

  function verifyLogin()  {
    if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
          $usuario = $_POST['usuario'];
          $password = $_POST['password'];
          $user = $this->model->checkUserFromDB($usuario);
          
          if ($user && password_verify($password, $user->password)) {
            session_start();
              $_SESSION['logueado']=true;
              $_SESSION['user_id']=$user->id;
              $_SESSION['nombre_usuario']=$user->username;
              $_SESSION['nickname']=$user->nickname;
              $_SESSION['correo']= $user->mail;
             }
            if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {
                $this->taskView->showHomeLocation();
              }
              else {
                  $this->taskView->showLogin("usuario o contraseña incorrectos");
              }
            } 
          }

          function logout() {
            session_start();
            session_destroy();
            $this->taskView->showLoginLocation();
          }

}



