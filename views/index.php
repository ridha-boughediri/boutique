<main>
    <div class="home-carousel">
        <div class="slick-slider">
            <div class="slick-slide">
                <img src="views/img/caroussel/car1.jpg" alt="" class="slick-img">
            </div>
            <div class="slick-slide">
                <img src="views/img/caroussel/car2.jpg" alt="" class="slick-img">
            </div>
            <div class="slick-slide">
                <img src="views/img/caroussel/car3.jpg" alt="" class="slick-img">
            </div>
        </div>
    </div>
    <div class="best-carousel">
        <h1 class="title-main">Nouvelle Article</h1>
        <div class="slick-cards">
            <?php foreach ($monproduit->getNewProduit() as $allproduit) { ?>
                <div class="slick-card" data-id="<?= $allproduit["id_produit"] ?>">
                    <img src="views/img/admin/<?= $allproduit["file_images"] ?>" alt="" class="slick-img">
                    <div class="slick-card-infos">
                        <h3><?= $allproduit["nom_produit"] ?></h3>
                        <p><?= $allproduit["prix_produit"] ?>€</p>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</main>