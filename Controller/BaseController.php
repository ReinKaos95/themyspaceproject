<?php 
/**
 * 
 */
class BaseController
{
	protected $auth;
	function __construct($pdo)
	{
		$this->auth = new Auth($pdo);
	}
	    public function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
  }
}
 ?>