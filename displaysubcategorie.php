<?php
require_once("./classes/dataBase.class.php");
require_once("./classes/categorie.class.php");
require_once("./classes/couleur.class.php");
require_once("./classes/contance.class.php");
require_once("./classes/produit.class.php");
require_once("./classes/souscategorie.class.php");
require_once("./adminhtml/slideadmin.php");
require_once("./adminhtml/barreadmin.php");
require_once("./adminhtml/footeradmin.php");

// $list= new Souscategorie();
// $NvelleCoul = new Souscategorie();
// echo " <br>";

$souscategorie = new Souscategorie();
print_r($souscategorie->getCateSou());

// if (isset($_POST['submit'])) {

//   $couleur = $_POST['nom_sous_categorie'];
//   $NvelleCoul->CreateCateSOU($couleur);
// }

?>
<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>

<h2>Sous-categorie Forms</h2>


<form method="POST">
  <label for="lname">nom de la sous-categorie:</label><br>
  <input type="text" name="nom_sous_catégorie" value=""><br><br>
  <input type="submit" name="submit" value="submit">
</form>
    <h2>couleur table</h2>

    <table style="width:100%">
        <tr>
            <th>id_categorie</th>
            <th>nom_sous_categorie</th>
            <th>supprimer</th>
            <th>modifier</th>

            <?php  $couleurs= new Souscategorie();?>

<?php if($couleurs->getCateSou()) : ?>
<?php foreach($couleurs->getCateSou()as $couleur): ?>
  <tr>
    <td><?=  $couleur["id_categorie"] ?></td>
    <td><?=  $couleur["nom_sous_catégorie"]  ?></td>
    <td>supprimer</td>
    <td>modifier</td>
 

<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>


</body>

</html>