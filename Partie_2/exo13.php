<?php
class Voiture
{
    //propriétés de la voiture 
    private $etat = "arreter";
    private $vitesse = 0;
    
    private $marque;
    private $modele;
    private $nbPortes ;
  

    public function __construct($Cmarque, $Cmodele, $CnbPortes)
    {
        $this->marque = $Cmarque;
        $this->modele = $Cmodele;
        $this->date = $CnbPortes ;
    }
    // Methods
    function getMarque()
    {
        return $this->marque;
    }
    function setMarque($Pmarque)
    {
        $this->marque = $Pmarque;
    }
    function getModele()
    {
        return $this->modele;
    }
    function setModele($Pmodele)
    {
        $this->modele = $Pmodele;
    }
    function getNbPortes ()
    {
        return $this->nbPortes ;
    }
    function setNbPortes ($PnbPortes )
    {
        $this->nbPortes  = $PnbPortes ;
    }

    function getEtat()
    {
        return $this->etat;
    }
    function setEtat($Petat)
    {
        $this->etat = $Petat;
    }
    function getVitesse()
    {
        return $this->vitesse;
    }
    function setVitesse($Pvitesse)
    {
        $this->vitesse = $Pvitesse;
    }
    function PlusVitesse($Pvitesse)
    {
        $this->vitesse +=$Pvitesse;
    }
    function MoinsVitesse($Pvitesse)
    {
        $this->vitesse -=$Pvitesse;
    }


    public function etat()//Infos
    {
         echo "<br> info <br> ************** <br>";
         echo "nom et modéle de la voiture : " . $this->getMarque() . " " .$this->getModele() ."<br>";
         echo "Nombre de porte" . $this->getNbPortes() ."<br>" ;
         echo "Le véhicule " .$this->getMarque() . " est " . $this->getEtat() . "<br>";
         echo "Sa vitesse actuel est actuellement de " . $this->getVitesse() . "km/h <br>";
        
    }

    public function demarrer()// démarrer la voiture 
    {
        if ($this->etat == "arreter") {
            $this->etat = "demarrer";
            echo $this->getMarque() . " " . $this->getModele() . " demarre";
            echo "<br>";
            return;
        } else {
            echo $this->getMarque() . " " . $this->getModele() . " ne peux pas démarrer elle est déjà entrain de faire autre chose.";
            echo "<br>";
            return;
        }
    }

    public function accelerer() // accelerer la voiture 
    {
        if ($this->etat == "demarrer") {
            if ($this->vitesse < 100) {
                $this->PlusVitesse(50);
                echo  $this->marque . " " . $this->getModele() . " accelere, ";
                echo $this->getMarque() . " " . $this->getModele() .  " est maintenant a " . $this->getVitesse() . "km/h";
                echo "<br>";
                return;
            } else {
                echo $this->modele . " ne peux pas acélerer, elle est déjà a fond ";
                echo "<br>";
                return;
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
            return;
        }
    }

    public function decelerer()
    {
        if ($this->etat == "demarrer") {
            if ($this->vitesse > 0) {
                $this->MoinsVitesse(50);
                echo  $this->marque . " " . $this->getModele() . " decelere";
                echo $this->getModele() .  " est maintenant a " . $this->getVitesse() . "km/h";
                echo "<br>";
                return;
            } else {
                echo $this->modele . " ne peux pas decelerer, elle est a arret ";
                echo "<br>";
                return;
            }
        } else {
            echo "Allume déjà le moteur !";
            echo "<br>";
            return;
        }
    }

    public function arreter()
    {
        if ($this->vitesse === 0) {
            if ($this->etat == "demarrer") {
                $this->setEtat("arreter");
                echo $this->getMarque() . " " . $this->getModele() . "eteint son moteur.";
                echo "<br>";
                return;
            } else {
                echo $this->getMarque() . " " . $this->getModele() . "est déja éteint";
                echo "<br>";
                return;
            }
        } else {
            echo $this->getMarque() . " " . $this->getModele() . "roule encore";
            echo "<br>";
            return;
        }
    }
}
echo '<br>';
$a = new Voiture('Peugeot', '308', 5);
$b = new Voiture("Citroën","C4",3 );

$a->demarrer();
$a->arreter();
$a->demarrer();
$a->decelerer();
$a->arreter();
$a->decelerer();
$a->demarrer();
$a->accelerer();
$a->accelerer();
$a->accelerer();
$a->decelerer();
$a->decelerer();
$a->decelerer();


$b->etat();
$b->demarrer();
$b->etat();
$b->accelerer();
$b->etat();
