<div class="container mb-5 mt-5">

    <div class="row">

		<div class="col-sm-12 col-lg-5">
			<div id="container">

				<div class="row">
					<img
						id="mainImage"
						class="img-fluid rounded"
						src="/images/articles/article_id_001/black/classique.jpg"
						alt="image d'article"
					>
				</div>

				<div class="row mt-3">
					<div class="d-flex align-items-start imgRow">
                        <?php
                        $i = 1;
                        foreach ($article['images'] as $image)
                        { ?>
						<div class="p-2">
							<img
								class="<?= $i ?> img-fluid rounded thumbnail"
								src="/images/articles/article_id_001/black/<?= $image ?>-thumbnail.jpg"
								alt="Miniature de <?= $image ?>.jpg"
							>
						</div>
                        <?php
                        $i++;
                        }
                        ?>
					</div>
				</div>

			</div>
		</div>


        <div class="col-sm-12 col-lg-7">
            <h2><?= $article['name'] ?></h2>

            <hr>

            <div class="description">
                <p><?= $article['description'] ?></p>
            </div>

            <hr>

            <div class="d-flex justify-content-start align-items-center mb-3">
                <div class="p-2 articleLabel">Tailles</div>
                <?php foreach ($article['sizes'] as $size) { ?>
                <div class="p-2 ml-2 circle"><?= $size ?></div>
                <?php } ?>
            </div>

            <div class="d-flex justify-content-start align-items-center">
                <div class="p-2 articleLabel">Couleurs</div>
                <?php foreach ($article['colors'] as $color) { ?>
                <div class="p-2 ml-2 circle" style="background-color: <?= $color ?>;"></div>
                <?php } ?>
            </div>

        </div>

    </div>

</div>
