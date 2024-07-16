<?php

require_once('../config/config.php');

$DbConnection = new DbConn();
$pdo = $DbConnection->connect();

// récupérer les données de requete si besoin 
$stmt = $pdo->query("SELECT * FROM article");
// retourne dans un tableau tous les artciles 
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once('../templates/page/indexView.php');

