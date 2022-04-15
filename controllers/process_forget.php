<?php
session_start();
extract($_POST);
extract($_FILES);

require("../vendor/autoload.php");


$categorie = new Categorie();
$couleur = new Couleur();
$database = new DataBase();
$panier = new Panier();
$monproduit = new Produit();
$souscategorie = new Souscategorie();
$type = new Type();
$user = new User();



$forgetmail = htmlspecialchars($_POST['forgetmail']);

echo $user->forgetPassword($forgetmail, $_SESSION['id']);
