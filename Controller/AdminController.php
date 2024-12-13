<?php 

require_once 'Auth.php';

class AdminController
{
	
	function __construct()
	{
		$this->auth = new Auth();
	}

  public function login($email, $password)
  {
    $user = $this->auth->authenticate($email, $password);

    if ($user) {
      if (['role'] === 'user') {
        $_SESSION['user'] = 'user';
        header('Location: admin.php')
      }
    } else {
      echo "Usted no posee los permisos para entrar";
    } else {
      echo "Identificacion invalida";
    }
  }

    public function manageUsers() {
        // Ejemplo de función para gestionar usuarios
        echo "Aquí puedes gestionar usuarios.";
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