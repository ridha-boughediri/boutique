<main>
    <div class="home-carousel">
        <div class="slick-slider">
            <div class="slick-slide">
                <img src="views/img/backnike.png" alt="" class="slick-img">
            </div>
            <div class="slick-slide">
                <img src="views/img/---.jpg" alt="" class="slick-img">
            </div>
            <div class="slick-slide">
                <img src="views/img/---.jpg" alt="" class="slick-img">
            </div>
        </div>
    </div>
    <div class="best-carousel">
        <h1 class="title-main">Nouvelle Article</h1>
        <div class="slick-cards">
            <?php foreach ($monproduit->getNewProduit() as $allproduit) { ?>
                <div class="slick-card">
                    <img src="views/img/admin/<?= $allproduit["file_images"] ?>" alt="" class="slick-img">
                    <div class="slick-card-infos">
                        <h3><?= $allproduit["nom_produit"] ?></h3>
                        <p><?= $allproduit["prix_produit"] ?>€</p>
                    </div>

                </div>
            <?php } ?>
            <!-- <div class="slick-card">
                <img src="views/img/___.jpg" alt="" class="slick-img">
                <div class="slick-card-infos">
                    <h3>...</h3>
                    <p>..$..</p>
                </div>
            </div>

            <div class="slick-card">
                <img src="views/img/___.jpg" alt="" class="slick-img">
                <div class="slick-card-infos">
                    <h3>...</h3>
                    <p>..$..</p>
                </div>
            </div> -->
        </div>
    </div>
</main>