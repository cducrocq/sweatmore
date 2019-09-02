<?php
// Je vais chercher les données dans le model
require dirname(__DIR__).'/../model/article.model.php';

// Je fais mes traitements
$article = $articles[0];

// Je mets dans mon template
require dirname(__DIR__).'/../templates/pages/article.html.php';
