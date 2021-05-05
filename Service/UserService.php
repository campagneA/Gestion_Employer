<?php
include_once(__DIR__ . "/../DAO/UserDAO.php");

class UserService
{
    public function checkConnection($userMail)
    {
        $userDAO = new UserDAO;
        $sql = $userDAO->checkConnection($userMail);
        return $sql;
    }

    public function creationCompte($newUser, $newPass): void
    {
        $pass = password_hash($newPass, PASSWORD_DEFAULT);
        $userDAO = new UserDAO;
        $userDAO->creationCompte($newUser, $pass);
    }
}
