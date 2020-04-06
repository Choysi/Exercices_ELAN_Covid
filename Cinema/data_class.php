<?php
include "film_class.php";

class Data
{
    public $allfilm = [];
    public $allGenre = [];
    public $allReal = [];
    public $allAct = [];
    public $allRole = [];

    function getallfilm()
    {
        return $this->allfilm;
    }
    function getallGenre()
    {
        return $this->allGenre;
    }
    function getallRea()
    {
        return $this->allRea;
    }
    function getallAct()
    {
        return $this->allAct;
    }
    function getallRole()
    {
        return $this->allRole;
    }

    function __tostring()
    {
        $films = "";
        foreach ($this->allfilm as $key => $value) {
            $films .= "<strong>Référence du film: $key</strong><br>
            $value<br>
            <br>";
        }

        $genres = "";
        foreach ($this->allGenre as $key => $value) {
            $genres .= "$value<br>";
        }

        $realisateurs = "";
        foreach ($this->allReal as $key => $value) {
            $realisateurs .= "$value<br>";
        }

        $acteurs = "";
        foreach ($this->allAct as $key => $value) {
            $acteurs .= "$value<br>";
        }

        $role = "";
        foreach ($this->allRole as $key => $value) {
            $role .= "$value<br>";
        }


        return "
        <strong>FILMS :</strong><br>
        $films<br>
        <br>
        <strong>GENRES :</strong><br>
        $genres<br>
        <br>
        <strong>REALISATEURS :</strong><br>
        $realisateurs<br>
        <br>
        <strong>ACTEURS :</strong><br>
        $acteurs<br>
        <br>
        <strong>ROLE :</strong><br>
        $role<br>
    ";
    }
    function newGenre($genre)
    {
        array_push($this->allGenre, $genre);
    }
    function newReal($realisateur)
    {
        array_push($this->allReal, $realisateur);
    }
    function newAct($acteur)
    {
        array_push($this->allAct, $acteur);
    }
    function addRole($role)
    {
        array_push($this->allRole, $role);
    }

    function newFilm($titre, $genre, $annee, $duree, $synopsis, $realisateur, $acteurs_roles)
    {

        $acteursDuFilm = [];
        $rolesDuFilm = [];

        $keys = array_keys($acteurs_roles);
        for ($a = 0; $a < count($acteurs_roles); $a++) {
            foreach ($acteurs_roles[$keys[$a]] as $key => $value) {
                if ($key == 0) {
                    array_push($acteursDuFilm, $value);
                } else {
                    array_push($rolesDuFilm, $value);
                }
            }
        }
        $film = new Film($titre, $genre, $annee, $duree, $synopsis, $realisateur, $acteursDuFilm);
        array_push($this->allfilm, $film);

        //Genre du film
        for ($g = 0; $g < count($this->allGenre); $g++) {
            foreach ($this->allGenre[$g]->genre as $key => $value) {
                if ($key === 0) {
                    $this->allGenre[$g]->genre = [$value => null];
                }
            }
            foreach ($this->allGenre[$g]->genre as $key => $value) {
                if ($key === $genre) {
                    $this->allGenre[$g]->genre[$titre] = ["Année" => $annee, "Durée" => $duree, "Synopsis" => $synopsis];
                }
            }
        }

        //Réalisateur du film
        for ($r = 0; $r < count($this->allReal); $r++) {
            if ($this->allReal[$r]->nom === $realisateur) {
                array_push($this->allReal[$r]->film, $titre);
            }
        }

        //Acteurs du film 
        foreach ($acteursDuFilm as $key => $value) {
            for ($f = 0; $f < count($this->allAct); $f++) {
                if ($this->allAct[$f]->nom === $value) {
                    array_push($this->allAct[$f]->film, $titre);
                    array_push($this->allAct[$f]->role, $rolesDuFilm[$key]);
                }
            }
        }
    }
}
