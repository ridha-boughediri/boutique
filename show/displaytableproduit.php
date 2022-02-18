<?php 
require_once("../classes/dataBase.class.php");
require_once("../classes/categorie.class.php");
require_once("../classes/couleur.class.php");
require_once("../classes/souscategorie.class.php");
require_once("../classes/produit.class.php");

require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");


?>

<h2>table produit</h2>

<table style="width:100%">
  <tr>
    <th>id_produit</th>
    <th>nom_produit</th>
    <th>description</th>
    <th>prix_produit</th>
    <th>id_categorie</th>
    <th>id_couleur</th>
    <th>id_sous_categorie</th>
    <th>images</th>
    <th>supprimer</th>
    <th>modifier</th>

  </tr>
  <?php $newproduit = new Produit(); ?>

  <?php if ($newproduit ->getProduit()) : ?>
    <?php foreach ($newproduit ->getProduit() as $produit) : ?>
      <tr>
      <th><?= $produit["id_produit"] ?></th>
    <th><?= $produit["nom_produit"] ?></th>
    <th><?= $produit["description"] ?></th>
    <th><?= $produit["prix_produit"] ?>€</th>
    <th><?= $produit["id_couleur"] ?></th>
    <th><?= $produit["id_produit"] ?></th>
    <th><?= $produit["id_sous_catégorie"] ?></th>
    <th><?= $produit["images"] ?></th>
    <td> <a href="displaytablecategorie.php? id=<?=$produit['id_produit']?>" > <button>supprimer</button></a> </td>
    <td> <a href="editerlacategorie.php? id=<?= $produit['id_produit']?>&send=del" > <button>modifier</button></a> </td>


      <?php endforeach; ?>
    <?php else : ?>
    <?php endif; ?>


      </tr>


</table>

</body>

</html>