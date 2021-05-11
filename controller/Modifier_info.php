<?php session_start();
include_once(__DIR__ . "/../Service/EmployeService.php");
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../view/view_employes.php"); 
include_once(__DIR__ . "/../view/view_bouton.php"); 
include_once(__DIR__ . "/../exception/serviceException.php");?>
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
        if (!empty($_GET["id"]) && isset($_GET["id"])){
            $employe = $employeService->searchInfoModifier($_GET["id"]);
        } else {
            header("Location: Affiche_Fichier.php");
        }
        
        if ($_POST){
            $result = (new Employe)
                ->setNoemp($_POST["noemp"])
                ->setNom($_POST["nom"])
                ->setPrenom($_POST["prenom"])
                ->setEmploi($_POST["emploi"])
                ->setSup($_POST["sup"])
                ->setSal($_POST["sal"])
                ->setComm($_POST["comm"])
                ->setNoserv($_POST["noserv"])
                ->setNoproj($_POST["noproj"]);
            $employeService = new employeService;

            try {
                $employeService->modifierInfo($result);
                header("Location: Modifier_info.php");
            } catch (serviceException $a) {
                afficheError($a);
                afficheInfoEmploye($employe);
            }

        } else {
        afficheInfoEmploye($employe);
        }
    }
    boutonRetourEmploye();
    ?>
</body>

</html>