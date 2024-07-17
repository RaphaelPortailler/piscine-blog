<?php


require_once("../config/config.php");


class ArticleRepository{

    public function findAll(){
        $dbConnection = new DbConn();
        $pdo = $dbConnection->connect();

        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $articles;
    }

    // la méthode insert permet de sauver des données dans la table article
    // elle insère le titre, le contenu et la date qu'on lui envoie en parametre
    public function insert($title, $content){
        
        // model
        $dbConnection = new DbConn();
        $pdo = $dbConnection->connect();

        // model
        $sql = "INSERT INTO article (title, content) VALUES (:title, :content)";
        $stmt = $pdo->prepare($sql);


        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        // $stmt->bindParam(':date', $date);

        // view
        if ($stmt->execute()) {
            echo "Nouvel article ajouté avec succès";
        } else {
            echo "Erreur lors de l'ajout de l'article";
        }
    }


}