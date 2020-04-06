<?php
//creation film
class Realisateur
{
    // Attributs
    public $nom;
    public $prenom;
    public $date;
    public $film = [];

    public function __construct($_nom, $_prenom, $_dateN)
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->dateN = $_dateN;
    }
    // Méthodes 
    function getnom()
    {
        return $this->nom;
    }
    function getprenom()
    {
        return $this->prenom;
    }
    function getdateN()
    {
        return $this->date;
    }
    function getfilm()
    {
        return $this->film;
    }
    //fonction
    public function __toString()
    {
        $display = "<strong>$this->nom $this->prenom née le $this->date</strong><br>Film :<br>";
        foreach ($this->film as $key => $value) {
            $display .= "<strong>$value</strong><br>";
        }
        return $display;
    }
}
