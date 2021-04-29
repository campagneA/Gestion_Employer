<?php
session_start();
$pos = $_GET["id"];
$bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "AdminAlex", "12345", "gestion_employer");
$result = mysqli_query($bdd, "delete from employes2 where noemp = $pos");

$bdd->close();
header("Location: Affiche_Fichier.php");
exit;
