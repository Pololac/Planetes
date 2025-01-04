<?php

// --------------------------------
// Manager des planètes
// --------------------------------

require_once 'Planet.php';
require_once 'connexion_bdd.php';

class PlanetManager {

    //METHODES READ
    public static function getAll() : array {
        global $db;
        $stmt = $db->query('SELECT * FROM planet');
        $planets = $stmt->fetchAll(PDO::FETCH_CLASS, 'Planet');
        return $planets;
    }

    public static function getOne(int $id) : Planet {
        global $db;
        $stmt = $db->prepare('SELECT * FROM planet WHERE id = ?');
        $stmt->execute([$id]);
        $planet = $stmt->fetchObject('Planet');

        if($planet == false){
            throw new Exception("Planète non trouvée");
        } else {
            return $planet;
        } 
    }

    public static function searchByName(string $searchName) : array {
        global $db;
        $stmt = $db->prepare('SELECT * FROM planet WHERE nom LIKE ?');
        $stmt->execute(['%'. $searchName .'%']);
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Planet');
    }


    public static function getTelluric() : array {
        global $db;
        $stmt = $db->query('SELECT * FROM planet WHERE categorie = "Tellurique"');
        $planets = $stmt->fetchAll(PDO::FETCH_CLASS, 'Planet');
        return $planets;
    }

    public static function getGaseous() : array {
        global $db;
        $stmt = $db->query('SELECT * FROM planet WHERE categorie = "Gazeuse"');
        $planets = $stmt->fetchAll(PDO::FETCH_CLASS, 'Planet');
        return $planets;
    }



 
    //METHODE CREATE
    public static function create(Planet $planet) : void {
        global $db;
        $stmt = $db->prepare('INSERT INTO planet (nom, imgUrl, categorie, diametre, gravite, lienNasa) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$planet->getNom(), $planet->getImgUrl(), $planet->getCategorie(), $planet->getDiametre(), $planet->getGravite(), $planet->getLienNasa()]);
    }

    //METHODE UPDATE
    public static function update(planet $planet) : void {
        global $db;
        $stmt = $db->prepare('UPDATE planet SET nom = ?, imgUrl = ?, categorie = ?, diametre = ?, gravite = ?, lienNasa = ? WHERE id = ?');
        $stmt->execute([$planet->getNom(), $planet->getImgUrl(), $planet->getCategorie(), $planet->getDiametre(), $planet->getGravite(), $planet->getLienNasa(), $planet->getId()]);
    }

    //METHODE DELETE
    public static function delete(Planet $planet) : void {
        global $db;
        $stmt = $db->prepare('DELETE FROM planet WHERE id = ?');
        $stmt->execute([$planet->getId()]);
    }

}
