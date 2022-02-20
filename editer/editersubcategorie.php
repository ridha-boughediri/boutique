<?php

require_once("../includes/class.autoload.inc.php");
// require_once("../adminhtmlcss/slideadmin.php");
// require_once("../adminhtmlcss/barreadmin.php");
// require_once("../adminhtmlcss/footeradmin.php");

$SubCateposts = new Souscategorie();
$SubCatepost=$SubCateposts->ShowIdSubcate($_GET['id']);
var_dump($SubCatepost);

// $id_couleur=$coulepost['id_couleur'];
// $nom_couleur=$coulepost['nom_couleur'];
// echo " <br>";

// if(isset($_POST['update'])){
//     echo "couleur rajoutée avec success";
//     $id_couleur =$_GET['id'];
//     $nom_couleur =$_POST['nom_couleur'];
//     $couleposts->UpdateCouleurTong($nom_couleur,$id_couleur);
//     // var_dump($catepost['nom_categorie']);
//     // var_dump($nom_categorie);
//     // var_dump($id_categorie);
//     header("location:../show/displaytablecouleur.php");

// }



?>


<!-- <form method="POST">
  <label for="pet-select">Choisir une categotrie</label>
  <select name="id_categorie" id="per1">
    <option selected="selected">un seul choix</option>
    <!-- <?php $categories = new Categorie(); ?> -->

<?php if ($categories->getCate()) : ?>
  <?php foreach ($categories->getCate() as $categorie) : ?>
        <option value="<?=  $categorie['id_categorie'] ?>"><?=  $categorie['nom_categorie'] ?></option>

  <?php endforeach; ?>
      <?php else : ?>
    <?php endif; ?> -->
  </select>
    <label for="lname">nom de la sous_categorie:</label><br>
    <input type="text" name="nom_sous_catégorie" value=""><br><br>
    <input type="submit" name="submit" value="submit">
  </form>
