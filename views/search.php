<main>
    <div class="best-carousel">
        <h1 class="title-main">Vos resultats pour :</h1>
        <div class="slick-cards">
        <?php var_dump($monproduit->getProduitByLike($params[1])); ?>
            <?php foreach ($monproduit->getProduitByLike($params[1]) as $allproduit) { ?>
                <?php var_dump($params[1]); ?>
                <div class="slick-card">
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