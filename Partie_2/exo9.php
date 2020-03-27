<?php
$nomsRadio = ['Masculin', 'Féminin', 'Autre'];

function afficherRadio($array)
{
    echo "<p>Affichage :</p>";
    foreach ($array as $statut) {
        $statutValue = strtolower($statut);
        echo "<form>
                <input type='radio' id='$statutValue' name='button'>
                <label for='$statutValue'>$statut</label>
             </form>";
    }
}

return afficherRadio($nomsRadio);
