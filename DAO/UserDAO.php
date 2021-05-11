<?php
include_once(__DIR__ . "/commonDAO.php");
include_once(__DIR__ . "/../exception/DAOException.php");

class UserDAO extends CommonDAO
{
    function searchByMail($userMail)
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("select * from userconnect where UserMail = ?;");
        $stmt->bind_param("s", $userMail);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_array(MYSQLI_ASSOC);
        $result->free();
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
        $user = (new User)->setUserMail($data[0]["userMail"])->setPassWord($data[0]["passWord"])->setProfil($data[0]["profil"]);
        return $user;
    }

    function creationCompte($newUser, $newPass): void
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("insert into userconnect (UserMail, PassWord, Profil) values ('$newUser', '$newPass', 'User');");
        $stmt->bind_param("ss", $newUser, $newPass);
        $stmt->execute();
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
    }
}
