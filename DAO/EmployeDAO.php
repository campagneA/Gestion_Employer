<?php
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/commonDAO.php");
include_once(__DIR__ . "/../exception/DAOException.php");

class EmployeDAO extends CommonDAO
{
    function modifierInfo(Employe $employe): void
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("update employes2 set
        nom = ?,
        prenom = ?,
        emploi = ?,
        sup = ?,
        sal = ?,
        comm = ?,
        noserv = ?,
        noproj = ?
        where noemp = " . $employe->getNoemp() . ";");
        $stmt->bind_param(
            "sssiiiii",
            $employe->getNom(),
            $employe->getPrenom(),
            $employe->getEmploi(),
            $employe->getSup(),
            $employe->getSal(),
            $employe->getComm(),
            $employe->getNoserv(),
            $employe->getNoproj()
        );
        $stmt->execute();
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
    }

    function searchInfo()
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("select * from employes2");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);
        $employes = [];
        $rs->free();
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
        foreach ($data as $value) {
            $employe = (new Employe)->setNoemp($value["noemp"])
                ->setNom($value["nom"])
                ->setPrenom($value["prenom"])
                ->setEmploi($value["emploi"])
                ->setSup($value["sup"])
                ->setEmbauche($value["embauche"])
                ->setSal($value["sal"])
                ->setComm($value["comm"])
                ->setNoserv($value["noserv"])
                ->setNoproj($value["noproj"]);
            $employes[] = $employe;
        }
        return $employes;
    }

    function compteurAjout(): int
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("select count(*) from employes2 where date_ajout = CURDATE();");
        $stmt->execute();
        $rs = $stmt->get_result();
        $nbrA = $rs->fetch_all(MYSQLI_NUM);
        $rs->free();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
        return $nbrA[0][0];
    }

    function droitAdmin()
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("select noemp from employes2 where noemp in (select sup from employes2);");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_NUM);
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
        return $data;
    }

    function ajoutEmploye($employe): void
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("insert into employes2 values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURDATE())");
        $stmt->bind_param("isssisddii", $employe->getNoemp(), $employe->getNom(), $employe->getPrenom(), $employe->getEmploi(), $employe->getSup(), $employe->getEmbauche(), $employe->getSal(), $employe->getComm(), $employe->getNoserv(), $employe->getNoproj());
        $stmt->execute();
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
    }

    function suppression($pos): void
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("delete from employes2 where noemp = $pos");
        $stmt->execute();
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
    }

    function searchInfoModifier($noemp)
    {
        try {
        $bdd = $this->connexionMysqli();
        $stmt = $bdd->prepare("select * from employes2 where noemp = $noemp");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);
        $rs->free();
        $bdd->close();
        } catch (mysqli_sql_exception $a) {
            $message = "Un problème technique est survenu. Veuillez réessayer ultérieurement.";
            throw new DAOException($message, $a->getCode());
        }
        $employe = (new Employe)->setNoemp($data[0]["noemp"])->setNom($data[0]["nom"])->setPrenom($data[0]["prenom"])->setEmploi($data[0]["emploi"])->setSup($data[0]["sup"])->setSal($data[0]["sal"])->setComm($data[0]["comm"])->setNoserv($data[0]["noserv"])->setNoproj($data[0]["noproj"]);
        return $employe;
    }
}
