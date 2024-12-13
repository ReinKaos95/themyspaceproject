<?php 

/**
 * 
 */
class Auth
{
 
  private $users = [
    ['email' => 'walter@hotmail.com', 'password' => '1234', 'role' => 'user'],
    ['email' => 'carlos@hotmail.com', 'password' => '1234', 'role' => 'admin']
];

    public function authenticate($email, $password) {
        foreach ($this->users as $user) {
            if ($user['email'] === $email && $user['password'] === $password) {
                return $user;
            }
        }
        return null;
    }

}
 ?>