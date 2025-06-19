<?php

$config = parse_ini_file(__DIR__ . '/config.ini');

try {
    $db = new PDO(
        'mysql:host=' . $config['DB_HOST'] . ';port=' . $config['DB_PORT'] . ';charset=utf8;dbname=' . $config['DB_NAME'],
        $config['DB_USER'],
        $config['DB_PASSWORD']
    );
} catch (PDOException) {
    die('Erreur de connexion à la BDD');
}
