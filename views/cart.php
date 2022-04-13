<main>

  <h1 class="cart-title-top">Panier</h1>

  <div class="shopping-cart">

    <div class="cart-line">
      <label class="product-image">Image</label>
      <label class="product-details">Produit</label>
      <label class="product-price">Prix TVA</label>
      <label class="product-quantity">Quantité</label>
      <label class="product-removal">Supprimer</label>
      <label class="product-line-price">Total</label>
    </div>


    <?php if ($paniercount == 0) { ?>
      <a class="btn-link">Panier Vide</a>
    <?php } else { ?>
      <?php foreach ($produitinfos as $produitinfo) { ?>

        <?php
        $getproduit = $database->connect()->prepare("SELECT * FROM produit WHERE id_produit = ?");
        $getproduit->execute(array($produitinfo['id_produit']));
        $produitinfox = $getproduit->fetch();
        $htprices = $produitinfox['prix_produit'] / (1 + 5);
        $htpricex = number_format($htprices, 2);
        ?>

        <div class="shopping-cart-product">
          <div class="product-image">
            <img src="views/img/admin/<?= $produitinfox['file_images'] ?>">
          </div>
          <div class="product-details">
            <div class="product-title"><?= $produitinfox['nom_produit'] ?></div>
            <p class="product-description"><?= $produitinfox['description_produit'] ?></p>
          </div>
          <div class="product-price"><?= $htpricex ?>€</div>
          <div class="product-quantity">
            <input type="number" value="<?= $produitinfo['quantite'] ?>" min="1" class="login-input">
          </div>
          <div class="product-removal">
            <button class="remove-product deletecart" data-id="<?= $produitinfox['id_produit'] ?>"><img src="views/img/bin.png" class="cart-bin-produit"></button>
          </div>
          <div class="product-line-price"><?= $produitinfox['prix_produit'] ?>€</div>
        </div>
      <?php } ?>
    <?php } ?>




    <div class="totals">
      <?php
      $total = 0;
      foreach ($produitinfos as $produitinfo) {
        $getproduit = $database->connect()->prepare("SELECT * FROM produit WHERE id_produit = ?");
        $getproduit->execute(array($produitinfo['id_produit']));
        $produitinfox = $getproduit->fetch();
        $produitcounts = $getproduit->rowCount();
        $total += $produitinfox['prix_produit'];
        $htprice = $total / (1 + 5);
        $htpriceglob = $total - $htprice;
        $totalprod = $produitcounts;
      }
      ?>
      <div class="totals-item">
        <label>Sous-Total</label>
        <div class="totals-value" id="cart-subtotal"><?= $htpriceglob ?>€</div>
      </div>
      <div class="totals-item">
        <label>Tva (5%)</label>
        <div class="totals-value" id="cart-tax"><?= $htprice ?>€</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Prix Total</label>
        <div class="totals-value" id="cart-total"><?= $total ?>€</div>
      </div>
    </div>
    <div class="container-lign-btn">
      <button class="button-secondary check-out">Valider ➜</button>
    </div>


  </div>


</main>