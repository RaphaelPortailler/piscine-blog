<?php

// Parametre pour la connexion : (l'adresse de l'IP, nom de la BDD, user et mdp) : 
$dsn = "mysql:host=127.0.0.1:8889;dbname=piscine_blog_php";
$username = "root";
$password = "root";

// Je me connect a la base et gestion des erreurs.
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "tout va bien navette";
} catch (PDOException $e) { 
    die("Erreur de connexion : " . $e->getMessage());
}