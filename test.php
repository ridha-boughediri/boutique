<?php
 error_reporting( ~E_NOTICE ); // avoid notice
 require_once 'dbconfig.php';
 
 
  
  
 
 }
?>

<optgroup name="<?= $categorie['id_categorie'] ?>" label="<?= $categorie['nom_categorie'] ?>">


<?php foreach ($souscate as $souscategories) : ?>
    <option  name="<?= $souscategories['id_sous_catégorie'] ?>" value="<?= $souscategories['nom_sous_catégorie'] ?>">
    <?= $souscategories['nom_sous_catégorie'] ?></option>

    </option>
<?php endforeach; ?>
</optgroup>
