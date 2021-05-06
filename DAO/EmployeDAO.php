<?php
include_once(__DIR__ . "/../model/Employe.php");

class EmployeDAO
{
    function modifierInfo(Employe $employe): void
    {
        $bdd = connexionMysqli();
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
    }

    function searchInfo()
    {
        $bdd = connexionMysqli();
        $stmt = $bdd->prepare("select * from employes2");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);
        $employes = [];
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
        $bdd->close();
        return $employes;
    }

    function compteurAjout(): int
    {
        $bdd = connexionMysqli();
        $stmt = $bdd->prepare("select count(*) from employes2 where date_ajout = CURDATE();");
        $stmt->execute();
        $rs = $stmt->get_result();
        $nbrA = $rs->fetch_all(MYSQLI_NUM);
        $rs->free();
        return $nbrA[0][0];
    }

    function droitAdmin()
    {
        $bdd = connexionMysqli();
        $stmt = $bdd->prepare("select noemp from employes2 where noemp in (select sup from employes2);");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_NUM);
        $bdd->close();
        return $data;
    }

    function ajoutEmploye($employe): void
    {
        $bdd = connexionMysqli();
        $stmt = $bdd->prepare("insert into employes2 values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURDATE())");
        $stmt->bind_param("isssisddii", $employe->getNoemp(), $employe->getNom(), $employe->getPrenom(), $employe->getEmploi(), $employe->getSup(), $employe->getEmbauche(), $employe->getSal(), $employe->getComm(), $employe->getNoserv(), $employe->getNoproj());
        $stmt->execute();
        $bdd->close();
    }

    function suppression($pos): void
    {
        $bdd = connexionMysqli();
        $stmt = $bdd->prepare("delete from employes2 where noemp = $pos");
        $stmt->execute();
        $bdd->close();
    }

    function searchInfoModifier($noemp)
    {
        $bdd = connexionMysqli();
        $stmt = $bdd->prepare("select * from employes2 where noemp = $noemp");
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_all(MYSQLI_ASSOC);
        $employe = (new Employe)->setNoemp($data[0]["noemp"])->setNom($data[0]["nom"])->setPrenom($data[0]["prenom"])->setEmploi($data[0]["emploi"])->setSup($data[0]["sup"])->setSal($data[0]["sal"])->setComm($data[0]["comm"])->setNoserv($data[0]["noserv"])->setNoproj($data[0]["noproj"]);
        $rs->free();
        $bdd->close();
        return $employe;
    }
}
