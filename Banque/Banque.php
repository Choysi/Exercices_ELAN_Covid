<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Banque</title>
</head>

<body>
    <?php


    include 'Compte.php';
    include 'Client.php';


    //affichage Compte
    $client1 = new Client("client1", "Junco", "Valentin", "26.04.1994", "Truchtersheim");
    $client1->newCompte(new Compte("compte courant Jeune Actif", 0, "€"));
    $client1->newCompte(new Compte("Livret Bleu", 2856, "€"));


    $client1->credit("compte courant Jeune Actif", 250);
    $client1->debit("compte courant Jeune Actif", 23);
    $client1->virement("Livret Bleu", "compte courant Jeune Actif", 689);


    echo $client1 . "<br>";




    ?>
</body>

</html>