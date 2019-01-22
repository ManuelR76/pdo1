<?php
/* On crée une class clients qui hérite de la classe database via extends
 * La classe clients va nous permettre d'accéder à la table clients et afficher des élements
 */
class shows extends database {
    // Création d'attributs qui correspondent à chacun des champs de la table clients
    // et on les initialise par rapport à leurs types.
    public $id = 0;
    public $type;
    /**
     * On crée un methode qui retourne la liste de tous les clients de la table clients
     * @return type ARRAY
     */
    public function getShowsList() {
        // On met notre requète dans la variable $query qui selectionne tous les champs de la table clients
        $query = 'SELECT `id`, `type` FROM `showTypes`';
        // On crée un objet $result qui exécute la méthode query() avec comme paramètre $query
        $result = $this->DataBase->query($query);
        // On crée un objet $resultList qui est un tableau.
        // La fonction fetchAll permet d'afficher toutes les données de la requète dans un tableau d'objet via le paramètre (PDO::FETCH_OBJ)
        $resultList = $result->fetchAll(PDO::FETCH_OBJ);
        // On retourne le resultat
        return $resultList;
        
    }  
} 
?>