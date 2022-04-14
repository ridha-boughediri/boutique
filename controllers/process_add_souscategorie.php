<?php
session_start();
extract($_POST);

require("../vendor/autoload.php");




$subcategorie = htmlspecialchars($_POST['sous_catégorie']);

echo $subcategories->CreateCateSOU($categorie);