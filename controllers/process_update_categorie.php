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





$id_categorie= intval($_POST['id']);
$nom_categorie= htmlspecialchars($_POST['categorie']);






echo $categorie->UpdateCategorie($nom_categorie, $id_categorie)