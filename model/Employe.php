<?php

class Employe
{
    private $noemp;
    private $nom;
    private $prenom;
    private $emploi;
    private $sup;
    private $embauche;
    private $sal;
    private $comm;
    private $noserv;
    private $noproj;


    public function getNoemp(): int
    {
        return $this->noemp;
    }

    public function setNoemp(int $noemp): self
    {
        $this->noemp = $noemp;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmploi(): string
    {
        return $this->emploi;
    }

    public function setEmploi(string $emploi): self
    {
        $this->emploi = $emploi;
        return $this;
    }

    public function getSup(): ?float
    {
        return $this->sup;
    }

    public function setSup(?float $sup): self
    {
        $this->sup = $sup;
        return $this;
    }

    public function getSal(): ?float
    {
        return $this->sal;
    }

    public function setSal(?float $sal): self
    {
        $this->sal = $sal;
        return $this;
    }

    public function getComm(): ?float
    {
        return $this->comm;
    }

    public function setComm(?float $comm): self
    {
        $this->comm = $comm;
        return $this;
    }

    public function getNoserv(): int
    {
        return $this->noserv;
    }

    public function setNoserv(int $noserv): self
    {
        $this->noserv = $noserv;
        return $this;
    }

    public function getNoproj(): int
    {
        return $this->noproj;
    }

    public function setNoproj(int $noproj): self
    {
        $this->noproj = $noproj;
        return $this;
    }

    public function getEmbauche(): ?string
    {
        return $this->embauche;
    }

    public function setEmbauche(?string $embauche): self
    {
        $this->embauche = $embauche;
        return $this;
    }
}
