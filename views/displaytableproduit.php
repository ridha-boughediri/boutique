<?php 


require_once("../includes/class.autoload.inc.php");
require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");


$produit = new Produit();

if($_GET['send'] === 'del') {
  $id_produit = $_GET['id'];
  $produit-> DeleProduit($id_produit);

  header("location:./displaytablecategorie.php");
}

?>

<h2>table produit</h2>

<table style="width:100%">
  <tr>
    <th>id_produit</th>
    <th>nom_produit</th>
    <th>description_produit</th>
    <th>prix_produit</th>
   
    <th>file_images</th>
    <th>qte_stock</th>
    <th>supprimer</th>
    <th>modifier</th>

  </tr>
  <?php $newproduit = new Produit(); ?>

  <?php if ($newproduit ->getProduit()) : ?>
    <?php foreach ($newproduit ->getProduit() as $produit) : ?>
      <tr>
      <th><?= $produit["id_produit"] ?></th>
    <th><?= $produit["nom_produit"] ?></th>
    <th><?= $produit["description_produit"] ?></th>
    <th><?= $produit["prix_produit"] ?>€</th>
    
    <th><img src='../views/img/admin/<?=$produit["file_images"] ?>'></th>
    <th><?= $produit["qte_stock"] ?></th>
    <td> <a href="displaytableproduit.php? id=<?=$produit['id_produit']?>&send=del" > <button>supprimer</button></a> </td>
    <td> <a href="editerproduit.php? id=<?= $produit['id_produit']?>" > <button>modifier</button></a> </td>


      <?php endforeach; ?>
    <?php else : ?>
    <?php endif; ?>


      </tr>


</table>

</body>

</html>