<?php
include_once(__DIR__ . "/../Service/UserService.php");

$userService = new userService;
if (verifyInfo($_POST['newUser'], $_POST['newPass'], $_POST['newPassConf'])) {
    $userService->creationCompte($_POST['newUser'], $_POST['newPass']);
    header("location: Connection.php");
} else {
    header("location: New_Compte.php?error=error");
}

function verifyInfo($newUser, $newPass, $newPassConf)
{
    if (
        !empty($newPass) &&
        !empty($newPassConf) &&
        !empty($newUser) &&
        preg_match('#^([\w\.-.]+)@([\w\.-]+)(\.[a-z]{2,4})$#', $newUser) &&
        $newPass == $newPassConf
    ) {
        return true;
    }
    return false;
}
