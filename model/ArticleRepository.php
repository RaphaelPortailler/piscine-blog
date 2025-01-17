<?php

require_once('../config/config.php');


class ArticleRepository {

    private $pdo;

    function __construct() {
        // On établit la connexion avec la base de données. On instancie la classe DbConnection
        $dbConnection = new DbConnection();
        // on appelle la méthode qui établit le lien avec la bdd
        $this->pdo = $dbConnection -> connect();
    }


    // Création de la méthode "findArticles" qui fait la requête SQL et qui retourne les articles
    public function findArticles() {

        // query() fait une requête vers la bdd -> là on sélectionne toutes les colonnes de la table article de la bdd
        $stmt = $this->pdo->query("SELECT * FROM article");
        // nous retourne un tableau avec toutes les données précédemment sélectionnées
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $articles;
    }

    public function insert($titre, $content) {

        // On prépare la requête d'insertion des données avec des données temporaires
        $sql = "INSERT INTO article (title, content) VALUES (:title, :content)";
        $stmt = $this->pdo->prepare($sql);

        // On remplace les paramètres précédemment entrés (données temporaires -> :title...) par les "vrais" paramètres.
        // On réalise cette action en plusieurs étapes pour sécuriser les données entrées par l'utilisateur et éviter l'injection SQL.
        $stmt->bindParam(':title', $titre);
        $stmt->bindParam(':content', $content);
        // $stmt->bindParam(':created_at', $created_at);

        // On exécute la requête et on enregistre le résultat dans une variable (booléen)
        $isRequestOk = $stmt->execute();

        return $isRequestOk;
    }

    public function findOneById($id)
    {
        // Connect to the database
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        // Prepare the SQL query
        $sql = "SELECT * FROM article WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        // Bind the id parameter
        $stmt->bindParam(':id', $id);

        // Execute the query
        $stmt->execute();

        // Fetch the result as an associative array
        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        // Return the article
        return $article;
    }
}