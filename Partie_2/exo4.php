<?php

$LesPays = [
    'France' => 'Paris',
    'Allemange' => 'Berlin',
    'USA' => 'Washington',
    'Italie' => 'Rome'
];

function afficherTableHTML($array)
{
    echo "<table>
            <tr><th>Pays</th><th>Capitales</th><th>Lien Wiki</th></tr>";
    foreach ($array as $pays => $capitale) {
        echo "<tr><td style='padding: 10px;'>" . strtoupper($pays) . "</td><td>" . $capitale . "</td><td><a href='https://fr.wikipedia.org/wiki/" . $capitale . "' target='_blank'>Lien</a></td></tr>";
    }
    return "</table>";
}
afficherTableHTML($LesPays);


?>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: left;
    }
</style>
<?php
