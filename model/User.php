<?php

class User
{
    private $userMail;
    private $passWord;
    private $profil;


    public function getUserMail(): string
    {
        return $this->userMail;
    }

    public function setUserMail(string $userMail): self
    {
        $this->userMail = $userMail;
        return $this;
    }

    public function getProfil(): string
    {
        return $this->profil;
    }

    public function setProfil(string $profil): self
    {
        $this->profil = $profil;
        return $this;
    }
}
