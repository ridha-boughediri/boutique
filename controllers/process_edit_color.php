<?php
session_start();
extract($_POST);

require("../vendor/autoload.php");


$categorie = new Categorie();
$couleur = new Couleur();
$database = new DataBase();
$panier = new Panier();
$monproduit = new Produit();
$souscategorie = new Souscategorie();
$type = new Type();
$user = new User();



$id = intval($_POST['id']);
$namecolor = htmlspecialchars($_POST['namecolor']);


echo $couleur->UpdateCouleurTong($namecolor,$id);