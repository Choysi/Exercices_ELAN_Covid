<?php
$elements = ['Monsieur', 'Madame', 'Mademoiselle'];

function alimenterListeDeroulante($array)
{
    echo "<label for='select'>Affichage :</label><br><br>
          <select id='select'>";
    foreach ($array as $statut) {
        $selection = strtolower($statut);
        echo "<option value='$selection'>$statut</option>";
    }
    echo "</select>";
}

alimenterListeDeroulante($elements);
