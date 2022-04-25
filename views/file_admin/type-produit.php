<div class="space-admin-container-big">
  <h2 class="space-admin-title-top">Type de Produit</h2>
  <div class="space-admin-view">
  <button class="button-secondary add-type-produit">Ajouter un Type de Produit</button>
    <div class="panel-admin-container">
      <div class="top-admin-bar">
        <h3 class="title-top-admin-bar">Id Type de Produit</h3>
        <h3 class="title-top-admin-bar">Nom Type de Produit</h3>
        <h3 class="title-top-admin-bar">Supprimer</h3>
        <h3 class="title-top-admin-bar">Modifier</h3>
      </div>
      <div class="body-admin-bar">
        <?php foreach ($type->getidTypeproduct() as $typo) : ?>
          <div class="body-admin-lign" data-id="<?= $typo['id_produit_type'] ?>">
            <p class="admin-text-p"><?= $typo['id_produit_type'] ?></p>
            <p class="admin-text-p"><?= $typo["nom_produit_type"] ?></p>
            <!-- <input type="text" id="nametypedeproduit" class="admin-input" placeholder="Nom du Type de Produit" value="<?= $typo["nom_produit_type"] ?>"> -->
            <button class="button-edit-admin submit-delete-typedeproduit" data-id="<?= $typo['id_produit_type'] ?>">Supprimer</button>
            <button class="button-delete-admin submit-edit-typedeproduit" data-id="<?= $typo['id_produit_type'] ?>">Modifier</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>