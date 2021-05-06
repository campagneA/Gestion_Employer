<?php
include_once(__DIR__ . "/../DAO/UserDAO.php");

class UserService
{
    public function checkConnexion($userMail)
    {
        $userDAO = new UserDAO;
        $sql = $userDAO->checkConnexion($userMail);
        return $sql;
    }

    public function creationCompte($newUser, $newPass): void
    {
        $pass = password_hash($newPass, PASSWORD_DEFAULT);
        $userDAO = new UserDAO;
        $userDAO->creationCompte($newUser, $pass);
    }
}
