<?php


require_once("./classes/dataBase.class.php");
require_once("./classes/categorie.class.php");
require_once("./classes/couleur.class.php");
require_once("./classes/souscategorie.class.php");
require_once("./classes/produit.class.php");
// $list= new Categorie();
// print_r($list->getCate());
// echo "<br>";
// $listcou= new Couleur();
// print_r($listcou->getCoul());
// echo "<br>";

// $listcon= new Contenance();
// print_r($listcon->getContenace());
// echo "<br>";
$newproduit= new Produit();
var_dump($newproduit->getArticle());

?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<h2>Product Forms</h2>


  <form method="POST">
    <label for="lname">nom de la categorie:</label><br>
    <input type="text" name="categorie_nom" value=""><br><br>
    <input type="submit" name="submit" value="submit">
  </form>
<h2>produit magique table</h2>

<table style="width:100%">
  <tr>
  

    <th>produit_titre</th>
    <th>libellé</th>
    <th>produit_prix</th>
    <th>id_categorie</th>
    <th>id_contenance</th>
    <th>id_couleur</th>
    <th>id_image</th>
    <th>supprimer</th>
    <th>modifier</th>
  </tr>
<?php  $articles= new Produit();?>

<?php if($articles->getArticle()) : ?>
<?php foreach($articles->getArticle()as $ART): ?>
  <tr>
  <td><?=  $ART["produit_titre"] ?></td>
  <td><?=  $ART["libellé"] ?></td>l
    <td><?=  $ART["produit_prix"] ?></td>libellé
    <td><?=  $ART["id_categorie"] ?></td>
    <td><?=  $ART["id_couleur"] ?></td>
    <td><?=  $ART["id_contenance"] ?></td>
    <td><?=  $ART["images"] ?></td>
    <td>supprimer</td>
    <td>modifier</td>


</table>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>


</body>
</html>