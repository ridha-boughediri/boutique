<?php if (isset($params[2])) { ?>
  <?php
  $produitinfos = $monproduit->getProduitById($params[2]);
  ?>

  <h2 class="space-admin-title-top">Modifier un produit</h2>
  <div class="space-admin-view">

    <form id="update-produit" method="post" enctype="multipart/form-data" class="inputs-container">


      <input type="text" id="nameproduit" class="login-input" placeholder="Nom du produit*" value="<?= $produitinfos['nom_produit'] ?>">

      <select id="idcategorie" class="login-input addpcate">
        <option hidden>Choisir une categorie*</option>
        <?php foreach ($categorie->getCate() as $categorieinfos) : ?>
          <option value="<?= $categorieinfos['id_categorie'] ?>"><?= $categorieinfos['nom_categorie'] ?></option>
        <?php endforeach; ?>
      </select>

      <select id="idsouscategorie" class="login-input">
        <option hidden>Choisir une sous-categorie*</option>
      </select>

      <select id="idcouleur" class="login-input addpcolor">
        <option hidden>Choisir une couleur*</option>
        <?php foreach ($couleur->getCoul() as $couleurinfos) : ?>
          <option value="<?= $couleurinfos['id_couleur'] ?>"><?= $couleurinfos['nom_couleur'] ?></option>
        <?php endforeach; ?>
      </select>

      <textarea class="login-input" id="descriptionproduit" placeholder="Description du produit*"><?= $produitinfos['description_produit'] ?></textarea>

      <input type="number" id="prixproduit" class="login-input" placeholder="Prix du produit*" value="<?= $produitinfos['prix_produit'] ?>">

      <label class="ph">Image du produit: </label>
      <input type="file" id="fileproduit" name="fileproduit" class="button-file">

      <select id="type" class="login-input addptype">
        <option hidden>Choisir un type*</option>
        <?php foreach ($type->getidTypeproduct() as $typeinfos) : ?>
          <option value="<?= $typeinfos['id_produit_type'] ?>"><?= $typeinfos['nom_produit_type'] ?></option>
        <?php endforeach; ?>
      </select>

      <input type="number" id="qtestock" class="login-input" placeholder="Quantité de stock*" value="<?= $produitinfos['qte_stock'] ?>">

      <p class="field"></p>

      <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

      <button class="button-secondary submit-update-produit" data-id="<?= $produitinfos['id_produit'] ?>">Modifier</button>
    </form>
  </div>
<?php } else { ?>

  <div class="space-admin-container-big" id="produit-place">
    <h2 class="space-admin-title-top">Les produits</h2>
    <div class="space-admin-view">
      <button class="button-secondary add-produit">Ajouter un Produit</button>
      <div class="panel-admin-container">
        <div class="top-admin-bar">
          <h3 class="title-top-admin-bar">Id Produit</h3>
          <h3 class="title-top-admin-bar">Nom Produit</h3>
          <h3 class="title-top-admin-bar">Prix Produit</h3>
          <h3 class="title-top-admin-bar">Modifier</h3>
          <h3 class="title-top-admin-bar">Supprimer</h3>
        </div>
        <div class="body-admin-bar">
          <?php foreach ($monproduit->getProduit() as $produit) : ?>
            <div class="body-admin-lign" data-id="<?= $produit['id_produit'] ?>">
              <p class="admin-text-p"><?= $produit["id_produit"] ?></p>
              <p class="admin-text-p"><?= $produit["nom_produit"] ?></p>
              <p class="admin-text-p"><?= $produit["prix_produit"] ?></p>
              <button class="button-edit-admin submit-edit-produit" data-id="<?= $produit['id_produit'] ?>">Modifier</button>
              <button class="button-delete-admin submit-delete-produit" data-id="<?= $produit['id_produit'] ?>">Supprimer</button>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <p class="field"></p>
  </div>

<?php } ?>