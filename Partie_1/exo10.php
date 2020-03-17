<?php
function r($param1)
{
    for ($i = 0; $param1 >= 20; $i++) {
        $param1 = $param1 - 20;
    }

    echo 'il y a ' . $i . ' Billet de 10';
    echo '<br>';
    for ($i = 0; $param1 >= 5; $i++) {
        $param1 = $param1 - 5;
    }
    echo 'il y a ' . $i . ' Billet de 5';
    echo '<br>';
    for ($i = 0; $param1 >= 1; $i++) {
        $param1 = $param1 - 2;
    }
    echo 'il y a ' . $i . ' Pièces de 2';
    echo '<br>';
    for ($i = 0; $param1 >= 1; $i++) {
        $param1 = $param1 - 1;
    }
    echo 'il y a ' . $i . ' Pièces de 1';
    echo '<br>';
}
r(93);
