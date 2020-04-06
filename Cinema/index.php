<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema</title>
</head>

<body>
    <?php
    function type($class)
    {
        include($class . "_class.php");
    }
    spl_autoload_register("type");

    $new = new Data();

    $new->newGenre(new Genre("Aventure"));
    $new->newGenre(new Genre("SF"));
    $new->newGenre(new Genre("Comedie"));
    $new->newGenre(new Genre("Bio"));

    $new->newReal(new Realisateur("Jacques", "Addy", "26-07-1958"));
    $new->newReal(new Realisateur("Will", "Kinson", "10-01-1975"));

    $new->newAct(new Acteur("Alfred", "coslo", "23-05-1979"));
    $new->newAct(new Acteur("Patrick", "dix", "31-01-2000"));
    $new->newAct(new Acteur("Nathalie", "Bed", "12-12-1902"));
    $new->newAct(new Acteur("Dimitri", "Nazdirnov", "26-04-1986"));

    $new->addRole("Principal");
    $new->addRole("Gamin");
    $new->addRole("Vieille");
    $new->addRole("Secondaire");


    $new->newFilm(
        "Baridango",
        "Aventure",
        "08-03-2006",
        "02:45",
        "Un tresor, une destinée, une malédiction...",
        "Jacques Addy",
        [
            ["Alfred", "Principal"],
            ["Dimitri", "Secondaire"],
            ["Patrick", "Gamin"]
        ]
    );

    $new->newFilm(
        "Malabar",
        "SF",
        "04-06-2012",
        "03:50",
        "Dans l'espace, personne ne vous entendra mâcher...",
        "Will Kinson",
        [
            ["Gerard", "Principal"],
            ["Nathalie", "Vieille"],
            ["инопланетянин", "Alien"]
        ]
    );

    $new->newFilm(
        "Rire",
        "Commedie",
        "31-12-1999",
        "01:25",
        "Le rire se communique par les yeux...",
        "Jacques",
        [
            ["Patrick", "Principal venu du futur"],
            ["Dimitri", "Secondaire"]
        ]
    );

    echo $new . "<br>";

    ?>
</body>

</html>