<main>
    <div class="best-carousel">
        <h1 class="title-main">Vos resultats pour :</h1>
        <div class="slick-cards">
            <?php foreach ($monproduit->getProduitByLike($params[1]) as $allproduit) { ?>
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