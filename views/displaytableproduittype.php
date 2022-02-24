<?php

require_once("../includes/class.autoload.inc.php");

require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");

$NvelleCATE = new Type();
echo " <br>";


if (isset($_POST['submit'])) {

  $nom_categorie = $_POST['nom_categorie'];
  $NvelleCATE->CreateCate($nom_categorie);
}

else if($_GET['send'] === 'del') {
  $id_categorie = $_GET['id'];
  $NvelleCATE->DeleCate($id_categorie);

  header("location:./displaytablecategorie.php");
}

else if(isset($_POST['update'])){
  $nom_categorie = $_POST['nom_categorie'];
  $NvelleCATE->DeleCate($id_categorie);

  header("location:./displaytablecategorie.php");
}


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
  <h2>CATEGORIE Forms</h2>


  <form method="POST">
    <label for="lname">nom de la categorie:</label><br>
    <input type="text" name="nom_categorie" value=""><br><br>
    <input type="submit" name="submit" value="submit">
  </form>
  <h2>categorie table</h2>

  <table style="width:100%">
    <tr>
      <th>id_produit_type</th>
      <th>nom_categorie</th>
      <th>supprimer</th>
      <th>modifier</th>

    </tr>
    <?php $categories = new Type(); ?>

    <?php if ($categories->getidTypeproduct()) : ?>
      <?php foreach ($categories->getidTypeproduct() as $categorie) : ?>
        <tr>
          <td><?= $categorie["id_produit_type"] ?></td>
          <td><?= $categorie["nom_produit_type"]  ?></td>
          <td> <a href="../editer/editercategorie.php? id=<?= $categorie['id_produit_type']?>"><button>modifier</button></a> </td>
          <td><a href="displaytablecategorie.php? id=<?= $categorie['id_produit_type']?>&send=del" ><button>supprimer</button></a></td>


        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>


        </tr>


  </table>

</body>

</html>