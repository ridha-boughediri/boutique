<?php

require_once("../classes/dataBase.class.php");
require_once("../classes/categorie.class.php");
require_once("../classes/couleur.class.php");
require_once("../classes/souscategorie.class.php");
require_once("../classes/produit.class.php");
// require_once("../adminhtmlcss/slideadmin.php");
// require_once("../adminhtmlcss/barreadmin.php");
// require_once("../adminhtmlcss/footeradmin.php");

$cateposts = new Categorie();
$catepost=$cateposts->Editecategorie($_GET['id']);

$id_categorie=$catepost['id_categorie'];
$nom_categorie=$catepost['nom_categorie'];
echo " <br>";

if(isset($_POST['update'])){
    echo "categorie rajoutée avec success";
    $id_categorie =$_GET['id'];
    $nom_categorie =$_POST['nom_categorie'];
    $cateposts->UpdateCategorie($nom_categorie,$id_categorie);
    // var_dump($catepost['nom_categorie']);
    // var_dump($nom_categorie);
    // var_dump($id_categorie);
}

?>

<h2>CATEGORIE Forms</h2>


<form  method="POST">
    <label for="lname">nom de la categorie:</label><br>
    <input type="text" name="nom_categorie" value="<?= $nom_categorie; ?>"><br><br>
    <input type="submit" name="update" value="modifier">
</form>
