<?php
// Je vais chercher les données dans le model
require dirname(__DIR__).'/model/category.model.php';

// Je fais mes traitements
$categoryName = $_GET['category'];
$articlesCategory = [];

foreach ($articles as $article) {
    if ($article['category'] == $categoryName) {
        $articlesCategory[] = $article;
    }
}

// var_dump($articlesCategory);

// Je mets dans mon template
require dirname(__DIR__).'/templates/pages/category.html.php';
