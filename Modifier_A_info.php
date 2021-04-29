<?php
session_start();
include("Connection_Mysqli.php");

modifierInfo(
    $_POST["noemp"],
    $_POST["nom"],
    $_POST["prenom"],
    $_POST["emploi"],
    $_POST["sup"],
    $_POST["sal"],
    $_POST["comm"],
    $_POST["noserv"],
    $_POST["noproj"]
);

function modifierInfo($pos, $nom, $prenom, $emploi, $sup, $sal, $comm, $noserv, $noproj)
{
    $bdd = connectionMysqli();
    $sql = "update employes2 set 
    nom = '$nom',
    prenom = '$prenom',
    emploi = '$emploi',
    sup = '$sup',
    sal = '$sal',
    comm = '$comm',
    noserv = '$noserv',
    noproj = '$noproj'
    where noemp = '$pos';";
    mysqli_query($bdd, $sql);
    mysqli_close($bdd);
}

header("Location: Affiche_Fichier.php");
