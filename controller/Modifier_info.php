<?php session_start();
include_once(__DIR__ . "/../Service/EmployeService.php");
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../view/view_employes.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css_modifier_info.css">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['userMail']) && !empty($_SESSION['userMail'])) {
        $employeService = new EmployeService;
        $result = $employeService->searchInfoModifier($_GET["id"]);

        afficheInfoEmploye($result);
    }
    ?>

    <a href='Affiche_Fichier.php'>retour</a>
</body>

</html>