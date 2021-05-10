<?php
session_start();
include_once(__DIR__ . "/Service/EmployeService.php");

$employe = (new Employe)
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
$employeService->modifierInfo($employe);

header("Location: Affiche_Fichier.php");
