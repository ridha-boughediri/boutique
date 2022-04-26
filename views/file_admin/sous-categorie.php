<?php if (isset($params[2])) { ?>
  <?php
  $souscategorieinfos = $souscategorie->getSouscategorie($params[2]);
  ?>
  <div class="space-admin-container">
    <h2 class="space-admin-title-top">Modifier une Sous-Categorie</h2>
    <div class="space-admin-view">

      <div class="inputs-container">

        <input type="text" id="namesouscategorie" class="login-input" placeholder="Nom de la Sous-Categorie*" value="<?= $souscategorieinfos["nom_sous_catégorie"] ?>">

        <p class="field"></p>

        <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

        <button class="button-secondary submit-update-sous-categorie" data-id="<?= $params[2] ?>">Modifier</button>
      </div>
    </div>
  </div>
<?php } else { ?>

  <div class="space-admin-container-big">
    <h2 class="space-admin-title-top">Les Sous-Categorie</h2>
    <div class="space-admin-view">

      <button class="button-secondary add-sous-categories">Ajouter une Sous-Catégories</button>
      <div class="panel-admin-container">
        <div class="top-admin-bar">
          <h3 class="title-top-admin-bar">Id Sous-Categorie</h3>
          <h3 class="title-top-admin-bar">Nom Sous-Categorie</h3>
          <h3 class="title-top-admin-bar">Modifier</h3>
          <h3 class="title-top-admin-bar">Supprimer</h3>
        </div>
        <div class="body-admin-bar">
          <?php foreach ($souscategorie->getCateSou() as $souscategory) : ?>
            <div class="body-admin-lign" data-id="<?= $souscategory["id_sous_catégorie"] ?>">
              <p class="admin-text-p"><?= $souscategory["id_sous_catégorie"] ?></p>
              <p class="admin-text-p"><?= $souscategory["nom_sous_catégorie"]  ?></p>
              <button class="button-edit-admin submit-edit-sous-categorie" data-id="<?= $souscategory["id_sous_catégorie"] ?>">Modifier</button>
              <button class="button-delete-admin submit-delete-sous-categorie" data-id="<?= $souscategory["id_sous_catégorie"] ?>">Supprimer</button>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

<?php } ?>