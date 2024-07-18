<?php

require_once('../controller/ArticleController.php');
require_once('../controller/indexController.php');


// Récupérer l'URL demandée
$requestUri = $_SERVER['REQUEST_URI'];

// Nettoyer l'URL (enlever les paramètres GET)
$uri = parse_url($requestUri, PHP_URL_PATH);

// Enlever le préfixe /piscine-blog/public/
$endUri = str_replace('php/blog-piscine/public/', '', $uri);
$endUriTrimmed = trim($endUri, '/');


if($endUriTrimmed === "") {

    $indexController = new IndexController();
    $indexController->index();

} else if ($endUriTrimmed === "add-article") {

    $addArticleController = new ArticleController();
    $addArticleController->addArticle();

} else if ($endUriTrimmed === "show-article") {

    $addArticleController = new ArticleController();
    $addArticleController->showArticle();
    
} else {
    echo '<p>Veuillez saisir une URL valide.</p>';

}