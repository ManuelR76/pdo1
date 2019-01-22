<?php
    include '../models/database.php';
    include '../models/clients.php';
    include '../controllers/ctrl_exercice3.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice 3 Partie 1</title>
    </head>
    <body>
        <div class="container">
        <h1>Exercice 3 Partie 1</h1>
        <p class="flow-text">Afficher les 20 premiers clients.</p>
        </div>
        <div class="container">
        <table class="responsive-table highlight">
            <thead>
                <tr>
                    <th>id</th>
                    <th>NOM</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Carte de fidélité</th>
                    <th>Numéro de carte</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientsList20 AS $client) {?>
                    <tr>
                        <td><?= $client->id ?></td>
                        <td><?= $client->lastName ?></td>
                        <td><?= $client->firstName ?></td>
                        <td><?= $client->birthDate ?></td>
                        <td><?= $client->card ?></td>
                        <td><?= $client->cardNumber ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </body>
</html>