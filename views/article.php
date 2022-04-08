
<?php


require_once("../includes/class.autoload.inc.php");



$newproduit = new Produit();

var_dump($newproduit ->displayproduitbyID()); 



?>
<main>
    <div class="home-carousel">


  <!-- <?php if ($newproduit ->displayproduitbyID()) : ?>
    <?php foreach ($newproduit ->displayproduitbyID() as $produit) : ?>
    
  
    
 





        <div class="slick-slider">
            <div class="slick-slide">
                <img src="views/img/backnike.png" alt="" class="slick-img">
            </div>
            <div class="slick-slide">
                <img src="views/img/---.jpg" alt="" class="slick-img">
            </div>
            <div class="slick-slide">
                <img src="views/img/---.jpg" alt="" class="slick-img">
            </div>
        </div>
    </div>
    <div class="best-carousel">
        <h1 class="title-main">Best Seller</h1>
        <div class="slick-cards">
            <div class="slick-card">
             
                <img src='../views/img/admin/<?=$produit["file_images"] ?>' alt="" class="slick-img>
                <div class="slick-card-infos">
                    <h3></h3>
                    <p><?php $produit["nom_produit"] ?></p>
                </div>

            </div>

           
            
            </div>
        </div>
    </div>
</main>



<?php endforeach; ?>
    <?php else : ?>
    <?php endif; ?> -->