<?php $searchprod = $monproduit->getProduitByLike($params[1]); ?>
<main>
    <div class="best-carousel">
        <h1 class="title-main">Vos resultats pour :</h1>
        <div class="slick-cards">
            <?php foreach ($searchprod as $allproduit) { ?>
                <div class="slick-card" data-id="<?= $allproduit["id_produit"] ?>">
                    <img src="views/img/admin/<?= $allproduit["file_images"] ?>" alt="" class="slick-img">
                    <div class="slick-card-infos">
                        <h3><?= $allproduit["nom_produit"] ?></h3>
                        <p><?= $allproduit["prix_produit"] ?>€</p>
                    </div>

                    <?php if (isset($_SESSION['id'])) { ?>
                        <button class="button-secondary buy-container" data-id="<?= $allproduit["id_produit"] ?>">Ajouter au panier <img src="views/img/carttrolley.png" alt=""></button>
                    <?php } else { ?>
                        <button class="button-secondary cursor-none" title="Veuillez vous connecter" data-id="<?= $allproduit["id_produit"] ?>">Ajouter au panier <img src="views/img/carttrolley.png" alt=""></button>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</main>