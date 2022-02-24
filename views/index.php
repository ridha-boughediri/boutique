<?php
require_once("../includes/class.autoload.inc.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


// $listcou= new Couleur();
// print_r($listcou->getCoul());
// echo "<br>";
// $untype= new Type();
// print_r($untype->getidTypeproduct());



// $souscategorie = new Souscategorie();
// print_r($souscategorie->getCateSou());
// echo "<br>";
// echo "<br>";
// echo "<br>";

$showproduct= new Produit();
print_r($showproduct->getProduit());



?> 
</body>
</html>
