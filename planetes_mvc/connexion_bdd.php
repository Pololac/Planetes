<?php

// try {
//     $db = new PDO('mysql:host=localhost;charset=utf8;dbname=cours_pdo', 'root', 'test');
// } catch (PDOException $e) {
//    echo 'Erreur de connexion à la bdd :' .$e->getMessage(). '<br>';
// }


try {

    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=exam_pdo', 'php', 'PHPcestSuper!');

} catch (PDOException) {

    die('Erreur de connexion à la bdd');    // "die" tue la page pour éviter d'exécuter les autres méthodes si la connexion à la BDD n'a pas marché & pas "$e->getMessage()" pour ne pas révéler le mot de passe renseigné

}

// var_dump($db);
