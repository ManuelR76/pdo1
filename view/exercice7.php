<?php
include '../models/database.php';
include '../models/clients.php';
include '../controllers/ctrl_exercice7.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice 7 Partie 1</title>
    </head>
    <body>
        <div class="container">
            <h1>Exercice 7 Partie 1</h1>
            <p class="flow-text">Afficher tous les clients comme ceci :

                Nom : Nom de famille du client

                Prénom : Prénom du client

                Date de naissance : Date de naissance du client

                Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)

                Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</p>
        </div>
        <div class="container">         
            <?php foreach ($clientsList AS $client) { ?>
                <ul>
                    <li>Nom : <?= $client->lastName ?></li>
                    <li>Prénom : <?= $client->firstName ?></li>
                    <li>Date de naissance : <?= $client->birthDate ?></li>
                    <li>Carte de fidélité : <?= $client->card ?></li>
                    <li>Numéro de carte : <?= $client->cardNumber ?></li>
                </ul>                
            <?php } ?>
        </div>
    </body>
</html>