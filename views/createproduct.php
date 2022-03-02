<?php
require_once("../includes/class.autoload.inc.php");

// require_once("../adminhtmlcss/slideadmin.php");
// require_once("../adminhtmlcss/barreadmin.php");
// require_once("../adminhtmlcss/footeradmin.php");





$monproduit = new Produit();
// $monproduit-> Createproduit($nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$images,$qte_stock);
// var_dump($monproduit);





if (isset($_POST['submit'])) {
        echo "porduit rajoute avec success petit loup";
    $nom_produit =$_POST['nom_produit'];
    $description_produit=$_POST['description_produit'];
    $prix_produit=$_POST['prix_produit'];
    $id_categorie=$_POST['id_categorie'];
    $id_sous_catégorie=$_POST['id_sous_catégorie'];
    $id_couleur=$_POST['id_couleur'];
    $id_produit_type=$_POST['id_produit_type'];
    $images=$_POST['images'];
    $qte_stock=$_POST['qte_stock'];
    $monproduit-> Createproduit($nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$images,$qte_stock);
    
}

// var_dump($_POST);

// var_dump($_POST);




?>
<div class="home-content">
    <div class="box round first grid">
        <h2>Rajouter un produit</h2>
        <div class="block">
            <form action="" method="post" enctype="multipart/form-data">
                <table class="form">

                    <tr>
                        <td>
                            <label>Nom de produit</label>
                        </td>
                        <td>

                            <input type="text" name="nom_produit" placeholder="Enter Product Name..." class="medium" />
                        </td>
                    </tr>
                    <!-- <tr>
                        <td><label for="pet-select">Choisir une categotrie et un sous categorie</label></td>
                        <td>
                            
                        <select name="id_categorie">

                        <optgroup selected="selected">un seul choix</optgroup>
                        <?php $categories = new Categorie(); ?>

                        <?php if ($categories->getCate()) : ?>
                        <?php $sous_categories = new Souscategorie(); ?>
                        <?php foreach ($categories->getCate() as $categorie) : ?>


                            <?php $souscate = $sous_categories->Getid($categorie['id_categorie']);
                            var_dump($souscate); ?>

                            <optgroup name="<?= $categorie['id_categorie'] ?>" label="<?= $categorie['nom_categorie'] ?>">
                            <?php foreach ($souscate as $categorie) : var_dump($categorie);?>
                            <option value="<?= $categorie['nom_sous_catégorie'] ?>" name="<?= $categorie['id_sous_catégorie'] ?>" ><?= $categorie['nom_sous_catégorie'] ?></option>


                                </option>
                            <?php endforeach; ?>
                            </optgroup>
                        <?php endforeach; ?>

                        </select>
                        <?php else : ?>
                        <?php endif; ?>           
                    </td>
                        
                    </tr> -->

                    <tr>
                        <td>
                        <label for="pet-select">Choisir une couleur</label>

                        </td>
                        <td>
                            
                            <select name="id_couleur" id="per1">
                                <option selected="selected">un seul choix</option>
                                <?php $couleur = new Couleur(); ?>

                                <?php if ($couleur->getCoul()) : ?>
                                    <?php foreach ($couleur->getCoul() as $coul) : ?>
                                        <option name="<?= $coul['id_couleur'] ?>"><?= $coul['nom_couleur'] ?></option>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        
                    </tr>

                    <tr>
                        <td>
                        <label for="pet-select">Choisir une couleur</label>

                        </td>
                        <td>
                            
                            <select name="id_couleur" id="per1">
                                <option selected="selected">un seul choix</option>
                                <?php $couleur = new Couleur(); ?>

                                <?php if ($couleur->getCoul()) : ?>
                                    <?php foreach ($couleur->getCoul() as $coul) : ?>
                                        <option name="<?= $coul['id_couleur'] ?>"><?= $coul['nom_couleur'] ?></option>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        
                    </tr>

                    <tr>
                        <td>
                        <label for="pet-select">Choisir une couleur</label>

                        </td>
                        <td>
                            
                            <select name="id_couleur" id="per1">
                                <option selected="selected">un seul choix</option>
                                <?php $couleur = new Couleur(); ?>

                                <?php if ($couleur->getCoul()) : ?>
                                    <?php foreach ($couleur->getCoul() as $coul) : ?>
                                        <option name="<?= $coul['id_couleur'] ?>"><?= $coul['nom_couleur'] ?></option>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        
                    </tr>
                    </td>
                        
                    </tr> -->
                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Description</label>
                        </td>
                        <td>
                            <textarea class="tinymce" name="description_produit"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Prix produit</label>
                        </td>
                        <td>
                            <input type="text" name="prix_produit" placeholder="Entrer un prix..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Upload Image</label>
                        </td>
                        <td>
                            <input type="file" name="images" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Product Type</label>
                        </td>
                        <td>
                        <select name="id_produit_type" id="per1">
                                <option selected="selected">un seul choix</option>
                                <?php $categories = new Type(); ?>
                                <?php if ($categories->getidTypeproduct()) : ?>
                                
                                    <?php foreach ($categories->getidTypeproduct() as $categorie) : ?>

                                        <option value="<?= $categorie['id_produit_type'] ?>"><?= $categorie['nom_produit_type'] ?></option>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Quantité de stock</label>
                        </td>
                        <td>

                            <input type="text" name="qte_stock" placeholder="le stock..." class="medium" />
                        </td>
                    </tr>
                    <tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>


</table>
</body>
</html>