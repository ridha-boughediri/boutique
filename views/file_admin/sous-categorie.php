<div class="space-admin-container-big">
  <h2 class="space-admin-title-top">Les Sous-Categorie</h2>
  <div class="space-admin-view">

    <div class="panel-admin-container">
      <p class="field"></p>
      <div class="top-admin-bar">
        <h3 class="title-top-admin-bar">Id Sous-Categorie</h3>
        <h3 class="title-top-admin-bar">Nom Sous-Categorie</h3>
        <h3 class="title-top-admin-bar">Supprimer</h3>
        <h3 class="title-top-admin-bar">Modifier</h3>
      </div>
      <div class="body-admin-bar">
        <?php foreach ($souscategorie->getCateSou() as $souscategory) : ?>
          <div class="body-admin-lign" data-id="<?= $souscategory["id_sous_catégorie"] ?>">
            <p class="admin-text-p"><?= $souscategory["id_sous_catégorie"] ?></p>
            <input type="text" id="namesous-categorie" class="admin-input" placeholder="Nom du produit" value="<?= $souscategory["nom_sous_catégorie"]  ?>">
            <button class="button-first submit-delete-sous-categorie" data-id="<?= $souscategory["id_sous_catégorie"] ?>">Supprimer</button>
            <button class="button-secondary submit-edit-sous-categorie" data-id="<?= $souscategory["id_sous_catégorie"] ?>">Modifier</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>