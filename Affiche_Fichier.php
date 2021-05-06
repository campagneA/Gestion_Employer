<?php session_start();
include("Connexion_Mysqli.php");
include_once(__DIR__ . "/Service/EmployeService.php");
include_once(__DIR__ . "/view/view_bouton.php");
include_once(__DIR__ . "/view/view_employes.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css_affiche_fichier.css">
    <title>Tableau du fichier</title>

</head>

<body>
    <?php
    if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) {
        boutonDeconnexion();
    } else {
        boutonConnexion();
    }
    if (isset($_SESSION['userMail']) && !empty($_SESSION['userMail'])) {
        $employeService = new EmployeService;
        $nbr = $employeService->compteurAjout();

        compteurAjoutToday($nbr);

        $finalListeSup = $employeService->droitAdmin();
        $result = $employeService->searchInfo();

        afficheEmployes($result, $_SESSION['pass'], $finalListeSup);
    }
    boutonRetour();
    ?>

</body>

</html>