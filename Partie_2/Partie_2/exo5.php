<?php

$nomsInput = ['Nom', 'Prénom', 'Ville'];

function afficherInput($array)
{
    foreach ($array as $input) {
        echo "<label for='name'>$input :</label><br>
              <input type='text' id='$input' name='$input' required><br><br>";
    }
}

afficherInput($nomsInput);
