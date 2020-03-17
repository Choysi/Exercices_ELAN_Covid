<?php
$marques = ["Peugeot", "Renault", "BMW", "Mercedes "];

echo "Il y a " . count($marques)  . "marques de voitures dans le tableau :";
foreach ($marques as $key => $value) {
    echo "<li>    $value </li>";
}
