<?php

$capitales = array(
    'Allemagne' => 'Berlin',
    'France' => 'Paris',
    'Italie' => 'Rome',
    'USA' => 'Washington'
);

function afficherTableHTML($capitales)
{
    echo "<table border='1'><tr>  <td> <b> Pays </b></td>  <td> <b>Capitale </b> </td>  </tr>";
    foreach ($capitales as $key => $value) {
        echo "<tr><td> $key </td><td> $value </td></tr>";
    }
    echo "</table>";
}
afficherTableHTML($capitales);
