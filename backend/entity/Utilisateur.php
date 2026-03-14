<?php
class Utilisateur
{
    private $idUser;
    private $nom;
    private $prenom;
    private $login;
    private $password;
    private $email;
    private $numero;

    function __construct($nom, $prenom, $login, $password, $email, $numero, $id = null)
    {
        $this->idUser = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->numero = $numero;
    }

    function getIdUser()
    {
        return $this->idUser;
    }

    function getNom()
    {
        return $this->nom;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function getLogin()
    {
        return $this->login;
    }

    function setLogin($login)
    {
        $this->login = $login;
    }

    function getPassword()
    {
        return $this->password;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getNumero()
    {
        return $this->numero;
    }

    function setNumero($numero)
    {
        $this->numero = $numero;
    }
}
