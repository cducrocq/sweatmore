<div class="container">
<!--
    http://www.grossiste-vetement-femme.com/categorie-produit/vetement-femme/vetement-sport/
    https://grossiste-en-ligne.fr
-->
    <div class="row">
        <div class="col-sm">
            <h2 class="mt-3">Liste des articles de $categoryName</h2>
            <hr>
        </div>
    </div>

    <div class="row mb-3">
        <?php foreach ($items as $item) { ?>
            <div class="col-sm-3 mb-3"><?php include('card.php'); ?></div>
        <?php } ?>
    </div>

</div>
