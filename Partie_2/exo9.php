<?php
$nomsRadio = array('Masculin', 'Féminin', 'Autre');

function afficherRadio($array)
{
    echo "<p>Affichage :</p>";
    foreach ($array as $statut) {
        $statutValue = strtolower($statut);
        echo "<div>
                <input type='radio' id='$statutValue' name='button'>
                <label for='$statutValue'>$statut</label>
             </div>";
    }
}

afficherRadio($nomsRadio);
