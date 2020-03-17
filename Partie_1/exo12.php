<?php
$prenoms = [
    "Mickaël", "FRA",
    "Virgile", "ESP",
    "Marie-Claire", "ENG",
];
$replacements = array(1 => "Salut");
$replacements2 = array(3 => "Hola");
$replacements3 = array(5 => "Hello");

$langue = array_replace($prenoms, $replacements, $replacements2, $replacements3);
print_r($langue);
