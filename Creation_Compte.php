<?php
include("Connection_Mysqli.php");

if (
    !empty($_POST['newPass']) && !empty($_POST['newPassConf']) && !empty($_POST['newUser'])
    && preg_match('#^([\w\.-.]+)@([\w\.-]+)(\.[a-z]{2,4})$#', $_POST['newUser'])
    && $_POST['newPass'] == $_POST['newPassConf']
) {
    creationCompte($_POST['newUser'], $_POST['newPass']);
    header("location: Connection.php");
} else {
    header("location: New_Compte.php?error=error");
}

function creationCompte($newUser, $newPass)
{
    $pass = password_hash($newPass, PASSWORD_DEFAULT);
    $bdd = connectionMysqli();
    $requete = "insert into userconnect (UserMail, PassWord, Profil) values ('$newUser', '$pass', 'User');";
    mysqli_query($bdd, $requete);
    mysqli_close($bdd);
}
