<?php
include("Connection_Mysqli.php");

$noemp = $_POST["noemp"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$emploi = $_POST["emploi"];
$sup = $_POST["sup"];
$embauche = $_POST["embauche"];
$sal = $_POST["sal"];
$comm = $_POST["comm"];
$noserv = $_POST["noserv"];
$noproj = $_POST["noproj"];

$isThereError = false;
$message = "";

if (empty($noemp) || preg_match("#^[0-9]{4}$#", $noemp)) {
} else {
    $isThereError = true;
    $message = $message . "a";
}
if (empty($nom) || preg_match("#^[a-z -]{2,20}$#i", $nom)) {
} else {
    $isThereError = true;
    $message = $message . "b";
}
if (empty($prenom) || preg_match("#^[a-z -]{2,20}$#i", $prenom)) {
} else {
    $isThereError = true;
    $message = $message . "c";
}
if (empty($emploi) || preg_match("#^[a-z -]{2,20}$#i", $emploi)) {
} else {
    $isThereError = true;
    $message = $message . "d";
}
if (empty($sup) || preg_match("#^([12][0-9]{3})?$#", $sup)) {
} else {
    $isThereError = true;
    $message = $message . "e";
}
if (empty($embauche) || preg_match("#^(?:19|20)[0-9]{2}[-\\/ ]?(0?[1-9]|1[0-2])[-\\/ ]?(0?[1-9]|[12][0-9]|3[01])$#", $embauche)) {
} else {
    $isThereError = true;
    $message = $message . "f";
}
if (empty($sal) || preg_match("#^[1-9][0-9]{3,8}$#", $sal)) {
} else {
    $isThereError = true;
    $message = $message . "g";
}
if (empty($comm) || preg_match("#^([1-9][0-9]{2,8})?$#", $comm)) {
} else {
    $isThereError = true;
    $message = $message . "h";
}
if (empty($noserv) || preg_match("#^[1-7]$#", $noserv)) {
} else {
    $isThereError = true;
    $message = $message . "i";
}
if (empty($noproj) || preg_match("#^10[0-9]$#", $noproj)) {
} else {
    $isThereError = true;
    $message = $message . "j";
}

if (!$isThereError) {
    ajoutEmploye($noemp, $nom, $prenom, $emploi, $sup, $embauche, $sal, $comm, $noserv, $noproj);
    header("Location: Affiche_Fichier.php");
} else {
    header("Location: Test_formulaire.php?error=$message");
}

function ajoutEmploye($noemp, $nom, $prenom, $emploi, $sup, $embauche, $sal, $comm, $noserv, $noproj)
{
    $bdd = connectionMysqli();
    $stmt = $bdd->prepare("insert into employes2 values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURDATE())");
    $stmt->bind_param("isssisddii", $noemp, $nom, $prenom, $emploi, $sup, $embauche, $sal, $comm, $noserv, $noproj);
    $stmt->execute();
    $bdd->close();
}
