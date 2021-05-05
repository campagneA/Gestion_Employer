<?php

class UserDAO
{
    function checkConnection($userMail)
    {
        $bdd = connectionMysqli();
        $stmt = $bdd->prepare("select * from userconnect where UserMail = ?;");
        $stmt->bind_param("s", $userMail);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_array(MYSQLI_ASSOC);
        $result->free();
        $bdd->close();
        return $data;
    }

    function creationCompte($newUser, $newPass): void
    {
        $bdd = connectionMysqli();
        $stmt = $bdd->prepare("insert into userconnect (UserMail, PassWord, Profil) values ('$newUser', '$newPass', 'User');");
        $stmt->bind_param("ss", $newUser, $newPass);
        $stmt->execute();
        $bdd->close();
    }
}
