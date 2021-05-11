<?php
include_once(__DIR__ . "/../DAO/UserDAO.php");

class UserService
{
    public function checkConnexion($userMail, $userPass)
    {
        try {
        $userDAO = new UserDAO;
        $result = $userDAO->searchByMail($userMail);
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
        if (password_verify($userPass, $result->getPassWord())){
            return $result;
        }
        return null;
    }

    public function creationCompte($newUser, $newPass): void
    {
        try {
        $pass = password_hash($newPass, PASSWORD_DEFAULT);
        $userDAO = new UserDAO;
        $userDAO->creationCompte($newUser, $pass);
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
    }
}
