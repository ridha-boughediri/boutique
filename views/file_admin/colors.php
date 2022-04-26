<?php if (isset($params[2])) { ?>
  <?php
  $couleurinfos = $couleur->ShowIDCoul($params[2]);
  ?>

  <div class="space-admin-container">
    <h2 class="space-admin-title-top">Modifier une Couleur</h2>
    <div class="space-admin-view">

      <div class="inputs-container">

        <input type="text" id="namecolor" class="login-input" placeholder="Nom de la Couleur*" value="<?= $couleurinfos['nom_couleur'] ?>">

        <p class="field"></p>

        <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

        <button class="button-secondary submit-update-color" data-id="<?= $couleurinfos['id_couleur'] ?>">Modifier</button>
      </div>
    </div>
  </div>
<?php } else { ?>

  <div class="space-admin-container-big">
    <h2 class="space-admin-title-top">Les couleurs</h2>
    <div class="space-admin-view">

      <button class="button-secondary add-color">Ajouter une Couleur</button>
      <div class="panel-admin-container">
        <div class="top-admin-bar">
          <h3 class="title-top-admin-bar">Id Couleur</h3>
          <h3 class="title-top-admin-bar">Nom Couleur</h3>
          <h3 class="title-top-admin-bar">Modifier</h3>
          <h3 class="title-top-admin-bar">Supprimer</h3>
        </div>
        <div class="body-admin-bar">
          <?php foreach ($couleur->getCoul() as $couleurinfos) : ?>
            <div class="body-admin-lign" data-id="<?= $couleurinfos['id_couleur'] ?>">
              <p class="admin-text-p"><?= $couleurinfos["id_couleur"] ?></p>
              <input type="text" id="namecolor" class="admin-input" placeholder="Nom du produit" value="<?= $couleurinfos["nom_couleur"] ?>">
              <button class="button-edit-admin submit-edit-color" data-id="<?= $couleurinfos['id_couleur'] ?>">Modifier</button>
              <button class="button-delete-admin submit-delete-color" data-id="<?= $couleurinfos['id_couleur'] ?>">Supprimer</button>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

<?php } ?>