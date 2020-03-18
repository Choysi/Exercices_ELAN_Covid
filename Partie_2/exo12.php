<?php

$tableauValeurs = array(true, 'texte', 10, 25.369, array("valeur1", "valeur2"));

function varDump($tableauValeurs)
{
    foreach ($tableauValeurs as $value) {
        echo var_dump($value) . "<br>";
    }
}
varDump($tableauValeurs);
