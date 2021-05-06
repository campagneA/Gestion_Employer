<?php
include("Connection_Mysqli.php");
include_once(__DIR__ . "/model/Employe.php");
include_once(__DIR__ . "/DAO/EmployeDAO.php");

$employe = (new Employe)
    ->setNoemp($_POST["noemp"])
    ->setNom($_POST["nom"])
    ->setPrenom($_POST["prenom"])
    ->setEmploi($_POST["emploi"])
    ->setSup($_POST["sup"])
    ->setEmbauche($_POST["embauche"])
    ->setSal($_POST["sal"])
    ->setComm($_POST["comm"])
    ->setNoserv($_POST["noserv"])
    ->setNoproj($_POST["noproj"]);


$message = verifyInfoPourAjout($employe);

if (!$message) {
    $employeService = new EmployeService();
    $employeService->ajoutEmploye($employe);
    header("Location: Affiche_Fichier.php");
} else {
    header("Location: Test_formulaire.php?error=$message");
}

function verifyInfoPourAjout($employe)
{
    $message = [];

    if (empty($employe->getNoemp()) || !preg_match("#^[0-9]{4}$#", $employe->getNoemp())) {
        $message = "<h4>\n- Numero Employes -</h4>";
    }
    if (empty($employe->getNom()) || preg_match("#^[a-z -]{2,20}$#i", $employe->getNom())) {
    } else {
        $message = "<h4>\n- Nom -</h4>";
    }
    if (empty($employe->getPrenom()) || preg_match("#^[a-z -]{2,20}$#i", $employe->getPrenom())) {
    } else {
        $message = "<h4>\n- Prenom -</h4>";
    }
    if (empty($employe->getEmploi()) || preg_match("#^[a-z -]{2,20}$#i", $employe->getEmploi())) {
    } else {
        $message = "<h4>\n- Emploi -</h4>";
    }
    if (empty($employe->getSup()) || preg_match("#^([12][0-9]{3})?$#", $employe->getSup())) {
    } else {
        $message = "<h4>\n- Numero du Supérieur -</h4>";
    }
    if (empty($employe->getEmbauche()) || preg_match("#^(?:19|20)[0-9]{2}[-\\/ ]?(0?[1-9]|1[0-2])[-\\/ ]?(0?[1-9]|[12][0-9]|3[01])$#", $employe->getEmbauche())) {
    } else {
        $message = "<h4>\n- Date Embauche -</h4>";
    }
    if (empty($employe->getSal()) || preg_match("#^[1-9][0-9]{3,8}$#", $employe->getSal())) {
    } else {
        $message = "<h4>\n- Salaire -</h4>";
    }
    if (empty($employe->getComm()) || preg_match("#^([1-9][0-9]{2,8})?$#", $employe->getComm())) {
    } else {
        $message = "<h4>\n- Commission -</h4>";
    }
    if (empty($employe->getNoserv()) || preg_match("#^[1-7]$#", $employe->getNoserv())) {
    } else {
        $message = "<h4>\n- Numero Service -</h4>";
    }
    if (empty($employe->getNoproj()) || preg_match("#^10[0-9]$#", $employe->getNoproj())) {
    } else {
        $message = "<h4>\n- Numero Projet -</h4>";
    }
    return $message;
}
