<?php

require_once ('../config/config.php');
require_once ('../model/ArticleRepository.php');

class AddArticleController
{
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

        require_once('../templates/page/addArticleView.php');
    }

    public function showArticle() {
        // nouvelle instance "d'ArticleRepository"
        $articleRepository = new ArticleRepository();
        // on viens recuperer l'article avec l'id numéro 2 
        $article = $articleRepository->findOneById(2);

        require_once('../templates/page/showArticleView.php');
    }

}


$articleController = new AddArticleController();
$articleController -> addArticle();