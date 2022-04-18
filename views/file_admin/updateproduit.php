<div class="space-admin-container-big">
  <h2 class="space-admin-title-top">Les produits</h2>
  <div class="space-admin-view">

    <div class="panel-admin-container">
      <p class="field"></p>
      <div class="top-admin-bar">
        <!-- <h3 class="title-top-admin-bar">Id Produit</h3> -->
        <h3 class="title-top-admin-bar">Nom Produit</h3>
        <h3 class="title-top-admin-bar">Description Produit</h3>
        <h3 class="title-top-admin-bar">Prix Produit</h3>
        <h3 class="title-top-admin-bar">Catégorie</h3>
        <h3 class="title-top-admin-bar">Sous-Catégorie</h3>
        <h3 class="title-top-admin-bar">Couleur</h3>

        <h3 class="title-top-admin-bar">Image Produit</h3>
        <h3 class="title-top-admin-bar">Quantité Stock</h3>
        <h3 class="title-top-admin-bar">Supprimer</h3>
        <h3 class="title-top-admin-bar">Modifier</h3>
      </div>
      <div class="body-admin-bar">
        <?php foreach ($monproduit->getProduit() as $produit) : ?>
          <div class="body-admin-lign" data-id="<?= $produit['id_produit'] ?>">
            <p class="admin-text-p"><?= $produit["id_produit"] ?></p>
            <input type="text" id="nameproduit" class="admin-input" placeholder="Nom du produit" value="<?= $produit["nom_produit"] ?>">
            <textarea class="admin-input" id="descriptionproduit" placeholder="Description du produit"><?= $produit["description_produit"] ?></textarea>
            <input type="number" id="prixproduit" class="admin-input" placeholder="Prix du produit*" value="<?= $produit["prix_produit"] ?>">

            <select id="idcategorie" class="admin-input addpcate">
              <option hidden>Choisir une categorie*</option>
              <?php foreach ($categorie->getCate() as $categorieinfos) : ?>
                <option value="<?= $categorieinfos['id_categorie'] ?>"><?= $categorieinfos['nom_categorie'] ?></option>
              <?php endforeach; ?>
            </select>

            <select id="idsouscategorie" class="admin-input">
              <option hidden>Choisir une sous-categorie*</option>
            </select>

            <select id="idcouleur" class="admin-input addpcolor">
              <option hidden>Choisir une couleur*</option>
              <?php foreach ($couleur->getCoul() as $couleurinfos) : ?>
                <option value="<?= $couleurinfos['id_couleur'] ?>"><?= $couleurinfos['nom_couleur'] ?></option>
              <?php endforeach; ?>
            </select>

            <input type="file" id="fileproduit" name="fileproduit" class="button-file" style="display: none;">
            <input type="button" value="Browse..." class="button-file-secondary" onclick="document.getElementById('fileproduit').click();" />

            <select id="type" class="admin-input addptype">
              <option hidden>Choisir un type*</option>
              <?php foreach ($type->getidTypeproduct() as $typeinfos) : ?>
                <option value="<?= $typeinfos['id_produit_type'] ?>"><?= $typeinfos['nom_produit_type'] ?></option>
              <?php endforeach; ?>
            </select>

            <input type="number" id="qtestock" class="admin-input" placeholder="Quantité de stock" value="<?= $produit["qte_stock"] ?>">
            <button class="button-first submit-delete-produit" data-id="<?= $produit['id_produit'] ?>">Supprimer</button>
            <button class="button-secondary submit-edit-produit" data-id="<?= $produit['id_produit'] ?>">Modifier</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>