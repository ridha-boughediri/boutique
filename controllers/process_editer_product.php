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



$idproduit = intval($_POST['id']);
$nameproduit = htmlspecialchars($_POST['nameproduit']);
$idcategorie = intval($_POST['idcategorie']);
$idsouscategorie = intval($_POST['idsouscategorie']);
$idcouleur = intval($_POST['idcouleur']);
$descriptionproduit = htmlspecialchars($_POST['descriptionproduit']);
$prixproduit = floatval($_POST['prixproduit']);

if (isset($_FILES['file'])) {
    $avatarname = htmlspecialchars(trim($_FILES['file']['name']));
    $avatartype = htmlspecialchars(trim($_FILES['file']['type']));
    $avatartmp_name = htmlspecialchars(trim($_FILES['file']['tmp_name']));
    $avatarerror = htmlspecialchars(trim($_FILES['file']['error']));
    $avatarsize = htmlspecialchars(trim($_FILES['file']['size']));
} else {
    $avatarname = '';
    $avatartype = '';
    $avatartmp_name = '';
    $avatarerror = '';
    $avatarsize = '';
}

$type = intval($_POST['type']);
$qtestock = intval($_POST['qtestock']);

echo $monproduit->update($idproduit, $nameproduit, $descriptionproduit, $prixproduit, $idcategorie, $idsouscategorie, $idcouleur, $type, $avatarname, $avatartype, $avatartmp_name, $avatarerror, $avatarsize, $qtestock);