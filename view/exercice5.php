<?php
include '../models/database.php';
include '../models/clients.php';
include '../controllers/ctrl_exercice5.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice 5 Partie 1</title>
    </head>
    <body>
        <div class="container">
            <h1>Exercice 5 Partie 1</h1>
            <p class="flow-text">Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :

                Nom : Nom du client

                Prénom : Prénom du client

                Trier les noms par ordre alphabétique.</p>
        </div>
        <div class="container">
            <table class="responsive-table highlight">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>NOM</th>
                        <th>Prénom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientsListM AS $client) { ?>
                        <tr>
                            <td><?= $client->id ?></td>
                            <td><?= $client->lastName ?></td>
                            <td><?= $client->firstName ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>