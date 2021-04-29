<?php
session_start();
include("Connection_Mysqli.php");

suppression($_GET["id"]);

header("Location: Affiche_Fichier.php");

function suppression($pos)
{
    $bdd = connectionMysqli();
    mysqli_query($bdd, "delete from employes2 where noemp = $pos");
    mysqli_close($bdd);
}
