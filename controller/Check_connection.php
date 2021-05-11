<?php
include_once(__DIR__ . "/../Service/UserService.php");

$userService = new UserService;
if ($userService->checkConnexion($_POST['userMail'], $_POST['userPass']) != null) {
    session_start();
    $_SESSION['userMail'] = "$_POST[userMail]";
    $_SESSION['pass'] = "$sql[Profil]";
    header("location: Test_formulaire.php");
} else {
    header("location: Connection.php");
}
