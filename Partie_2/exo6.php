<?php
$elements = ['Monsieur', 'Madame', 'Mademoiselle'];

function alimenterListeDeroulante($array)
{
    echo "<form><label for='select'>Affichage :</label><br><br>
          <select id='select'></form>";
    foreach ($array as $statut) {
        $selection = strtolower($statut);
        echo "<option value='$selection'>$statut</option>";
    }
    return "</select>";
}

alimenterListeDeroulante($elements);
