<?php 

require_once 'db.php';
class Auth
{
    private $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function authenticate($email, $password)
    {
        $password = password_hash('user123', PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("select * from users where email = :email and password = :password");
        $stmt->execute(['email' => $email, 'password' => $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($password, $user['password'])) {
                
        return $user;
    }
    return null;
    }

}
 ?>