<?php 


require_once("./classes/dataBase.class.php");
require_once("./classes/categorie.class.php");
require_once("./classes/couleur.class.php");
require_once("./classes/contance.class.php");
require_once("./classes/produit.class.php");
require_once("./classes/souscategorie.class.php");

require_once("displaytablecategorie.php");
require_once("./adminhtml/slideadmin.php");
require_once("./adminhtml/barreadmin.php");
require_once("./adminhtml/footeradmin.php");




  $categoupdate= new Categorie();
  $categoupdate=$categoupdate->UpdateCA($_GET["id"]);
  print_r($categoupdate);
  $id_categorie=$categoupdate["id_categorie"];
  $nom_categorie=$categoupdate["nom_categorie"];
  if(isset($_POST['update'])){
    $nom_categorie = $_POST['nom_categorie'];
    $categoupdate->editeCate();
  
    header("location:./displaytablecategorie.php");
  }
  



?>



<h3>Edit categorie</h3>

<form method="POST">
    <label for="lname" >nom de la categorie:</label><br>
    <input type="text" name="id_categorie" value="<?= $categoupdate["id_categorie"]?>"><br><br>
    <input type="text" name="nom_categorie" value="<?= $categoupdate["nom_categorie"]?>"><br><br>
    <input type="submit" name="update" value="modifier">
  </form>