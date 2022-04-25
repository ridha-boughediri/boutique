<?php if (isset($params[2])) { ?>
  <?php
  $categorieinfos = $categorie->Editecategorie($params[2]);
  ?>
  <div class="space-admin-container">
    <h2 class="space-admin-title-top">Modifier une Categorie</h2>
    <div class="space-admin-view">

      <div class="inputs-container">

        <input type="text" id="namecategorie" class="login-input" placeholder="Nom de la Categorie*" value="<?= $categorieinfos['nom_categorie'] ?>">

        <p class="field"></p>

        <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

        <button class="button-secondary submit-update-categorie" data-id="<?= $categorieinfos['id_categorie'] ?>">Modifier</button>
      </div>
    </div>
  </div>
<?php } else { ?>

  <div class="space-admin-container-big">
    <h2 class="space-admin-title-top">Les Categories</h2>
    <div class="space-admin-view">
      <button class="button-secondary add-categorie">Ajouter une Catégories</button>
      <div class="panel-admin-container">
        <div class="top-admin-bar">
          <h3 class="title-top-admin-bar">Id Categorie</h3>
          <h3 class="title-top-admin-bar">Nom Categorie</h3>
          <h3 class="title-top-admin-bar">Modifier</h3>
          <h3 class="title-top-admin-bar">Supprimer</h3>
        </div>
        <div class="body-admin-bar">
          <?php foreach ($categorie->getCate() as $category) : ?>
            <div class="body-admin-lign" data-id="<?= $category["id_categorie"] ?>">
              <p class="admin-text-p"><?= $category["id_categorie"] ?></p>
              <input type="text" id="namecategorie" class="admin-input" placeholder="Nom du produit" value="<?= $category["nom_categorie"]  ?>">
              <button class="button-edit-admin submit-edit-categorie" data-id="<?= $category["id_categorie"] ?>">Modifier</button>
              <button class="button-delete-admin submit-delete-categorie" data-id="<?= $category["id_categorie"] ?>">Supprimer</button>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

<?php } ?>