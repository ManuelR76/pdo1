<?php

/* On crée une class clients qui hérite de la classe database via extends
 * La classe clients va nous permettre d'accéder à la table clients et afficher des élements
 */

class clients extends database {

    // Création d'attributs qui correspondent à chacun des champs de la table clients
    // et on les initialise par rapport à leurs types.
    public $id = 0;
    public $lastName = '';
    public $firstName = '';
    public $birthDate = '01/01/2000';
    public $card = false;
    public $cardNumber = 0;

  
    public function getClientsList() {
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table clients
        $query = 'SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS `birthDate`, CASE WHEN `card`= true THEN \'oui\' ELSE \'non\' END AS `card`, `cardNumber` FROM `clients`';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->query($query);
        // On crée un objet $resultList qui est un tableau.
        // La fonction fetchAll permet d'afficher toutes les données de la requète dans un tableau d'objet via le paramètre (PDO::FETCH_OBJ)
        $resultList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $resultList;
    }

    public function getClientsList20() {
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table clients
        $query = 'SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS `birthDate`, `card`, `cardNumber` FROM `clients` LIMIT 0,20';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->query($query);
        // On crée un objet $resultList qui est un tableau.
        // La fonction fetchAll permet d'afficher toutes les données de la requète dans un tableau d'objet via le paramètre (PDO::FETCH_OBJ)
        $resultList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $resultList;
    }

    public function getClientsWithCardList() {
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table clients
        $query = 'SELECT `clients`.`lastName`, `clients`.`cardNumber`, `cardTypes`.`type` FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` INNER JOIN `cardTypes` ON `cards`.`cardTypesId` = `cardTypes`.`id` WHERE `cardTypes`.`id` LIKE \'1\'';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->query($query);
        // On crée un objet $resultList qui est un tableau.       
        $resultList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $resultList;
    }
    
    public function getClientsWithMList() {
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table clients
        $query = 'SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") AS `birthDate`, `card`, `cardNumber` FROM `clients` WHERE `lastname` LIKE \'M%\' ORDER BY `lastname`';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->query($query);
        // On crée un objet $resultList qui est un tableau.
        // La fonction fetchAll permet d'afficher toutes les données de la requète dans un tableau d'objet via le paramètre (PDO::FETCH_OBJ)
        $resultList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $resultList;
    }

}
