<?php


require_once("../classes/dataBase.class.php");
require_once("../classes/categorie.class.php");
require_once("../classes/couleur.class.php");
require_once("../classes/souscategorie.class.php");
require_once("../classes/produit.class.php");

require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");
$NvelleCoul = new Couleur();
echo " <br>";


if (isset($_POST['submit'])) {

  $nom_couleur = $_POST['nom_couleur'];
  $NvelleCoul->CreateColor($nom_couleur);
}



else if($_GET['send'] === 'del') {
  $id_couleur = $_GET['id'];
  $NvelleCoul-> DeleCoul($id_couleur);

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




<h2>rajouter une couleur</h2>


<form method="POST">
  <label for="lname">nom de la couleur:</label><br>
  <input type="text" name="nom_couleur" value=""><br><br>
  <input type="submit" name="submit" value="submit">
</form>


    <h2>couleur table</h2>

    <table style="width:100%">
        <tr>
        
            <th>id_couleur</th>
            <th>nom_couleur</th>
            <th>modifier</th>
            <th>supprimer</th>
            

            <?php  $couleurs= new Couleur();?>

<?php if($couleurs->getCoul()) : ?>
<?php foreach($couleurs->getCoul()as $couleur): ?>
  <tr>
    <td><?=  $couleur["id_couleur"] ?></td>
    <td><?=  $couleur["nom_couleur"]  ?></td>
   
    <td> <a href="../editer/editerlacouleur.php? id=<?= $couleur['id_couleur']?>"><button>modifier</button></a> </td>
    <td><a href="displaytablecouleur.php? id=<?= $couleur['id_couleur']?>&send=del" ><button>supprimer</button></a></td>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>
</body>

</html>