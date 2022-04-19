<main class="main-first">

  <?php $prodbycateandsouscate = $monproduit->getProduitByCategorieAndSousCategorie($params[1], $params[2]); ?>
  <?php $sizeprod = count($prodbycateandsouscate); ?>

  <div class="container-list-produit">
    <div class="list-container-produit scroll-bar-small">
      <h2 class="title-produit-bar">Couleurs</h2>
      <div class="list-btn-product">
        <?php foreach ($couleur->getCoul() as $couleurinfos) { ?>
          <button class="button-eight btn-filter-color" data-id="<?= $couleurinfos['id_couleur'] ?>" data-cate="<?= $params[1] . '-' . $params[2] ?>"><?= $couleurinfos['nom_couleur'] ?></button>
        <?php } ?>
      </div>
    </div>

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
    <?php } ?>
  </div>
</main>