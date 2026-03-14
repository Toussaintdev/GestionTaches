<?php
class Tache
{
    private $idTache;
    private $idUser;
    private $libelle;
    private $description;
    private $dateDebut;
    private $dateFin;
    private $importance;
    private $etatTache;
    private $niveau;

    function __construct($idtache, $idUser, $lib, $desc, $dateD, $dateF, $imp, $etat, $niv)
    {
        $this->idTache = $idtache;
        $this->idUser = $idUser;
        $this->libelle = $lib;
        $this->description = $desc;
        $this->dateDebut = $dateD;
        $this->dateFin = $dateF;
        $this->importance = $imp;
        $this->etatTache = $etat;
        $this->niveau = $niv;
    }

    function getIdTache()
    {
        return $this->idTache;
    }
    function getIdUser()
    {
        return $this->idUser;
    }

    function getLibelle()
    {
        return $this->libelle;
    }

    function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    function getDescription()
    {
        return $this->description;
    }

    function setDescription($description)
    {
        $this->description = $description;
    }

    function getDateDebut()
    {
        return $this->dateDebut;
    }

    function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    function getDateFin()
    {
        return $this->dateFin;
    }

    function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    function getImportance()
    {
        return $this->importance;
    }

    function setImportance($importance)
    {
        $this->importance = $importance;
    }

    function getEtatTache()
    {
        return $this->etatTache;
    }

    function setEtatTache($etatTache)
    {
        $this->etatTache = $etatTache;
    }
    function getNiveau()
    {
        return $this->niveau;
    }

    function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }
}
