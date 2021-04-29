<?php
session_start();
$pos = $_POST["noemp"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$emploi = $_POST["emploi"];
$sup = $_POST["sup"];
$sal = $_POST["sal"];
$comm = $_POST["comm"];
$noserv = $_POST["noserv"];
$noproj = $_POST["noproj"];



$bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "campagne.a", "12345", "gestion_employer");
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
$bdd->close();


header("Location: Affiche_Fichier.php");
