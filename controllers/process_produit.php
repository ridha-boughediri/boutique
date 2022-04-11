<?php
session_start();
extract($_POST);
extract($_FILES);



require("../models/database.class.php");
require("../models/user.class.php");
require("../models/categorie.class.php");
require("../models/souscategorie.class.php");
require("../models/produit.class.php");
require("../models/couleur.class.php");
require("../models/type.class.php");

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