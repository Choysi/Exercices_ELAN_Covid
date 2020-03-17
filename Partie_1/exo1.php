<?php
$phrase = " Notre formation DL commence aujourd’hui ";
$longueur = strlen($phrase);
echo "La phrase « $phrase » contient " . strlen(utf8_decode($phrase)) . " caractères";
