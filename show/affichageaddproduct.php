<?php 
require_once("../includes/class.autoload.inc.php");

require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");


?>
<div class="home-content">
    <div class="box round first grid">
        <h2>Add New Product</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>

  <input type="text" name="productName" placeholder="Enter Product Name..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Categorie</label>
                    </td>
                    <td>
                        <select id="select" name="catId">
                            <option>choisir une categorie</option>
                            <option value="1">Category One</option>
                            <option value="2">Category Two</option>
                            <option value="3">Category Three</option>
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
                            <option value="2">Category Two</option>
                            <option value="3">Category Three</option>
                        </select>
                    </td>
                </tr>    

				<tr>
                    <td>
                        <label>choisir la coule</label>
                    </td>
                    <td>
                        <select id="select" name="brandId">
                            <option>Select Brand</option>
                            <option value="1">Brand One</option>
                            <option value="2">Brand Two</option>
                            <option value="3">Brand Three</option>
                        </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce"  name="body"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price"  placeholder="Enter Price..." class="medium" />
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
<h2>table produit</h2>

<table style="width:100%">
  <tr>
    <th>id_produit</th>
    <th>nom_produit</th>
    <th>description</th>
    <th>prix_produit</th>
    <th>id_categorie</th>
    <th>id_couleur</th>
    <th>id_sous_categorie</th>
    <th>images</th>
    <th>supprimer</th>
    <th>modifier</th>

  </tr>
  <?php $newproduit = new Produit(); ?>

  <?php if ($newproduit ->getProduit()) : ?>
    <?php foreach ($newproduit ->getProduit() as $produit) : ?>
      <tr>
      <th><?= $produit["id_produit"] ?></th>
    <th><?= $produit["nom_produit"] ?></th>
    <th><?= $produit["description"] ?></th>
    <th><?= $produit["prix_produit"] ?>€</th>
    <th><?= $produit["id_couleur"] ?></th>
    <th><?= $produit["id_produit"] ?></th>
    <th><?= $produit["id_sous_catégorie"] ?></th>
    <th><?= $produit["images"] ?></th>
    <td> <a href="displaytablecategorie.php? id=<?=$produit['id_produit']?>" > <button>supprimer</button></a> </td>
    <td> <a href="editerlacategorie.php? id=<?= $produit['id_produit']?>&send=del" > <button>modifier</button></a> </td>


      <?php endforeach; ?>
    <?php else : ?>
    <?php endif; ?>


      </tr>


</table>

</body>

</html>