<?php
// On instancie l'objet clientsWithCard qui aura comme classe clients.
$clients = new clients();
// On instancie l'objet $list_clients_with_card qui est un tableau via la méthode get_clients_with_card_list
$clientsListM= $clients->getClientsWithMList();
?>