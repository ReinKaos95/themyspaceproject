<?php 


class UserController
{
  private $auth;


  function __construct()
  {
    $this->auth = new Auth()
  }


  public function login($email, $password)
  {
    $user = $this->auth->authenticate($email, $password);

    if ($user) {
      if (['role'] === 'user') {
        $_SESSION['user'] = 'user';
        header('Location: dashboard.php')
      }
    } else {
      echo "Usted no posee los permisos para entrar";
    } else {
      echo "Identificacion invalida";
    }
  }

  public function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    header('Location: login.php')
  }
}

 ?>