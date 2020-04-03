<?php
session_start();
if (empty($_SESSION["First"])) {
    header('Location: Mot.php');
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
    <title>PERDU/GAGNE</title>
</head>

<body class = "winLoose">
    <p>
        <?php
        //if ($_SESSION["nbrerreur"] = "perdu") {

        //header('Location: Mot.php');
        //} else {
        // $_SESSION["nbrerreur"]  = $pendu[0] = header('Location: Lettres_Pendu.php');
        //}

        ?>
    </p>
    <div class="d-flex justify-content-center">
        <?php if ($_SESSION["nrberreur"] == "Perdu") { ?>
            <h1 id="Perdu">Tu as perdu ! </h1>
        <?php } ?>
        <?php if ($_SESSION["nrberreur"] == "Gagné") { ?>

            <h1 id="Perdu">Tu as gagné ! </h1>
        <?php } ?>
    </div>
    <div class="d-flex justify-content-center">
        <img src="http://img.over-blog-kiwi.com/0/56/62/66/20160409/ob_db9018_pendu.jpg" alt="PENDU">
    </div>

    <div class="d-flex justify-content-center">
    <form action="Mot.php" method="post">
    <button class="btn btn-outline-success my-2 my-sm-2 " type="submit">Nouvelle partie</button>
        </form>
    </div>
</body>

</html>