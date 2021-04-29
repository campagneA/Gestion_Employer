<?php
$bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "campagne.a", "12345", "gestion_employer");
$requete = "select * from userconnect where UserMail = '$_POST[userMail]';";
$result = mysqli_query($bdd, $requete);
$sql = mysqli_fetch_array($result, MYSQLI_ASSOC);
if (!empty($sql) && isset($sql) && password_verify($_POST['passWord'], $sql['PassWord'])) {
    session_start();
    $_SESSION['userMail'] = "$_POST[userMail]";
    $_SESSION['pass'] = "$sql[Profil]";
    header("location: Test_formulaire.php");
} else {
    header("location: Connection.php");
}
