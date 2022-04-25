<?php $searchprod = $monproduit->getProduitByLike($params[1]); ?>
<main>
    <div class="best-carousel">
        <h1 class="title-main">Vos resultats pour :</h1>
        <div class="slick-cards">
            <?php foreach ($searchprod as $allproduit) { ?>
                <div class="slick-card">
                    <img src="views/img/admin/<?= $allproduit["file_images"] ?>" alt="" class="slick-img" data-id="<?= $allproduit["id_produit"] ?>">
                    <div class="slick-card-infos">
                        <h3><?= $allproduit["nom_produit"] ?></h3>
                        <p><?= $allproduit["prix_produit"] ?>€</p>
                    </div>

                    <?php if (isset($_SESSION['id']) && $allproduit["qte_stock"] > 0) { ?>
                        <button class="button-secondary buy-container" data-id="<?= $allproduit["id_produit"] ?>">Ajouter au panier <img src="views/img/carttrolley.png" alt=""></button>
                    <?php } else if (isset($_SESSION['id']) && $allproduit["qte_stock"] < 0) { ?>
                        <button class="button-secondary cursor-none" title="Veuillez vous connecter">Ajouter au panier <img src="views/img/carttrolley.png" alt=""></button>
                    <?php } else { ?>
                        <button class="button-secondary cursor-none" title="Stock Épuisée">Ajouter au panier <img src="views/img/carttrolley.png" alt=""></button>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</main>