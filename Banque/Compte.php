<?php


//creation de compte
class Compte
{
    // Attributs

    public $ecriture;
    public $balanceInitiale;
    public $argent;


    public $balance;
    public $montant;

    public function __construct($c_ecriture, $c_balanceInitiale, $c_argent)
    {

        $this->Ecriture = $c_ecriture;
        $this->balanceInitiale = $c_balanceInitiale;
        $this->Argent = $c_argent;
        $this->balance = $c_balanceInitiale;
    }

    // Méthodes 

    function getEcriture()
    {
        return $this->Ecriture;
    }
    function getBalanceInitiale()
    {
        return $this->balanceInitiale;
    }
    function getArgent()
    {
        return $this->Argent;
    }

    function getBalance()
    {
        return $this->balance;
    }
    function getMontant()
    {
        return $this->Montant;
    }

    //fonctions
    public function __toString()
    {
        $display = "Compte client: $this->Ecriture <br>
        Montant Initial :  $this->balanceInitiale $this->Argent<br>
        Montant Actuel : $this->balance $this->Argent<br>
        ";

        return $display;
    }
}
