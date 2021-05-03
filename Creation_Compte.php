<?php
include("Connection_Mysqli.php");

if (
    !empty($_POST['newPass']) && !empty($_POST['newPassConf']) && !empty($_POST['newUser'])
    && preg_match('#^([\w\.-.]+)@([\w\.-]+)(\.[a-z]{2,4})$#', $_POST['newUser'])
    && $_POST['newPass'] == $_POST['newPassConf']
) {
    $pass = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
    creationCompte($_POST['newUser'], $pass);
    header("location: Connection.php");
} else {
    header("location: New_Compte.php?error=error");
}

function creationCompte($newUser, $newPass)
{
    $bdd = connectionMysqli();
    // $requete = "insert into userconnect (UserMail, PassWord, Profil) values ('$newUser', '$pass', 'User');";
    // mysqli_query($bdd, $requete);
    $bdd->query("insert into userconnect (UserMail, PassWord, Profil) values ('$newUser', '$newPass', 'User');");
    // mysqli_close($bdd);
    $bdd->close();
}
