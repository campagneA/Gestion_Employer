<?php
if (
    !empty($_POST['newPass']) && !empty($_POST['newPassConf']) && !empty($_POST['newUser'])
    && preg_match('#^([\w\.-.]+)@([\w\.-]+)(\.[a-z]{2,4})$#', $_POST['newUser'])
    && $_POST['newPass'] == $_POST['newPassConf']
) {
    $newPass = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
    $bdd = mysqli_init();
    mysqli_real_connect($bdd, "127.0.0.1", "AdminAlex", "12345", "gestion_employer");
    $requete = "insert into userconnect (UserMail, PassWord, Profil) values ('$_POST[newUser]', '$newPass', 'User');";
    $result = mysqli_query($bdd, $requete);
    $bdd->close();
    header("location: Connection.php");
} else {
    header("location: New_Compte.php?error=error");
}
