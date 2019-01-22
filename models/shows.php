<?php
/* On crée une class shows qui hérite de la classe database via extends
 * La classe shows va nous permettre d'accéder à la table shows et afficher des élements
 */
class shows extends database {
    
    // Création d'attributs qui correspondent à chacun des champs de la table showTypes que nous allons utiliser
    // et on les initialise par rapport à leurs types.
    public $id = 0;
    public $title = '';
    public $performer = '';
    public $date = 01/01/2018;
    public $showTypesId = 0;
    public $firstGenresId = 0;
    public $secondGenresId = 0;
    public $duration = '00:00:00';
    public $startTime = '00:00:00';
    // on crée une methode magique __construct()
    /**
     * On crée un methode qui retourne tous par ordre alphabetique les titres de tous les spectacles ainsi que les artistes, les dates et les heures.
     * @return type ARRAY
     */
    public function getShowsList(){
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table shows
        $query = 'SELECT `title`, `performer` , DATE_FORMAT(`date`,"%d/%m/%Y") AS `date`, TIME_FORMAT(`startTime`,"%Hh%i") AS `startTime` FROM `shows` ORDER BY `title`';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->query($query);
        // On crée un objet $resultList qui est un tableau.
        // La fonction fetchAll permet d'afficher toutes les données de la requète dans un tableau d'objet via le paramètre (PDO::FETCH_OBJ)
        $resultList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $resultList;
    }
}