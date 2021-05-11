<?php
include_once(__DIR__ . "/../view/view_bouton.php");
include_once(__DIR__ . "/../view/view_user.php");
include_once(__DIR__ . "/../Service/UserService.php");
include_once(__DIR__ . "/../exception/serviceException.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="../css/css_new_compte.css">
</head>

<body>
    <?php
    if ($_POST){
        try {
            $userService = new userService;
            if (verifyInfo($_POST['newUser'], $_POST['newPass'], $_POST['newPassConf'])) {
                $userService->creationCompte($_POST['newUser'], $_POST['newPass']);
                header("location: Connection.php");
            } else {
                header("location: New_Compte.php?error=error");
            }
        } catch (serviceException $a) {
            afficheError($a);
        }
    } else {
        if (isset($_GET['error']) == "error") {
            echo "<p>Erreur de saisie !!!</p>";
        }
        boutonRetourUser();
        formulaireInscriptionUser();
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
    ?>

</body>

</html>