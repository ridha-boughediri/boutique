<?php
session_start();
extract($_POST);

require("../vendor/autoload.php");



$id = intval($_POST['id']);
$namecolor = htmlspecialchars($_POST['namecolor']);


echo $couleur->UpdateCouleurTong($namecolor,$id);