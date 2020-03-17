<?php

function impot($age, $sexe)
{

    echo "Age : $age <br> Sex : $sexe <br>";
    if (($sexe == "F" && $age >= 18 && $age <= 35) || ($sexe == "H" && $age >= 20)) {
        echo "La personne est imposable. <br>";
    } else {
        echo "La personne est non imposable. <br>";
    }
    return;
}

impot(32, "F");
