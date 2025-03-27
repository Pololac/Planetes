<?php

try {

    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=hb_r6_php_pdo_exam', 'php', 'PHPcestSuper!');

} catch (PDOException) {

    die('Erreur de connexion à la bdd');    // "die" tue la page pour éviter d'exécuter les autres méthodes si la connexion à la BDD n'a pas marché & pas "$e->getMessage()" pour ne pas révéler le mot de passe renseigné

}
