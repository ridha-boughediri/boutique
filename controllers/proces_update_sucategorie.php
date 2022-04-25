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



$id_catégorie = intval($_POST['id']);
$nom_sous_catégorie = htmlspecialchars($_POST['nom_sous_catégorie']);
$id_sous_catégorie = htmlspecialchars($_POST['id_sous_catégorie']);


echo $souscategorie->updatewithIdcate($id_categorie, $nom_sous_catégorie, $id_sous_catégorie);