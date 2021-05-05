<?php session_start();
include("Connection_Mysqli.php");
include_once(__DIR__ . "/DAO/Employe_DAO.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-image: url(../../Fil_Rouge_SquareEnix/Fil_Rouge/Logo/Fond_de_site_profil.jpg);
            background-size: cover;
        }

        a {
            text-decoration: none;
            display: block;
            width: 60px;
            height: 25px;
            text-align: center;
            color: black;
            background-color: whitesmoke;
            border: 2px solid black;
            position: fixed;
            bottom: 0%;
            left: 0%;
        }

        a:hover {
            background-color: black;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) {
        $employeService = new EmployeService;
        $result = $employeService->searchInfoModifier($_GET["id"]);
        foreach ($result as $data) {
            echo "<form method='POST' action='Modifier_A_info.php'><table class='table table-dark table-striped text-center'>";
            echo "<caption type='number' class='form-control text-center' name='noemp'>" . $data['noemp'] . "</caption>";
            echo "<tr><th>nom</th><th>prenom</th><th>emploi</th><th>sup</th><th>sal</th><th>comm</th><th>noserv</th><th>noproj</th><th>#</th></tr>";
            echo "<tr>";
            echo "<td><input type='text' class='form-control' name='nom' value='$data[nom]'></td>";
            echo "<td><input type='text' class='form-control' name='prenom' value='$data[prenom]'></td>";
            echo "<td><input type='text' class='form-control' name='emploi' value='$data[emploi]'></td>";
            echo "<td><input type='number' class='form-control' name='sup' value='$data[sup]'></td>";
            echo "<td><input type='number' class='form-control' name='sal' value='$data[sal]'></td>";
            echo "<td><input type='number' class='form-control' name='comm' value='$data[comm]'></td>";
            echo "<td><input type='number' class='form-control' name='noserv' value='$data[noserv]'></td>";
            echo "<td><input type='number' class='form-control' name='noproj' value='$data[noproj]'></td>";
            echo "<td><input type='submit' class='btn btn-warning btn-sm' value='submit' name='submit'></td>";
            echo "</tr></table><input type='hidden' name='noemp' value='$data[noemp]'></form>";
        }
    }
    echo "<a href='Affiche_Fichier.php'>retour</a>";
    ?>
</body>

</html>