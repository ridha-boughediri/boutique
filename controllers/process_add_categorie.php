<?php
session_start();
extract($_POST);

require("../vendor/autoload.php");




$categorie = htmlspecialchars($_POST['categorie']);

echo $categories->CreateCate($categorie);


