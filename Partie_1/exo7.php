<?php

function categorie($age)
{
    if ($age >= 6 && $age <= 7) {
        echo "L’enfant qui a " . $age . " ans appartient à la catégorie « Poussin »";
    } else if ($age >= 8 && $age <= 9) {
        echo "L’enfant qui a " . $age . " ans appartient à la catégorie « Pupille »";
    } else if ($age >= 10 && $age <= 11) {
        echo "L’enfant qui a " . $age . " ans appartient à la catégorie « Minime »";
    } else if ($age >= 12) {
        echo "L’enfant qui a " . $age . " ans appartient à la catégorie « Cadet »";
    } else {
        echo "l'enfent est trop jeune pour rentrer dans une catégorie.";
    }
    echo "<br>";
    return;
}

categorie(10);
