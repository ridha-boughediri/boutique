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



$id = htmlspecialchars($_POST['id']);


echo $panier->addCart($id);
