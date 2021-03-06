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
      <div class="shopping-cart-product">
        <a class="btn-link">Panier Vide</a>
      </div>

    <?php } else { ?>
      <?php foreach ($produitinfos as $produitinfo) { ?>

        <?php
        $getproduit = $database->connect()->prepare("SELECT * FROM produit WHERE id_produit = ?");
        $getproduit->execute(array($produitinfo['id_produit']));
        $produitinfox = $getproduit->fetch();
        $htprices = $produitinfox['prix_produit'] / (1 + 20);
        $htpricex = number_format($htprices, 2);
        ?>

        <div class="shopping-cart-product" data-id="<?= $produitinfox['id_produit'] ?>">
          <div class="product-image">
            <img src="views/img/admin/<?= $produitinfox['file_images'] ?>" data-id="<?= $produitinfox['file_images'] ?>">
          </div>
          <div class="product-details">
            <div class="product-title" data-id="<?= $produitinfox['nom_produit'] ?>"><?= $produitinfox['nom_produit'] ?></div>
            <p class="product-description"><?= $produitinfox['description_produit'] ?></p>
          </div>
          <div class="product-price" data-id="<?= $htpricex ?>"><?= $htpricex ?>€</div>
          <div class="product-quantity">
            <input type="number" data-id="<?= $produitinfo['quantite'] ?>" data-idprod="<?= $produitinfo['id_produit'] ?>" value="<?= $produitinfo['quantite'] ?>" min="1" max="<?= $produitinfox['qte_stock'] ?>" class="login-input quantotics" id="quantities">
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
        $prixquantite = $produitinfox['prix_produit'] * $produitinfo['quantite'];
        $total += $prixquantite;
        $htpriceo = $total / (1 + 20);
        $htprice = number_format($htpriceo, 2);
        $htpriceglob = $total - $htprice;
        $htpriceglobi = number_format($htpriceglob, 2);
      }
      if (!isset($htpriceglobi)) {
        $htpriceglobi = 0;
      }
      if (!isset($htprice)) {
        $htprice = 0;
      }
      ?>
      <div class="totals-item">
        <label>Prix HT</label>
        <div class="totals-value" id="cart-subtotal"><?= $htpriceglobi ?>€</div>
      </div>
      <div class="totals-item">
        <label>TVA (20%)</label>
        <div class="totals-value" id="cart-tax"><?= $htprice ?>€</div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Prix Total</label>
        <div class="totals-value" id="cart-total"><?= $total ?>€</div>
      </div>
    </div>
    <div class="container-lign-btn">
      <button class="button-secondary check-out" data-id="<?php echo $total ?>">Valider ➜</button>
    </div>


  </div>


</main>