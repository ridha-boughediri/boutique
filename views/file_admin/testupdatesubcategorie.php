<!-- <?php if (isset($params[2])) { ?>
    <?php
  $souscategorieinfos = $souscategorieinfos->EditeSouscategorie($params[2]);
  ?>
  <div class="space-admin-container">
    <h2 class="space-admin-title-top">Modifier une Sous_Categorie</h2>
    <div class="space-admin-view">

      <div class="inputs-container">

        <input type="text" id="namesouscategorie" class="login-input" placeholder="Nom de sous la Categorie*" value="<?= $categorieinfos['nom_sous_categorie'] ?>">

        <p class="field"></p>

        <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

        <button class="button-secondary submit-update-categorie" data-id="<?= $categorieinfos['id_categorie'] ?>">Modifier</button>
      </div>
    </div>
  </div>
<?php } else { ?> -->





<div class="space-admin-container">
    <h2 class="space-admin-title-top">Ajouter une Sous-Categorie</h2>
    <div class="space-admin-view">

        <div class="inputs-container">

            <select id="idcategorie" class="login-input">
                <option hidden>Choisir une categorie*</option>
                <?php foreach ($categorie->getCate() as $categorieinfos) : ?>
                    <option value="<?= $categorieinfos['id_categorie'] ?>"><?= $categorieinfos['nom_categorie'] ?></option>
                <?php endforeach; ?>
            </select>

            <input type="text" id="sous-categorie" class="login-input" placeholder="Nom de la Sous-Categorie*">

            <p class="field"></p>

            <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

            <button class="button-secondary submit-add-sous-categorie">Ajouter</button>
        </div>
    </div>
</div>