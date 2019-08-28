<nav class="navbar top navbar-expand-lg navbar-light">
    <!-- <a class="navbar-brand" href="/"><i class="fa fa-home" aria-hidden="true"></i></a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php
            foreach ( $categories as $category => $categoryValue ) {
                $active = "";
                $activeSR = "";
                if ($categoryValue) {
                    $active = " active";
                    $activeSR = ' <span class="sr-only">(current)</span>';
                }
            ?>
            <li class="nav-item<?= $active ?>">
                <a class="nav-link" href="index.php?category=<?= $category ?>">
                    <?= ucfirst($category) ?><?= $activeSR ?>
                </a>
            </li>
            <?php } ?>
            <li class="nav-item<?= $active ?>">
                <a class="nav-link" href="index.php?login">
                    Connexion
                </a>
            </li>
            <li class="nav-item<?= $active ?>">
                <a class="nav-link" href="index.php?signup">
                    Inscription
                </a>
            </li>
            <!-- https://freefrontend.com/css-toggle-menus -->
        </ul>
    </div>
</nav>
