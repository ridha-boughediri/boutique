<main>

  <?php $comptcate = 0; ?>

  <?php foreach ($monproduit->getProduit() as $allproduit) { ?>
    <div class="product">
      <div class="image-box">
        <div class="images" id="image-2"><img src='views/img/admin/<?= $allproduit["file_images"] ?>'></div>
      </div>
      <div class="text-box">
        <h2 class="item"><?= $allproduit["nom_produit"] ?></h2>
        <h3 class="price"><?= $allproduit["prix_produit"] ?>€</h3>
        <!-- <p class="description"><?= $allproduit["description_produit"] ?></p> -->
        <label for="item-2-quantity">Quantity:<?= $allproduit["qte_stock"] ?></label>
        <input type="text" name="item-2-quantity" id="item-2-quantity" value="1">
        <button type="button" name="item-2-button" id="item-2-button">Ajout au panier<a href="viewCart?id=<?= $allproduit['id_produit'] ?>"></button>
        <button type="button" name="item-2-button" id="item-2-button">Acheter</button>
      </div>
    </div>
    <?php $comptcate++; ?>
  <?php } ?>


</main>