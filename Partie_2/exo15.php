<?php
// deux mails à verifier
$email_a = "elan@elan-formation.fr";
$email_b = "contact@elan";

//verification de "elan@elan-formation.fr"
if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est considérée comme valide.<br>";
}
// verification de "contact@elan"
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est considérée comme valide.";
} else {
    echo "L'adresse email '$email_b' est considérée comme invalide.";
}
?> 