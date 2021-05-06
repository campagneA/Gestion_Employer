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
        $finalListeSup = [];
        foreach ($droitAdmin as $sup) {
            $finalListeSup[] = $sup[0];
        }
        return $finalListeSup;
    }

    public function ajoutEmploye($employe): void
    {
        $employeDAO = new EmployeDAO;
        $employeDAO->ajoutEmploye($employe);
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
