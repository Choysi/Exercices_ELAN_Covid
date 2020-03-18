<?php

$imageOUAF = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($url, $nombre)
{
    for ($i = 0; $i < $nombre; $i++) {
        echo "<img src='$url'>";
    }
}

repeterImage($imageOUAF, 4);
