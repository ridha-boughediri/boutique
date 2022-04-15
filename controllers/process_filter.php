<?php
session_start();
extract($_POST);

require("../vendor/autoload.php");


$categorie = new Categorie();
$couleur = new Couleur();
$database = new DataBase();
$panier = new Panier();
$monproduit = new Produit();
$souscategorie = new Souscategorie();
$type = new Type();
$user = new User();

$idcolor = $_POST['idcolor'];


$idcate = explode('-', $_POST['idcate']);



$prodbycateandsouscate = $monproduit->getProduitByCategorieAndSousCategorieAndColors($idcolor, $idcate[0], $idcate[1]);
$sizeprod = count($prodbycateandsouscate);

?>



<?php if ($sizeprod == 0) { ?>
    <div class="slick-cards">
        <p>Aucun Produit Trouvée</p>
    </div>
<?php } else { ?>
    <div class="slick-cards">
        <?php foreach ($prodbycateandsouscate as $allproduit) { ?>
            <div class="slick-card" data-id="<?= $allproduit["id_produit"] ?>">
                <img src="views/img/admin/<?= $allproduit["file_images"] ?>" alt="" class="slick-img">
                <div class="slick-card-infos">
                    <h3><?= $allproduit["nom_produit"] ?></h3>
                    <p><?= $allproduit["prix_produit"] ?>€</p>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>