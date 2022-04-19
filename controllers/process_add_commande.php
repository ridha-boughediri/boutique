<?php
session_start();
extract($_POST);
//jai cree ce fichier pour traite les comannde en dur via la database




require("../vendor/autoload.php");

$categorie = new Categorie();
$couleur = new Couleur();
$database = new DataBase();
$panier = new Panier();
$monproduit = new Produit();
$souscategorie = new Souscategorie();
$type = new Type();
$user = new User();

//lesinfos a rentre dans la database pour leshistorique cammande 

$id_utilsator = htmlspecialchars($_SESSION['id']);
$quantity = htmlspecialchars($_POST['quantity']);
$nameproduit = htmlspecialchars($_POST['nameproduit']);
$descriptionproduit = htmlspecialchars($_POST['descriptionproduit']);
$prixproduit = floatval($_POST['prixproduit']);



$id = htmlspecialchars($_POST['id']);


echo $panier->addCart($id);
