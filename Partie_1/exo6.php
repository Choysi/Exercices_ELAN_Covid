<?php

function facture($prix,$quantite,$taxe){
    $tva = 0.2;
    $prix = 9.99;
    $taxe = $prix*$tva;
    echo  "Prix unitaire de l’article : " . $prix  ."€ <br> Quantité : " . $quantite . "<br> Taux de TVA : " . $tva . "<br> Le montant de la facture à régler est de : " . $taxe . "€ <br>"; 
    return;
}

facture(9.99,5,0.2);
