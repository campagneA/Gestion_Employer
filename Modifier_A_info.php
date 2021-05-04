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

function modifierInfo($noemp, $nom, $prenom, $emploi, $sup, $sal, $comm, $noserv, $noproj)
{
    $bdd = connectionMysqli();
    $stmt = $bdd->prepare("update employes2 set
    nom = ?,
    prenom = ?,
    emploi = ?,
    sup = ?,
    sal = ?,
    comm = ?,
    noserv = ?,
    noproj = ?
    where noemp = $noemp;");
    $stmt->bind_param("sssiiiii", $nom, $prenom, $emploi, $sup, $sal, $comm, $noserv, $noproj);
    $stmt->execute();
    $bdd->close();
}

header("Location: Affiche_Fichier.php");
