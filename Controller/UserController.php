<?php 
require_once 'logic/auth.php';

class UserController
{
  private $auth;


  function __construct($pdo)
  {
    $this->auth = new Auth($pdo);
  }


  public function login($email, $password)
  {
    $user = $this->auth->authenticate($email, $password);

    if ($user && $user['role'] === 'user') {
      session_start();
      $_SESSION['user'] = $user;
      header('Location: views/user/dashboard.php');
    } else{
      header('Location: ../views/error.php?msg=Credenciales inválidas o rol incorrecto');
    }
  }
    public function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    header('Location: login.php');
  }
}


 ?>