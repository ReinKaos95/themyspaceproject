<?php 

require_once 'logic/auth.php';


class AdminController extends BaseController
{
  private $auth;
  function __construct($pdo)
  {
    $this->auth = new Auth($pdo);
  }

  public function login($email, $password)
  {
    $user = $this->auth->authenticate($email, $password);

    if ($user && $user['role'] === 'admin') {
      session_start();
      $_SESSION['admin'] = $user;
      header('Location: ../views/admin/AdminBoard.php');
    } else {
      header('Location: views/error.php?msg=Credenciales inválidas o rol incorrecto');
    }

  }
    public function manageUsers() {
        // Ejemplo de función para gestionar usuarios
        echo "Aquí puedes gestionar usuarios.";
    }

}

?>