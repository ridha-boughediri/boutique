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
<?php foreach ($categories->getCate() as $categorie) : ?>
<option value=""></option>
    <optgroup name="<?= $categorie['id_categorie'] ?>" label="<?= $categorie['nom_categorie'] ?>">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
    </optgroup>
    <?php endforeach; ?>
   
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
                                <?php else : ?>
                                <?php endif; ?>
