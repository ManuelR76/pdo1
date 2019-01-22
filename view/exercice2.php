<?php
    include '../models/database.php';
    include '../models/showTypes.php';
    include '../controllers/ctrl_exercice2.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice 2 Partie 1</title>
    </head>
    <body>
        <div class="container">
        <h1>Exercice 2 Partie 1</h1>
        <p class="flow-text">Afficher tous les types de spectacles possibles</p>
        </div>
        <div class="container">
        <table class="responsive-table highlight">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Type de spectacle</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($showsList AS $show) {?>
                    <tr>
                        <td><?= $show->id ?></td>
                        <td><?= $show->type ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </body>
</html>