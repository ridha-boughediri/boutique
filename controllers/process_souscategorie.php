<?php
session_start();
extract($_POST);

require("../vendor/autoload.php");


$categorie = $_POST['categorie'];

$souscategoriesinfos = $souscategorie->Getid($categorie);

$countsouscate = count($souscategoriesinfos);
?>
<?php for ($i = 0; $i < $countsouscate; $i++) { ?>
    <option value="<?= $souscategoriesinfos[$i]['id_sous_catégorie'] ?>" name="<?= $souscategoriesinfos[$i]['id_sous_catégorie'] ?>"><?= $souscategoriesinfos[$i]['nom_sous_catégorie'] ?></option>
<?php } ?>