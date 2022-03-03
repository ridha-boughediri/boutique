<?php
require_once("../includes/class.autoload.inc.php");



$monproduit = new Produit();


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['submit'])) {


        echo "produit rajoute avec success petit loup";
        $nom_produit = filter_input(INPUT_POST,'nom_produit' , FILTER_SANITIZE_STRING);
        $description_produit = filter_input(INPUT_POST,'description_produit ' , FILTER_SANITIZE_STRING);
        $prix_produit = filter_input(INPUT_POST,'prix_produit' , FILTER_SANITIZE_STRING);
        $id_categorie = filter_input(INPUT_POST,'id_categorie' , FILTER_SANITIZE_STRING);

        $id_sous_catégorie = filter_input(INPUT_POST,'id_sous_catégorie' , FILTER_SANITIZE_STRING);
        $id_couleur = filter_input(INPUT_POST,'id_couleur' , FILTER_SANITIZE_STRING);



      

     
        

        $image = $_FILES['image'];

        $img_name = $image['name'];
        $img_tmp_name = $image['tmp_name'];
        $img_size = $image['size'];


    

            if(! empty($img_name)) { 
                $img_extension = strtolower(explode('.', $img_name)[1]); // gfdgdfg.jpg

                $allowed_extensions = array('jpg' , 'png' , 'jpeg');

                if(! in_array($img_extension, $allowed_extensions)) {
                    $error_msg = "Allowed Extensions are jpg, png and jpeg ";
                }else if( $img_size > 1000000) {
                    $error_msg = "Image size must be less than 1M";
                }
            }
        }

            if( insert_post($datetime, $title, $content, $author, $excerpt, $img_name, $category, $tags) ) {
                if(! empty($img_name)) {
                    $new_path = "uploads/posts/".$img_name;
                    move_uploaded_file( $img_tmp_name, $new_path);
                }
         
        }
    
    
        $test = $monproduit->insert($nom_produit, $description_produit, $prix_produit, $id_categorie, $id_sous_catégorie, $id_couleur, $id_produit_type, $images, $qte_stock);
    }

       
    





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
                    <tr>
                        <td>
                            <label for="pet-select">Choisir une categorie</label>

                        </td>
                        <td>

                            <select name="id_categorie" id="per1">
                                <option selected="selected">un seul choix</option>
                                <?php $couleur = new Categorie(); ?>

                                <?php if ($couleur->getCate()) : ?>
                                    <?php foreach ($couleur->getCate() as $coul) : ?>
                                        <option name="<?= $coul['id_categorie'] ?>"><?= $coul['nom_categorie'] ?></option>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </select>
                        </td>

                    </tr>
                    
                    <tr>
                        <td><label for="pet-select">Choisir une  sous categorie</label></td>
                        <td>

                            <select name="id_sous_catégorie">

                                <optgroup selected="selected">un seul choix</optgroup>
                                <?php $categories = new Categorie(); ?>

                                <?php if ($categories->getCate()) : ?>
                                    <?php $sous_categories = new Souscategorie(); ?>
                                    <?php foreach ($categories->getCate() as $categorie) : ?>


                                        <?php $souscate = $sous_categories->Getid($categorie['id_categorie']);
                                        var_dump($souscate); ?>

                                        <optgroup name="<?= $categorie['id_categorie'] ?>" label="<?= $categorie['nom_categorie'] ?>">
                                            <?php foreach ($souscate as $categorie) : var_dump($categorie); ?>
                                                <option value="<?= $categorie['nom_sous_catégorie'] ?>" name="<?= $categorie['id_sous_catégorie'] ?>"><?= $categorie['nom_sous_catégorie'] ?></option>


                                                </option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    <?php endforeach; ?>

                            </select>
                        <?php else : ?>
                        <?php endif; ?>
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

                    </tr>
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