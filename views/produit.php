<?php
$produitinfos = $monproduit->getProduitById($params[1]);
// var_dump($produitinfos);
if (isset($_SESSION['id'])) {
  // $getcartlist = $database->connect()->prepare('SELECT * FROM articles_commande WHERE id_utilisateur = ? and id_produit = ?');
  // $getcartlist->execute(array($_SESSION['id'], $params[1]));
  // $cartlistnb = $getcartlist->rowCount();
  // $cartcount = $panier->countAllCartByIdProduit($params[1]);
}
?>






<main>
  <div class="container-produit">
    <div class="container-produit-img">
      <img class="produit-img" src="views/img/admin/<?= $produitinfos["file_images"] ?>">
    </div>

    <div class="container-produit-infos">
      <h1><?= $produitinfos['nom_produit'] ?></h1>
      <p class="price"><?= $produitinfos['prix_produit'] ?>€</p>
      <p class="description"><?= $produitinfos['description_produit'] ?></p>

      <div class="container-produit-btn">
        <?php if (isset($_SESSION['id'])) { ?>
          <button class="button-round-first" id="wishlist-container" title="Ajouter a ma liste" data-id="<?= $produitinfos['id_produit'] ?>"><img src="views/img/would.png" alt=""></button>
          <button class="button-round-first" id="buy-container" title="Ajouter au panier" data-id="<?= $produitinfos['id_produit'] ?>"><img src="views/img/panier.png" alt=""></button>
        <?php } else { ?>
          <button class="button-round-first cursor-none" title="Veuillez vous connecter" data-id="<?= $produitinfos['id_produit'] ?>"><img src="views/img/would.png" alt=""></button>
          <button class="button-round-first cursor-none" title="Veuillez vous connecter" data-id="<?= $produitinfos['id_produit'] ?>"><img src="views/img/panier.png" alt=""></button>
        <?php  } ?>
      </div>

      <p class="small-text"><span>Livraison Standard</span> entre 2 à 5 jours ouvrés</p>
      <p class="small-text"><span>Demain,</span> Livré avant 14:00 (5.79€)</p>

    </div>
  </div>
</main>