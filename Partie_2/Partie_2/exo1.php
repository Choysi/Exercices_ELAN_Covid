<?php

function convertirMajRouge($texte)
{
    $texte = " Mon texte en parametre";
    $texte = mb_strtoupper($texte, 'UTF-8');
    echo  '<font color="#FF0000">' . $texte . '</font>';
}
convertirMajRouge(1);
