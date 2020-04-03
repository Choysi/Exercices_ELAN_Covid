<?php

session_start();
session_destroy();

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

    <head>
        <title>Le jeu du Pendu</title>
    </head>
</head>
<div class="d-flex justify-content-center">
    <h1>
        LE JEU DU PENDU
    </h1>
</div>

<body class = "Lettre">
    <nav class="navbar navbar-light bg-light justify-content-center">
        <form action="Lettres_Pendu.php" method="post">
            <input class="form-control mr-sm-2" type="text" placeholder="Place un mot" name="mot" id="">
            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-success my-2 my-sm-2 " type="submit">Jouer !</button>
            </div>
        </form>
    </nav>
</body>

</html>




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