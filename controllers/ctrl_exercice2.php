<?php
// On instancie l'objet shows qui aura comme classe shows.
$shows = new shows();
// On instancie l'objet $clientsList qui est un tableau via la méthode getClientsList
$showsList = $shows->getShowsList();
?>