<?php
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../DAO/EmployeDAO.php");
include_once(__DIR__ . "/../exception/serviceException.php");

class EmployeService
{
    public function modifierInfo(Employe $employe): void
    {
        try {
        $employeDAO = new EmployeDAO;
        $employeDAO->modifierInfo($employe);
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
    }

    public function searchInfo()
    {
        try {
        $employeDAO = new EmployeDAO;
        $employes = $employeDAO->searchInfo();
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
        return $employes;
    }

    public function compteurAjout(): int
    {
        try {
        $employeDAO = new EmployeDAO;
        $compteur = $employeDAO->compteurAjout();
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
        return $compteur;
    }

    public function droitAdmin()
    {
        try {
        $employeDAO = new EmployeDAO;
        $droitAdmin = $employeDAO->droitAdmin();
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
        $finalListeSup = [];
        foreach ($droitAdmin as $sup) {
            $finalListeSup[] = $sup[0];
        }
        return $finalListeSup;
    }

    public function ajoutEmploye($employe): void
    {
        try {
        $employeDAO = new EmployeDAO;
        $employeDAO->ajoutEmploye($employe);
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
    }

    public function suppression($pos): void
    {
        try {
        $employeDAO = new EmployeDAO;
        $employeDAO->suppression($pos);
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
    }

    function searchInfoModifier($noemp)
    {
        try {
        $employeDAO = new EmployeDAO;
        $result = $employeDAO->searchInfoModifier($noemp);
        } catch (DAOException $a) {
            throw new ServiceException($a->getMessage(), $a->getCode());
        }
        return $result;
    }
}
