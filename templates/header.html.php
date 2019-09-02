<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site de sport">
        <meta name="keywords" content="sport, vetement">
        <meta name="author" content="A Team">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><?= $title ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- CSS Custom -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/article.css">

    </head>

    <body>
        <header>
            <!-- TODO : Revoir les emplacements des éléments -->
            <?php require dirname(__DIR__).'/templates/nav.html.php'; ?>
            <a href="/"><img src="images/banniere.png" class="img-fluid" alt="Banniere de SweatMore"/></a>
            <div class="container-fluid">
                <div class="row justify-content-end mr-3 margin-top-custom">
                    <?php require dirname(__DIR__).'/templates/social-networks.html.php'; ?>
                </div>
            </div>
        </header>

        <!-- Inspiration : https://getbootstrap.com/docs/4.0/components/carousel -->


