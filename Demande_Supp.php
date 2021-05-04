<?php
session_start();
include("Connection_Mysqli.php");

suppression($_GET["id"]);

header("Location: Affiche_Fichier.php");

function suppression($pos)
{
    $bdd = connectionMysqli();
    $stmt = $bdd->prepare("delete from employes2 where noemp = $pos");
    $stmt->execute();
    $bdd->close();
}
