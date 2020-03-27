<?php

$tableauValeurs = [true, 'texte', 10, 25.369, array("valeur1", "valeur2")];

function varDump($tableauValeurs)
{
    foreach ($tableauValeurs as $value) {
        echo var_dump($value) . "<br>";
    }
}
return varDump($tableauValeurs);
