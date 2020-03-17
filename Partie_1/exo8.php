<?php
echo " Table de 8 :";
echo '<br>';

function table_multipli($chiffre, $a)
{
    if (is_int($a) && is_int($chiffre)) {
        for ($i = 1; $i <= $a; $i++) {
            echo $chiffre . 'x' . $i . '=' . $i * $chiffre;
            echo '<br>';
        }
    } else {
        echo "...";
    }
}

table_multipli(8, 3);
