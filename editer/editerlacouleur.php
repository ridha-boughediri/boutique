<?php

require_once("../includes/class.autoload.inc.php");
require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");

$couleposts = new Couleur();
$coulepost=$couleposts->ShowIDCoul($_GET['id']);
var_dump($coulepost);

$id_couleur=$coulepost['id_couleur'];
$nom_couleur=$coulepost['nom_couleur'];
echo " <br>";

if(isset($_POST['update'])){
    echo "couleur rajoutée avec success";
    $id_couleur =$_GET['id'];
    $nom_couleur =$_POST['nom_couleur'];
    $couleposts->UpdateCouleurTong($nom_couleur,$id_couleur);
    // var_dump($catepost['nom_categorie']);
    // var_dump($nom_categorie);
    // var_dump($id_categorie);
    header("location:../show/displaytablecouleur.php");

}



?>

<h2>Couleur Forms</h2>


<form  method="POST">
    <label for="lname">nom de la nouvelle couleur:</label><br>
    <input type="text" name="nom_couleur" value="<?= $nom_couleur; ?>"><br><br>
    <input type="submit" name="update" value="modifier">
</form>
