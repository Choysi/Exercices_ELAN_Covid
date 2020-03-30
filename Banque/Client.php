<?php

//creation client
class Client
{
    // Informations client
    public $numero;
    public $nom;
    public $prenom;
    public $naissance;
    public $ville;
    public $compte;
    public $age;

    public function __construct($c_numero, $c_nom, $c_prenom, $c_naissance, $c_ville)
    {
        $this->Numero = $c_numero;
        $this->Nom = $c_nom;
        $this->Prenom = $c_prenom;
        $this->Naissance = $c_naissance;
        $this->Ville = $c_ville;
        $this->Compte = array();
    }
    // Création d'objets 
    function getNumero()
    {
        return $this->Numero;
    }
    function getNom()
    {
        return $this->Nom;
    }
    function getPrenom()
    {
        return $this->Prenom;
    }
    function getNaissance()
    {
        return $this->Naissance;
    }
    function getVille()
    {
        return $this->Ville;
    }
    function getCompte()
    {
        return $this->Compte;
    }
    function getAge()
    {
        return $this->Age;
    }

    function setAge($p_age)
    {
        $this->Age = $p_age;
    }

    //fonctions
    public function newCompte(Compte $compte)
    {
        $this->Compte[$compte->getEcriture()] = $compte;
    }

    public function __toString()
    {
        $this->calculAge();
        $display = "Le client 
        $this->Nom $this->Prenom $this->Age ans, 
        né(e) le $this->Naissance, 
        habitant à $this->Ville, <br>
        Il detient les comptes suivant : <br><br>";
        foreach ($this->Compte as $value) {
            $display .= "$value<br>";
        }
        return $display;
    }

    public function calculAge()
    {
        $interval = date_diff(new DateTime($this->getNaissance()), new DateTime("now"));
        $age = $interval->format("%y");
        $this->setAge($age);
    }

    //crediter un compte
    public function credit($compteCrediter, $montant)
    {
        $this->Compte[$compteCrediter]->balance += $montant;
        return;
    }

    //débiter un compte
    public function debit($compteDebiter, $montant)
    {
        $this->Compte[$compteDebiter]->balance -= $montant;
        return;
    }

    // Virement d'un compte à l'autre
    public function virement($compteDebiter, $compteCrediter, $montant)
    {
        $this->debit($compteDebiter, $montant);
        $this->credit($compteCrediter, $montant);
        return;
    }
}
