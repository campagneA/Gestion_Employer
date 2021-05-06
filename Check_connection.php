<?php
include("Connexion_Mysqli.php");
include_once(__DIR__ . "/Service/UserService.php");

$userService = new UserService;
$sql = $userService->checkConnexion($_POST['userMail']);
if (!empty($sql) && isset($sql) && password_verify($_POST['passWord'], $sql['PassWord'])) {
    session_start();
    $_SESSION['userMail'] = "$_POST[userMail]";
    $_SESSION['pass'] = "$sql[Profil]";
    header("location: Test_formulaire.php");
} else {
    header("location: Connection.php");
}
