<?php
require_once("../classes/dataBase.class.php");
require_once("../classes/categorie.class.php");
require_once("../classes/couleur.class.php");
require_once("../classes/contance.class.php");
require_once("../classes/produit.class.php");
require_once("../classes/souscategorie.class.php");


// $list= new Categorie();
// print_r($list->getCate());
// echo "<br>";
$listcou= new Couleur();
print_r($listcou->getCoul());
echo "<br>";



$souscategorie = new Souscategorie();
print_r($souscategorie->getCateSou());
echo "<br>";
echo "<br>";
echo "<br>";

$showproduct= new Produit();
print_r($showproduct->getProduit());




?>


