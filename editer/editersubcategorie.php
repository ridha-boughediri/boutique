<?php

require_once("../includes/class.autoload.inc.php");
// require_once("../adminhtmlcss/slideadmin.php");
// require_once("../adminhtmlcss/barreadmin.php");
// require_once("../adminhtmlcss/footeradmin.php");

$sub = new Souscategorie();
$subcats=$sub->EditeSouscategorie($_GET['id']);
var_dump($subcats);

$id_sous_catégorie=$subcats['id_sous_catégorie'];
$nom_sous_catégorie=$subcats['nom_sous_catégorie'];
$id_categorie=$subcats['id_categorie'];
echo " <br>";



if(isset($_POST['update'])){

  // var_dump('update');
    echo "sous categorie rajoutée avec success";



    $id_categorie =$_POST['id_categorie'];
    $id_sous_catégorie =$_GET['id'];
   
    $nom_sous_catégorie =$_POST['nom_sous_catégorie'];
    $sub->ShowIdSubcate($id_categorie,$nom_sous_catégorie,$id_sous_catégorie);
//    
}

?>

<form  method="POST">
    <label for="lname">nom de la nouvelle sous-categorie:</label><br>
    <input type="text" name="id_categorie" value="<?= $id_categorie; ?>">id categorie<br><br>
    <input type="text" name="id_sous_catégorie" value="<?= $id_sous_catégorie; ?>">id sous categorie <br><br>
    <input type="text" name="nom_sous_catégorie" value="<?= $nom_sous_catégorie; ?>">nom de la sous categorie<br><br>
    <input type="submit" name="update" value="modifier">
</form>
