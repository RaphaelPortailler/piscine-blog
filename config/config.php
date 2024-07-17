<?php

// Parametre pour la connexion : (l'adresse de l'IP, nom de la BDD, user et mdp) : 

class DbConn{

    private $dsn;

    private $username;

    private $password;

    function __construct(){
        $this->dsn= "mysql:host=localhost:8889;dbname=piscine_blog_php";
        $this->username = "root";
        $this->password = "root";
    }

    public function connect(){
// Je me connect a la base et gestion des erreurs.
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "tout va bien navette";
            return $pdo;
        } catch (PDOException $e) { 
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
}


