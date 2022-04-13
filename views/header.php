<?php
if (isset($_SESSION['id'])) {
    $headermessage = 'Bon retour parmi nous ' . $userinfos['firstname'] . ' ' . $userinfos['lastname'];
    if ($params[0] == 'admin' & $userinfos['admin'] != 1) {
        header("Refresh:0; url= .");
    }

    $panierinfos = $panier->getAllCartById();
    $produitinfos = $panier->getAllProduitCartById();
    $paniercount = $panier->countAllCartById();
} else {
    $headermessage = 'BIENVENUE SUR LA HAVANE';

    if ($params[0] == 'admin' && !isset($_SESSION['id'])) {
        header("Refresh:0; url= .");
    }
}

?>
<header>
    <div class="bar-top">
        <p class="bar-top-text"><?= $headermessage ?></p>
    </div>
    <div class="searchandcart">
        <div class="search-container">
            <button class="search-btn">
                <img src="views/img/search.png" class="search-logo" alt="">
            </button>
            <input type="text" id="search-place" class="search-input" placeholder="Rechercher des tongs, des sandales...">
        </div>
        <div class="logo-container">
            <img src="views/img/logo.png" class="logo" alt="">
        </div>
        <div class="cart-container">

            <nav class="menu">
                <ol>
                    <?php if (isset($_SESSION['id'])) { ?>
                        <div class="dropdown">
                            <button class="dropbtn" id="drop-img-avatar"><img src="views/img/avatar/<?= $userinfos['avatar']; ?>" class="avatar-img" alt=""></button>
                            <div class="dropdown-content">
                                <h3 class="account-container-name"><?php echo $userinfos['firstname'] . ' ' .  $userinfos['lastname']; ?></h3>
                                <a class="btn-link myaccount">Mon profil</a>
                                <a class="btn-link account-container-deco" style="color: red;">Deconnexion</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn bag-container">
                                <img src="views/img/panier.png" class="search-logo" alt="">
                                <p class="nbcart"><?= $paniercount ?></p>
                            </button>
                            <div class="dropdown-content cart-panier">
                                <?php if ($paniercount == 0) { ?>
                                    <a class="btn-link">Panier Vide</a>
                                <?php } else { ?>
                                    <?php foreach ($produitinfos as $produitinfo) { ?>

                                        <?php
                                        $getproduit = $database->connect()->prepare("SELECT * FROM produit WHERE id_produit = ?");
                                        $getproduit->execute(array($produitinfo['id_produit']));
                                        $produitinfox = $getproduit->fetch();
                                        ?>

                                        <div class="container-carto">
                                            <div class="img-cart-prod">
                                                <img src="views/img/admin/<?= $produitinfox['file_images'] ?>" class="img-produit-carto">
                                            </div>
                                            <div class="text-cart"><?= $produitinfox['nom_produit'] ?></div>
                                            <div class="img-cart-bin deletecart" data-id="<?= $produitinfox['id_produit'] ?>">
                                                <img src="views/img/bin.png" class="img-produit-bin">
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                <button type="button" class="button-seven cartto">Voir le Panier</button>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn bag-container"><img src="views/img/would.png" class="search-logo" alt=""></button>
                            <div class="dropdown-content cart-wish">
                                <a class="btn-link">Wishlist Vide</a>
                                <button type="button" class="button-seven">Voir la Wishlist</button>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="views/img/account.png" class="search-logo" alt=""></button>
                            <div class="dropdown-content">
                                <h3 class="account-container-name">Mon compte</h3>
                                <a class="btn-link register">Inscription</a>
                                <a class="btn-link connect">Connexion</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="views/img/panier.png" class="search-logo" alt=""></button>
                            <div class="dropdown-content cart-panier">
                                <h3 class="account-container-name">Mon Panier</h3>
                                <a class="btn-link">Veuillez vous connectez pour acceder a ce contenu</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="views/img/would.png" class="search-logo" alt=""></button>
                            <div class="dropdown-content cart-wish">
                                <h3 class="account-container-name">Ma liste d'envie</h3>
                                <a class="btn-link">Veuillez vous connectez pour acceder a ce contenu</a>
                            </div>
                        </div>
                    <?php } ?>
                </ol>
            </nav>
        </div>
    </div>

    <div class="bar-bottom">

        <?php $comptcate = 0; ?>
        <?php while ($getallcateinfos = $getallcate->fetch()) { ?>


            <div class="content-drop">
                <button type="button" class="button-five dropy" data-btncate="<?= $comptcate; ?>"><?= $getallcateinfos['nom_categorie']; ?></button>
                <div class="downcate dropy" data-divcate="<?= $comptcate; ?>">

                    <?php $getsouscateid = $souscategorie->getCateSouId($getallcateinfos['id_categorie']); ?>
                    <?php while ($getsouscateidinfos = $getsouscateid->fetch()) { ?>
                        <button type="button" class="button-five"><?= $getsouscateidinfos['nom_sous_catégorie']; ?></button>
                        <!-- <a href="filtresouscate?id=<?= $allproduit['id__sous_catégorie'] ?>"> -->
                    <?php } ?>

                </div>
            </div>

            <?php $comptcate++; ?>
        <?php } ?>

    </div>

</header>