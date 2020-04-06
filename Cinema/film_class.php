<?php
//creation film
class Film
{
    // Attributs
    public $titre;
    public $genre;
    public $annee;
    public $duree;
    public $synopsis;
    public $realisateur;
    public $acteur;


    public function __construct($_titre, $_genre, $_annee, $_duree, $_synopsis, $_realisateur, $_acteur)
    {

        $this->titre = $_titre;
        $this->genre = $_genre;
        $this->annee = $_annee;
        $this->duree = $_duree;
        $this->synopsis = $_synopsis;
        $this->realisateur = $_realisateur;
        $this->acteur = $_acteur;
    }
    // Méthodes 
    function gettitre()
    {
        return $this->titre;
    }
    function getgenre()
    {
        return $this->genre;
    }
    function getannee()
    {
        return $this->annee;
    }
    function getduree()
    {
        return $this->duree;
    }
    function getsynopsis()
    {
        return $this->synopsis;
    }
    function getrealisateur()
    {
        return $this->realisateur;
    }
    function getacteur()
    {
        return $this->acteur;
    }


    //fonction
    public function __toString()
    {
        $display = "Le film $this->titre <br>
        Genre : $this->genre <br>
        Sortie en salle en : $this->annee<br>
        Durée : $this->duree <br>
        Synopsis : $this->synopsis <br>
        <br>Réalisé par : <br>
        $this->realisateur<br>";
        $display .= "<br>Avec comme acteur :<br>";
        foreach ($this->acteur as $key => $value) {
            $display .= "$value<br>";
        }
        return $display;
    }
}
