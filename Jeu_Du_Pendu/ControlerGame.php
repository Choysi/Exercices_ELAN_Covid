<?php
session_start();


$juste = in_array($_POST["Lettre"], $_SESSION["motDecomp"]);


if ($juste == false) {
    // to do nombre erreur
    $_SESSION["nrberreur"] = $_SESSION['nrberreur'] + 1;  // ++

    if ($_SESSION["nrberreur"] == 6) {
        $_SESSION["nrberreur"] = "Perdu";
        header('Location: winLoose.php');
        die();
    }
    header('Location: Lettres_Pendu.php');
} else {
    $keys = array_keys($_SESSION["motDecomp"],  $_POST["Lettre"]);
    foreach ($keys as $key => $value) {
        $_SESSION["motatrouver"][$value] = $_POST["Lettre"];
        if (empty(array_diff($_SESSION["motDecomp"], $_SESSION["motatrouver"]))) {
            $_SESSION["nrberreur"] = "Gagné";
            header('winLoose.php');
        }


        header('Location: Lettres_Pendu.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ControlerGame</title>
</head>

<body>

</body>

</html>