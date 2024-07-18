<?php

require_once('../config/config.php');
require_once('../model/ArticleRepository.php');


class IndexController {

    public function index() {
        // on instancie la classe ArticleRepository
        $articleRepository = new ArticleRepository();
        // on appelle la méthode findArticles() qui fait la requête SQL et retourne les articles
        $articles = $articleRepository -> findArticles();
       
        // on appelle la view qui affiche le HTML
        require_once('../templates/page/indexView.php');
    }
}

