<?php
require_once("../includes/class.autoload.inc.php");

// require_once("../adminhtmlcss/slideadmin.php");
// require_once("../adminhtmlcss/barreadmin.php");
// require_once("../adminhtmlcss/footeradmin.php");



$monproduit = new Produit();
// $monproduit-> Createproduit($nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$images,$qte_stock);
// var_dump($monproduit);



var_dump($_POST);

if (isset($_POST['submit'])) {
        echo "porduit rajoute avec success petit loup";
    $nom_produit =$_POST['nom_produit'];
    $description_produit=$_POST['description_produit'];
    $prix_produit=$_POST['prix_produit'];
    $id_categorie=$_POST['id_categorie'];
    $id_sous_catégorie=$_POST['id_sous_catégorie'];
    $id_couleur=$_POST['id_couleur'];
    $id_produit_type=$_POST['id_produit_type'];
    $images=$_POST['images'];
    $qte_stock=$_POST['qte_stock'];
    $monproduit-> Createproduit($nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$images,$qte_stock);
    
}

var_dump($_POST);





?>