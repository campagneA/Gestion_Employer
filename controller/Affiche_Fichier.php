<?php session_start();
include_once(__DIR__ . "/../Service/EmployeService.php");
include_once(__DIR__ . "/../view/view_bouton.php");
include_once(__DIR__ . "/../view/view_employes.php");
include_once(__DIR__ . "/../exception/serviceException.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css_affiche_fichier.css">
    <title>Tableau du fichier</title>

</head>

<body>
    <?php
    if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) {
        boutonDeconnexion();
    } else {
        boutonConnexion();
    }
    if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) {
        $employeService = new EmployeService;
        try {
        $nbr = $employeService->compteurAjout();
        } catch (serviceException $a){
            afficheError($a);
        }

        compteurAjoutToday($nbr);

        try {
            $finalListeSup = $employeService->droitAdmin();
        } catch (serviceException $a) {
            afficheError($a);
        }

        try {
            $result = $employeService->searchInfo();
        } catch (serviceException $a) {
            afficheError($a);
        }

        afficheEmployes($result, $_SESSION['pass'], $finalListeSup);
    }
    boutonRetour();
    ?>

</body>

</html>