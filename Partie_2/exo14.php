<?php
class Voiture
{

    //propriétés de la voiture 
    protected $marque;
    protected $modele;

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }


    public function getInfos()
    {
        return "Marque : {$this->marque}<br>Modèle : {$this->modele}<br>";
    }
}

class Evoiture extends Voiture
{

    protected $autonomie;

    public function __construct($marque, $modele, $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function getInfos()
    {
        return "Marque : {$this->marque}<br>Modèle : {$this->modele}<br>Autonomie : {$this->autonomie}<br>";
    }
}


$voiture1 = new Voiture("Peugeot", "408");
$Evoiture = new Evoiture("BMW", "I3", 100);

echo $voiture1->getInfos();
echo "<br>";
echo $Evoiture->getInfos();
