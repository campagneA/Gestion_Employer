<?php
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../DAO/EmployeDAO.php");

class EmployeService
{
    public function modifierInfo(Employe $employe): void
    {
        $employeDAO = new EmployeDAO;
        $employeDAO->modifierInfo($employe);
    }

    public function searchInfo()
    {
        $employeDAO = new EmployeDAO;
        $employes = $employeDAO->searchInfo();
        return $employes;
    }

    public function compteurAjout(): int
    {
        $employeDAO = new EmployeDAO;
        $compteur = $employeDAO->compteurAjout();
        return $compteur;
    }

    public function droitAdmin()
    {
        $employeDAO = new EmployeDAO;
        $droitAdmin = $employeDAO->droitAdmin();
        return $droitAdmin;
    }

    public function ajoutEmploye(int $noemp, string $nom, string $prenom, string $emploi, int $sup, string $embauche, float $sal, float $comm, int $noserv, int $noproj): void
    {
        $employeDAO = new EmployeDAO;
        $employeDAO->ajoutEmploye($noemp, $nom, $prenom, $emploi, $sup, $embauche, $sal, $comm, $noserv, $noproj);
    }

    public function suppression($pos): void
    {
        $employeDAO = new EmployeDAO;
        $employeDAO->suppression($pos);
    }

    function searchInfoModifier($noemp)
    {
        $employeDAO = new EmployeDAO;
        $result = $employeDAO->searchInfoModifier($noemp);
        return $result;
    }
}
