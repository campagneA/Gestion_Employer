<?php
include("Connection_Mysqli.php");

$sql = checkConnection($_POST['userMail']);
if (!empty($sql) && isset($sql) && password_verify($_POST['passWord'], $sql['PassWord'])) {
    session_start();
    $_SESSION['userMail'] = "$_POST[userMail]";
    $_SESSION['pass'] = "$sql[Profil]";
    header("location: Test_formulaire.php");
} else {
    header("location: Connection.php");
}

function checkConnection($userMail)
{
    $bdd = connectionMysqli();
    $requete = "select * from userconnect where UserMail = '$userMail';";
    $result = mysqli_query($bdd, $requete);
    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
    mysqli_close($bdd);
    return $data;
}
