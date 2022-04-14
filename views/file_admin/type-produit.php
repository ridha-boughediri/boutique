<?php




// if (isset($_POST['submit'])) {

//   $nom_categorie = $_POST['nom_categorie'];
//   $NvelleCATE->CreateCate($nom_categorie);
// }

// else if($_GET['send'] === 'del') {
//   $id_categorie = $_GET['id'];
//   $NvelleCATE->DeleCate($id_categorie);

//   header("location:./displaytablecategorie.php");
// }

// else if(isset($_POST['update'])){
//   $nom_categorie = $_POST['nom_categorie'];
//   $NvelleCATE->DeleCate($id_categorie);

//   header("location:./displaytablecategorie.php");
// }


?>

<div class="space-admin-container-big">
  <h2 class="space-admin-title-top">Type de Produit</h2>
  <div class="space-admin-view">

    <div class="panel-admin-container">
      <p class="field"></p>
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
            <input type="text" id="nametypedeproduit" class="admin-input" placeholder="Nom du Type de Produit" value="<?= $typo["nom_produit_type"] ?>">
            <button class="button-first submit-delete-typedeproduit" data-id="<?= $typo['id_produit_type'] ?>">Supprimer</button>
            <button class="button-secondary submit-edit-typedeproduit" data-id="<?= $typo['id_produit_type'] ?>">Modifier</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>