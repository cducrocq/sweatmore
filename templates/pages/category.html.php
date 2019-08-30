<div class="container mt-3 mb-5">

    <div class="row">
        <div class="col-sm">
            <h2 class="mt-3">Liste des articles de <?= ucfirst($categoryName) ?></h2>
            <hr>
        </div>
    </div>

    <div class="row mb-3">
        <?php foreach ($articlesCategory as $article) { ?>
            <div class="col-sm-3 mb-3"><?php require dirname(__DIR__).'/components/card.html.php'; ?></div>
        <?php } ?>
    </div>

</div>
