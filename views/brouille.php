<?php


require_once("../includes/class.autoload.inc.php");

// require_once("../adminhtmlcss/slideadmin.php");
// require_once("../adminhtmlcss/barreadmin.php");
// require_once("../adminhtmlcss/footeradmin.php");




?>










<form action="/action_page.php">
  <label for="cars">Choix du categorie et la sou_categorie:</label>
  <select name="cars" id="cars">

    <optgroup selected="selected">un seul choix</optgroup>
    <?php $categories = new Categorie(); ?>

    <?php if ($categories->getCate()) : ?>
      <?php $sous_categories = new Souscategorie(); ?>
      <?php foreach ($categories->getCate() as $categorie) : ?>


        <?php $souscate = $sous_categories->Getid($categorie['id_categorie']);
        var_dump($souscate); ?>

        <optgroup name="<?= $categorie['id_categorie'] ?>" label="<?= $categorie['nom_categorie'] ?>">
          <?php foreach ($souscate as $categorie) : var_dump($categorie);?>
          <option name="<?= $categorie['id_sous_catégorie'] ?>"><?= $categorie['nom_sous_catégorie'] ?></option>


            </option>
          <?php endforeach; ?>
        </optgroup>
      <?php endforeach; ?>

  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
<?php else : ?>
<?php endif; ?>