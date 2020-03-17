<?php
// $str = "engage le jeu que je le gagne";
// function Palindrome($str)
// {
//     // suppression des espaces     
//     $str = str_replace(' ', '', $str);
//     if ((strlen($str) == 1) || (strlen($str) == 0)) {
//         echo " est un Palindrome";
//     } else {
//         if (substr($str, 0, 1) == substr($str, (strlen($str) - 1), 1)) {
//             return Palindrome(substr($str, 1, strlen($str) - 2));
//         } else {
//             echo "  n'est pas un palindrome !";
//         }
//     }
// }
// echo "La phrase $str ";
// Palindrome($str);


$str = "Engage le jeu que je le gagne";
if (strtolower(str_replace(' ', '', $str)) == strtolower(str_replace(' ', '', strrev($str)))) {
    echo "La phrase $str est un Palindrome";
} else {
    echo "La phrase $str n'est pas un palindrome !";
}

