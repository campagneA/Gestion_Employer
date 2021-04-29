<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Tableau du fichier</title>
    <style>
        body {
            background-image: url(../../Fil_Rouge_SquareEnix/Fil_Rouge/Logo/Fond_de_site_profil.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        table {
            margin-top: 50px;
        }

        .position-compteur {
            position: fixed;
            top: 0%;
            right: 2%;
            background-color: black;
            color: white;
            padding-left: 30px;
            padding-right: 30px;
        }

        .button-retour-bot {
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

        .button-retour-bot:hover {
            background-color: black;
            color: whitesmoke;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            left: 6px;
            color: white;
            position: absolute;
            top: 0;
            left: 0;
        }

        li a {
            display: block;
            text-decoration: none;
            color: white;
            padding: 14px 16px;
        }

        li a:hover {
            background-color: #111;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) { ?>
        <ul>
            <li><a href="Deconnection.php">Deconnection</a></li>
        </ul>
    <?php } else { ?>
        <ul>
            <li><a href="Connection.php">Connection</a></li>
        </ul>
    <?php
    }
    if (!empty($_SESSION['userMail']) && isset($_SESSION['userMail'])) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "campagne.a", "AllenWalker59", "gestion_employer");
        $result = mysqli_query($bdd, "select * from employes2");

        $nbrAjout = mysqli_query($bdd, "select count(*) from employes2 where date_ajout = CURDATE();");
        $nbrA = mysqli_fetch_all($nbrAjout);
        $nbr = $nbrA[0];
        echo "<h5 class='position-compteur'>Nombre d'Ajout Aujourd'hui : $nbr[0] </h5>";

        $condition = mysqli_query($bdd, "select noemp from employes2 where noemp in (select sup from employes2);");
        $listeSup = mysqli_fetch_all($condition);
        $finalListeSup = [];
        foreach ($listeSup as $sup) {
            $finalListeSup[] = $sup[0];
        }
        echo "<table class='table table-dark table-striped text-center'><tr><th>NOEMP</th><th>NOM</th><th>PRENOM</th><th>EMPLOI</th><th>SUP</th><th>EMBAUCHE</th>";
        if ($_SESSION['pass'] == 'Admin') {
            echo "<th>SALAIRE</th><th>COMMISSION</th>";
        }
        echo "<th>NOSERV</th><th>NOPROJ</th>";
        if ($_SESSION['pass'] == 'Admin') {
            echo "<th>#</th><th>#</th>";
        }
        echo "</tr>";
        while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $data["noemp"] . "</td>";
            echo "<td>" . $data["nom"] . "</td>";
            echo "<td>" . $data["prenom"] . "</td>";
            echo "<td>" . $data["emploi"] . "</td>";
            echo "<td>" . $data["sup"] . "</td>";
            echo "<td>" . $data["embauche"] . "</td>";
            if ($_SESSION['pass'] == 'Admin') {
                echo "<td>" . $data["sal"] . "</td>";
                echo "<td>" . $data["comm"] . "</td>";
            }
            echo "<td>" . $data["noserv"] . "</td>";
            echo "<td>" . $data["noproj"] . "</td>";

            if ($_SESSION['pass'] == 'Admin') {
                if (array_search($data["noemp"], $finalListeSup) == false) {
                    echo "<td><a class='btn btn-danger btn-sm' href='Demande_Supp.php?id=$data[noemp]'>X</a></td>";
                } else {
                    echo "<td></td>";
                }
                echo "<td><a class='btn btn-warning btn-sm' href='Modifier_info.php?id=$data[noemp]'>Modifier</a></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        $bdd->close();
    }
    ?>
    <a href="Test_formulaire.php" type="button" class="button-retour-bot">Retour</a>

</body>

</html>