<?php
$checkboxArray = [
    'Choix 1' => false,
    'Choix 2' => true,
    'Choix 3' => false
];

function genererCheckbox($array)
{
    echo "<p>Affichage :</p>";
    foreach ($array as $choix => $value) {
        switch ($value) {
            case true:
                $value = ' checked';
                break;
            case false:
                $value = '';
                break;
        }
        $choiceValue = strtolower($choix);
        echo "<div>
            <input type='checkbox' id='$choiceValue' name='$choiceValue' $value>
            <label for='$choiceValue'>$choix</label>
         </div>";
    }
}

genererCheckbox($checkboxArray);
