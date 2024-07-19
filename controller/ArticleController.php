<?php

require_once ('../config/config.php');
require_once ('../model/ArticleRepository.php');

class ArticleController{

    
    public function addArticle() {

        $isRequestOk = false;
        // On récupère les paramètres entrés dans le formulaire pour créer le nouvel article
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $titre = $_POST['titre'];
            $content = $_POST['content'];
            $dateNow = new DateTime("NOW");
            $created_at = $dateNow -> format('Y-m-d');

            $articleRepository = new ArticleRepository();
            // on stocke dans la variable $isRequestOk le résultat issu de la méthode insert()
            $isRequestOk = $articleRepository -> insert($titre, $content);
        }

        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('page/addArticleView.html.twig', ['isRequestOk' => $isRequestOk]);

        // require_once('../templates/page/addArticleView.php');
    }

    public function showArticle() {

        $id = $_GET['id'];
        // nouvelle instance "d'ArticleRepository"
        $articleRepository = new ArticleRepository();
        // on viens recuperer l'article avec l'id numéro 2 
        $article = $articleRepository->findOneById($id);

        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $twig = new \Twig\Environment($loader);

        echo $twig->render('page/showArticleView.html.twig', ['article' => $article]);

        // require_once('../templates/page/showArticleView.php');
    }

}

