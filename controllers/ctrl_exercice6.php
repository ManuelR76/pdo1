<?php
// On instancie l'objet shows qui aura comme classe shows.
$shows = new shows();
// On instancie l'objet $list_clients_with_M qui est un tableau via la méthode get_shows_list
$showsList = $shows->getShowsList();
?>