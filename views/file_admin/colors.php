<div class="space-admin-container-big">
  <h2 class="space-admin-title-top">Les couleurs</h2>
  <div class="space-admin-view">

    <button class="button-secondary add-color">Ajouter une Couleur</button>
    <div class="panel-admin-container">
      <div class="top-admin-bar">
        <h3 class="title-top-admin-bar">Id Couleur</h3>
        <h3 class="title-top-admin-bar">Nom Couleur</h3>
        <h3 class="title-top-admin-bar">Supprimer</h3>
        <h3 class="title-top-admin-bar">Modifier</h3>
      </div>
      <div class="body-admin-bar">
        <?php foreach ($couleur->getCoul() as $couleurinfos) : ?>
          <div class="body-admin-lign" data-id="<?= $couleurinfos['id_couleur'] ?>">
            <p class="admin-text-p"><?= $couleurinfos["id_couleur"] ?></p>
            <input type="text" id="namecolor" class="admin-input" placeholder="Nom du produit" value="<?= $couleurinfos["nom_couleur"] ?>">
            <button class="button-first submit-delete-color" data-id="<?= $couleurinfos['id_couleur'] ?>">Supprimer</button>
            <button class="button-secondary submit-edit-color" data-id="<?= $couleurinfos['id_couleur'] ?>">Modifier</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>