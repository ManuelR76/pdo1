<?php
include '../models/database.php';
include '../models/shows.php';
include '../controllers/ctrl_exercice6.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice 6 Partie 1</title>
    </head>
    <body>
        <div class="container">
            <h1>Exercice 6 Partie 1</h1>
            <p class="flow-text">Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p>
        </div>
        <div class="container">         
            <?php foreach ($showsList AS $show) { ?>
            <p><?= $show->title?> par <?= $show->performer?>, le <?= $show->date?> à <?=$show->startTime?>.</p>
                <?php } ?>
        </div>
    </body>
</html>