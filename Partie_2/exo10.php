<?php
$civilité = array('Nom', 'Prénom', 'Mail', 'Ville');
$sexe = array('Homme', 'Femme', 'Autre');
$formations = array('Développeur Logiciel', 'Designer Web', 'Intégrateur', 'Chef de projet');

function afficherFormulaire($sexeArray, $formationsArray, $civilité)
{
    // Mise en place du formulaire
    echo "<form method='post' action='post.php'>";

    // Civilités
    foreach ($civilité as $input) {
        $inputValue = strtolower($input);
        echo "<label for='$inputValue'>$input :</label><br>
              <input type='text' id='$inputValue' name='$inputValue' required><br><br>";
    }

    // Sexes
    echo "<label for='sexe'>Sexe :</label><br>
          <select name='sexe' id='select'>";
    foreach ($sexeArray as $value) {
        $sexeValue = strtolower($value);
        echo "<option value='$sexeValue'>$value</option>";
    }
    echo "</select><br><br>";

    // Formations
    echo "<label for='course'>Choix de la Formation :</label><br>";
    foreach ($formationsArray as $formations) {
        $formationsValue = strtolower($formations);
        echo "<div>
                <input type='radio' id='$formationsValue' name='$formationsValue'>
                <label for='$formationsValue'>$formations</label>
             </div>";
    }

    // Bouton d'envoi
    echo "<br><input type='submit' value='Envoyer le formulaire'>";

    echo "</form>";
}

afficherFormulaire($sexe, $formations, $civilité);
