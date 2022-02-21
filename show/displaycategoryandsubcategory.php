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
<option value="></option>
    <optgroup value="<?= $categorie['id_categorie'] ?>" label="<?= $categorie['nom_categorie'] ?>">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
    </optgroup>
    <optgroup label="German Cars">
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </optgroup>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>



<select name="id_categorie" id="per1">
                                <option selected="selected">un seul choix</option>
                                <?php $categories = new Categorie(); ?>

                                <?php if ($categories->getCate()) : ?>
                                    <?php foreach ($categories->getCate() as $categorie) : ?>
                                        <option value="<?= $categorie['id_categorie'] ?>"><?= $categorie['nom_categorie'] ?></option>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </select>