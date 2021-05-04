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
    $stmt = $bdd->prepare("select * from userconnect where UserMail = '$userMail';");
    // $requete = $bdd->query("select * from userconnect where UserMail = '$userMail';");
    $stmt->bind_param("s", $userMail);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_array(MYSQLI_ASSOC);
    $result->free();
    $bdd->close();
    return $data;
}
