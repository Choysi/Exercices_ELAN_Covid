<?php
//creation film
class Acteur
{
    // Attributs
    public $nom;
    public $prenom;
    public $date;
    public $film = [];
    public $role = [];

    public function __construct($_nom, $_prenom, $_date)
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->date = $_date;
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
    function getdate()
    {
        return $this->date;
    }
    function getfilm()
    {
        return $this->film;
    }
    function getrole()
    {
        return $this->role;
    }

    //function
    public function __toString()
    {
        $display = "<strong>$this->nom $this->prenom née le $this->date</strong><br>Film :<br>";
        foreach ($this->film as $key => $value) {
            $display .= "<strong>$value</strong><br>";
            $leRole = $this->role[$key];
            $display .= "Role : $leRole<br><br>";
        }
        return $display;
    }
}

