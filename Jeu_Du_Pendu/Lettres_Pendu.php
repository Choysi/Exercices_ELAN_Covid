<?php
session_start();


if (isset($_POST["mot"])) {
    if (strlen($_POST["mot"]) > 27) {
        header('Location: index.php');
    }
    $_SESSION["nrberreur"] = 0;
    $_SESSION["First"] = $_POST['mot'];
    $_SESSION['motDecomp'] = str_split($_POST['mot']);
    $_SESSION['motatrouver'] = [];


    foreach ($_SESSION['motDecomp'] as $key => $value) {
        array_push($_SESSION['motatrouver'], "_");
    }
}
if (empty($_SESSION["First"])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Pendu.css">
    <script src="https://kit.fontawesome.com/cccaa99bf9.js" crossorigin="anonymous"></script>
    <title>Lettres Pendu</title>
</head>

<body class="Lettre">
    <div class="d-flex justify-content-center">
        <h1>
            <?php
            foreach ($_SESSION['motatrouver'] as $key => $value) {
                echo $value . " ";
            }
            ?>
        </h1>
    </div>
    <?php
    $maxAttempts = 6;
    $letters = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o',
        'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    );
    if ($_SESSION["motDecomp"] == $_SESSION["motatrouver"]) {
        header('Location: winLoose.php');
    }
    ?>
    <div class="d-flex justify-content-center">
        <form action="ControlerGame.php" method="post">
            <input class="form-control mr-sm-2" type="text" placeholder="Lettre" name="Lettre" id="" maxlength="1">
            <center><button class="btn btn-outline-success my-2 my-sm-2 " type="submit">Lettre à trouver !</button></center>
        </form>
    </div>

    <center>
   
        <p class="erreurs">
            <?php
            echo $_SESSION['nrberreur'] . " erreurs";
            
            ?>
        </p>
    </center>

    <?php
$pendu[0] =
' -------
|/    | 
|
|
|
|
| 
/|\
-------------';
$pendu[1] =
' -------
|/    | 
|     o
|
|
|
| 
/|\
-------------';
$pendu[2] =
' -------
|/    | 
|     o
|     |
|     |
|
| 
/|\
-------------';
$pendu[3] =
' -------
|/    | 
|     o
|     |
|     |
|    /
| 
/|\
-------------';
$pendu[4] =
' -------
|/    | 
|     o
|     |
|     |
|    / \
| 
/|\
-------------';
$pendu[5] =
' -------
|/    | 
|     o
|   --|
|     |
|    / \
| 
/|\
-------------';
$pendu[6] =
' -------
|/    | 
|     o
|   --|--
|     |
|    / \
| 
/|\
-------------';
    ?>
</body>

</html>