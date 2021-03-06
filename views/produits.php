<main class="main-first">

  <?php $prodbycateandsouscate = $monproduit->getProduitByCategorieAndSousCategorie($params[1], $params[2]); ?>
  <?php $sizeprod = count($prodbycateandsouscate); ?>

  <div class="container-list-produit">

    <?php if ($sizeprod == 0) { ?>
      <div class="best-carousel">
        <div class="slick-cards">
          <p>Aucun Produit Trouvée</p>
        </div>
      </div>
    <?php } else { ?>
      <div class="best-carousel padding-tb1">
        <div class="slick-cards">
          <?php foreach ($prodbycateandsouscate as $allproduit) { ?>
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
    <?php } ?>
  </div>
</main>