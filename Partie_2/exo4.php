<?php

$capitales = array(
    array ('Allemagne','Berlin' ,'lien'),
    array ('France' ,'Paris', 'Lien'),
    array ('Italie' , 'Rome','Lien'),
    array ('USA' , 'Washington','Lien')
);

function afficherTableHTML($capitales)
{
    echo "<table border='1'><tr>  <td> <b> Pays </b></td>  <td> <b>Capitale </b> </td>  <td> <b> Lien Wiki </b></td>  </tr>";
    foreach ($capitales as $key => $value) {
        echo "<tr><td> $key </td><td> $value </td></tr>";
    }
    echo "</table>";
}
afficherTableHTML($capitales);