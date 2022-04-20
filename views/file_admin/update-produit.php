<div class="space-admin-container">
    <h2 class="space-admin-title-top">Modifier un produit</h2>
    <div class="space-admin-view">

        <form id="update-priduit" method="post" enctype="multipart/form-data" class="inputs-container">

        
            <input type="text" id="nameproduit" class="login-input" placeholder="Nom du produit*">

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

            <textarea class="login-input" id="descriptionproduit" placeholder="Description du produit*"></textarea>

            <input type="number" id="prixproduit" class="login-input" placeholder="Prix du produit*">

            <label class="ph">Image du produit: </label>
            <input type="file" id="fileproduit" name="fileproduit" class="button-file">

            <select id="type" class="login-input addptype">
                <option hidden>Choisir un type*</option>
                <?php foreach ($type->getidTypeproduct() as $typeinfos) : ?>
                    <option value="<?= $typeinfos['id_produit_type'] ?>"><?= $typeinfos['nom_produit_type'] ?></option>
                <?php endforeach; ?>
            </select>

            <input type="number" id="qtestock" class="login-input" placeholder="Quantité de stock*">

            <p class="field"></p>

            <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>

            <button class="button-secondary submit-update-produit">Modifier</button>
        </form>
    </div>
</div>