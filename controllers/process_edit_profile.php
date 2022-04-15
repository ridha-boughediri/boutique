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




$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$mail = htmlspecialchars(trim($_POST['mail']));
$password = sha1(trim($_POST['password']));
$phone = htmlspecialchars(trim($_POST['phone']));

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

echo $user->update($firstname, $lastname, $mail, $password, $phone, $avatarname, $avatartype, $avatartmp_name, $avatarerror, $avatarsize);
