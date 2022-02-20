<?php
require_once("../includes/class.autoload.inc.php");

require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");

// $list= new Souscategorie();
// $NvelleCoul = new Souscategorie();
// echo " <br>";
$souscategorie = new Souscategorie();
// print_r($souscategorie->getCateSou());



 var_dump($_POST);

if (isset($_POST['submit'])) {
  $id_categorie = $_POST['id'];
  $nom_sous_catégorie = $_POST['nom_sous_catégorie'];
  $souscategorie->CreateCateSOU($id_categorie,$nom_sous_catégorie);
} 

var_dump($_GET);
if ($_GET['send'] === 'del') {
  $id_sous_catégorie = $_GET['id'];
  $souscategorie->DeleSubCate($id_sous_catégorie);

  header("location:./displaysubcategorie.php");
 }

 
 var_dump($_GET);





?>


  <h2>categorie table</h2>

  <table style="width:100%">
    <tr>
      <th>id_categorie</th>
      <th>id_sous_categorie</th>
      <th>nom_sous_categorie</th>
      <th>supprimer</th>
      <th>modifier</th>

    </tr>
    <?php $categories = new Souscategorie(); ?>

    <?php if ($categories->getCateSou()) : ?>
      <?php foreach ($categories->getCateSou() as $categorie) : ?>
        <tr>
          <td><?= $categorie["id_categorie"] ?></td>
          <td><?= $categorie["id_sous_catégorie"]  ?></td>
          <td><?= $categorie["nom_sous_catégorie"]  ?></td>
          <td> <a href="../editer/editersubcategorie.php? id=<?= $categorie['id_sous_catégorie'] ?>"><button>modifier</button></a></td>
          <td><a href="displaysubcategorie.php? id=<?= $categorie['id_sous_catégorie'] ?> &send=del"><button>supprimer</button></a></td>


        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>


        </tr>


  </table>

  <form method="POST">
  <label for="pet-select">Choisir une categotrie</label>
  <select name="id_categorie" id="per1">
    <option selected="selected">un seul choix</option>
    <?php $categories = new Categorie(); ?>

<?php if ($categories->getCate()) : ?>
  <?php foreach ($categories->getCate() as $categorie) : ?>
        <option value="<?=  $categorie['id_categorie'] ?>"><?=  $categorie['nom_categorie'] ?></option>

  <?php endforeach; ?>
      <?php else : ?>
    <?php endif; ?>
  </select>
    <label for="lname">nom de la sous_categorie:</label><br>
    <input type="text" name="nom_sous_catégorie" value=""><br><br>
    <input type="submit" name="submit" value="submit">
  </form>
