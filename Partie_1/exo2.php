<?php
$phrase = " Notre formation DL commence aujourd'hui ";
$mot = str_word_count($phrase);
echo "La phrase « $phrase » contient " . str_word_count(utf8_decode($phrase)) . " mots";
