<?php
require_once("../includes/class.autoload.inc.php");

require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");


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

                            <input type="text" name="productName" placeholder="Enter Product Name..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="pet-select">Choisir une categotrie</label></td>
                        <td>
                            
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
                        </td>
                        
                    </tr>

                    <tr>
                        <td>
                            <label>Sous-categorie</label>
                        </td>
                        <td>
                            <select id="select" name="catId">
                                <option>choisir une sous categorie</option>
                                <option value="1">Category One</option>

                            </select>
                        </td>

                    <tr>
                        <td>
                        <label for="pet-select">Choisir une couleur</label>

                        </td>
                        <td>
                            
                            <select name="id_categorie" id="per1">
                                <option selected="selected">un seul choix</option>
                                <?php $couleur = new Couleur(); ?>

                                <?php if ($couleur->getCoul()) : ?>
                                    <?php foreach ($couleur->getCoul() as $coul) : ?>
                                        <option value="<?= $coul['id_couleur'] ?>"><?= $coul['nom_couleur'] ?></option>

                                    <?php endforeach; ?>
                                <?php else : ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        
                    </tr>
                    <!-- <tr>
                        <td><label for="pet-select">Choisir une categotrie</label></td>
                        <td>
                            
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
                        </td>
                        
                    </tr> -->
                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Description</label>
                        </td>
                        <td>
                            <textarea class="tinymce" name="body"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Price</label>
                        </td>
                        <td>
                            <input type="text" name="price" placeholder="Enter Price..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Upload Image</label>
                        </td>
                        <td>
                            <input type="file" name="image" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Product Type</label>
                        </td>
                        <td>
                            <select id="select" name="type">
                                <option>Select Type</option>
                                <option value="0">Featured</option>
                                <option value="1">General</option>
                            </select>
                        </td>
                    </tr>

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