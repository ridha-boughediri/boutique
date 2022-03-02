<<<<<<< Updated upstream
<!-- <div class="header-promotion-container">
    <div class="header-promotion">
        <p class="header-paragraph">
            <a href="" class="header-welcome">BIENVENUE SUR LA BOUTIQUE</a>
        </p>
    </div>
</div>

<header>
=======
<?php if (isset($_SESSION['id'])) {
    $userinfos = $user->getAllInfos($_SESSION['id']);
} ?>
<header>
    <div class="bar-top">
        <p class="bar-top-text">BIENVENUE SUR LA BOUTIQUE</p>
    </div>
    <div class="searchandcart">
        <div class="search-container">
            <button class="search-btn">
                <img src="./img/search.png" class="search-logo" alt="">
            </button>
            <input type="text" name="" class="search-input" placeholder="Rechercher des tongs, des sandales...">
        </div>
        <div class="cart-container">
            <?php if (isset($_SESSION['id'])) { ?>
                <button class="search-btn account">
                    <img src="./img/avatar/<?php echo $userinfos['avatar'];?>" class="avatar-img" alt="">
                </button>
                <div class="account-container">
                    <h3 class="account-container-title">Mon Compte</h3>
                    <h6 class="account-container-name"><?php echo $userinfos['firstname'] . ' ' .  $userinfos['lastname'];?></h6>
                    <div class="btn-acc-cont">
                        <button class="button-third myaccount">Votre compte</button>
                        <button class="button-third">...</button>
                        <button class="button-third">...</button>
                        <button class="button-third">...</button>
                    </div>
                    <button type="button" class="account-container-deco btn-deco" title="Déconnexion"></button>
                </div>
            <?php } else { ?>
                <button class="search-btn account">
                    <img src="./img/account.png" class="search-logo" alt="">
                </button>

                <div class="account-container">
                    <h3 class="account-container-title">Mon Compte</h3>
                    <div class="btn-acc-cont">
                        <button class="button-first connect">CONNEXION</button>
                        <button class="button-secondary register">INSCRIPTION</button>
                    </div>
                    <button type="button" class="account-container-close btn-close"></button>
                </div>
            <?php } ?>

            <button class="search-btn bag">
                <img src="./img/animated_cart.gif" class="search-logo" alt="">
                <p class="nbcart">0</p>
            </button>
            <div class="bag-container">
                <h3 class="account-container-title">Mon Panier</h3>
                <div class="btn-acc-cont">
                    <p>Panier Vide</p>
                </div>
                <button type="button" class="bag-container-close btn-close"></button>
            </div>
        </div>
    </div>
    <div class="logo-container">
        <img src="./img/logo.png" class="logo" alt="">
    </div>
>>>>>>> Stashed changes
    <nav class="menu">
        <ol>
            <div class="dropdown">
                <button class="dropbtn">Nos Catégories</button>
                <div class="dropdown-content">
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Femme</button>
                <div class="dropdown-content">
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Homme</button>
                <div class="dropdown-content">
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Enfants</button>
                <div class="dropdown-content">
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                    <a class="btnlinko" href="">.......</a>
                </div>
            </div>
        </ol>
    </nav>

    <div class="block-logo">
        <img src="./img/logo.png" alt="">
    </div>

    <nav class="menu">
        <ol>
            <div class="search-container">
                <button class="search-btn"><img src="./img/search.png" class="search-logo" alt=""></button>
                <input type="text" name="" class="search-input" placeholder="Rechercher des tongs, des sandales...">

            </div>
            <div class="search-container cart-container">
                <button class="search-btn acc hovac">
                    <img src="./img/account.png" class="search-logo" alt="">
                </button>
                <div class="user-panel hovac">
                    <div class="user-panel-container">
                        <h3 class="user-panel-title">Mon compte</h3>
                        <div class="user-links">
                            <div class="user-link">
                                <a class="user-login" href="" title="Aller à : Connexion">Connexion</a>
                            </div>
                            <div class="user-link">
                                <a class="user-register" href="" title="Aller à : S'enregistrer">S'enregistrer</a>
                            </div>
                            <div class="user-link">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline trackmyorder-icon" width="20" height="22" viewBox="0 0 20 22">
                                    <path fill="#000" fill-rule="evenodd" d="M13.072 8.553l-2.83 1.404L2.87 6.271 5.7 4.867l7.372 3.686zM7.914 3.771l2.328-1.186 7.372 3.686-2.327 1.163-7.373-3.663zm2.616 6.683l2.763-1.37v3.602c0 .083.038.19.122.242a.208.208 0 0 0 .142.046c.03 0 .087 0 .142-.044l1.642-.881c.052-.026.139-.093.139-.252V7.98l2.475-1.226v9.776l-7.425 3.747v-9.822zm3.316 1.742v-3.4l1.081-.551v3.36l-1.081.59zM6.328 4.563l.959-.488 7.372 3.686-.958.478-7.373-3.676zm3.65 5.89v9.823l-7.45-3.771V6.729l7.45 3.725zm8.53-4.327h-.048l-.012-.012-.048-.048-8.033-4.036a.275.275 0 0 0-.252 0l-4.47 2.248a.252.252 0 0 0-.172.098l-3.32 1.66a.144.144 0 0 0-.087.067H2v10.572c0 .164.097.231.162.251L10.14 21h.153l8.026-4.073a.28.28 0 0 0 .163-.252V6.348a.127.127 0 0 0 .04-.093l-.016-.129z"></path>
                                </svg>
                                <a class="user-links-item" href="" title="Aller à : Suivre ma Commande">Suivre ma Commande</a>
                            </div>
                            <div class="user-link">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline wishlist-icon" width="36" height="36" viewBox="0 0 36 36">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#FFF" stroke="#000" d="M35.49 18.245c0 9.524-7.72 17.245-17.245 17.245C8.721 35.49 1 27.769 1 18.245 1 8.72 8.721 1 18.245 1 27.77 1 35.49 8.721 35.49 18.245"></path>
                                        <path fill="#000" stroke="#FFF" stroke-width=".75" d="M13.428 11.23a4.896 4.896 0 0 0-4.89 4.89c0 .892.242 1.763.7 2.521 2.127 3.475 7.604 7.599 8.981 8.605 2.48-1.798 7.144-5.604 8.975-8.595a4.892 4.892 0 0 0-4.185-7.42c-1.54 0-3.008.737-3.926 1.973l-.865 1.164-.864-1.164a4.912 4.912 0 0 0-3.926-1.973zm4.48 16.24l-.002.001.002-.002zm.324 2.05h-.058a1.614 1.614 0 0 1-.893-.294c-.74-.526-7.306-5.255-9.875-9.45a7.06 7.06 0 0 1-1.021-3.655 7.052 7.052 0 0 1 7.043-7.044c1.784 0 3.5.686 4.79 1.88a7.077 7.077 0 0 1 4.79-1.88c3.884 0 7.045 3.16 7.045 7.044a7.036 7.036 0 0 1-1.009 3.633c-2.63 4.297-9.594 9.263-9.89 9.472a1.58 1.58 0 0 1-.902.294h-.02z"></path>
                                    </g>
                                </svg>
                                <a class="user-links-item" href="" title="Aller à : Ma Liste de souhaits">Ma Liste de souhaits</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="search-btn cart hovbtncart">
                    <img src="./img/panier.png" class="search-logo" alt="">
                    <p class="nbcart">0</p>
                </button>
                <div class="cart-panel hovcart hovbtncart">
                    <h3 class="user-panel-title">Mon panier </h3>
                </div>
            </div>

        </ol>
    </nav>
</header> -->

<div id="headerPromotionContainer" class="header-promotion--container">
    <div id="header-promo-slider" class="header-promotion slick-initialized slick-initialized-medium-large slick-slider">
        <div class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 16291px; transform: translate3d(-5924px, 0px, 0px);">
                <div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><strong><a href="https://havaianas-fr.connect.studentbeans.com/fr" tabindex="-1">Remise étudiante -15%. <u>En savoir plus</u></a></strong></p>
                    </div>
                </div>
                <div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><u><span style="font-size:12px;"><strong><a href="https://www.havaianas-store.com/fr/nouvelle-collection" tabindex="-1">Aperçu de la nouvelle collection PE 2022</a></strong></span></u></p>
                    </div>
                </div>
                <div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><span style="font-size:12px;"><strong>Envoi offert dès 40€</strong></span></p>
                    </div>
                </div>
                <div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><u><strong><a href="https://www.havaianas-store.com/fr/outlet" tabindex="-1">OUTLET jusqu'à 50% de réduction</a></strong></u><strong><span style="font-size:12px;"></span></strong></p>
                    </div>
                </div>
                <div class="slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" style="width: 1481px;">
                    <div>
                        <p style="width: 100%; display: inline-block;"><strong><span style="font-size:12px;">Achète en ligne et récupère en magasin</span></strong></p>
                    </div>
                </div>
                <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><strong><a href="https://havaianas-fr.connect.studentbeans.com/fr" tabindex="-1">Remise étudiante -15%. <u>En savoir plus</u></a></strong></p>
                    </div>
                </div>
                <div class="slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><u><span style="font-size:12px;"><strong><a href="https://www.havaianas-store.com/fr/nouvelle-collection" tabindex="-1">Aperçu de la nouvelle collection PE 2022</a></strong></span></u></p>
                    </div>
                </div>
                <div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><span style="font-size:12px;"><strong>Envoi offert dès 40€</strong></span></p>
                    </div>
                </div>
                <div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><u><strong><a href="https://www.havaianas-store.com/fr/outlet" tabindex="-1">OUTLET jusqu'à 50% de réduction</a></strong></u><strong><span style="font-size:12px;"></span></strong></p>
                    </div>
                </div>
                <div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><strong><span style="font-size:12px;">Achète en ligne et récupère en magasin</span></strong></p>
                    </div>
                </div>
                <div class="slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 1481px;" tabindex="-1">
                    <div>
                        <p style="width: 100%; display: inline-block;"><strong><a href="https://havaianas-fr.connect.studentbeans.com/fr" tabindex="-1">Remise étudiante -15%. <u>En savoir plus</u></a></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="show-for-medium help-link--container">
        <a class="help-link" href="/fr/help">
            <span>Besoin d'aide ?</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline headerhelp-icon" width="26" height="20" viewBox="0 0 26 20">
                <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" d="M21.987 9.605c.01-.139.019-.278.019-.42 0-3.957-4.487-7.175-10.004-7.175C6.487 2.01 2 5.227 2 9.184c0 3.956 4.486 7.174 10.002 7.174a13.212 13.212 0 0 0 4.28-.69.29.29 0 0 1 .27.043.301.301 0 0 1 .117.25C16.65 16.536 15.161 19 15.161 19c3.523-1.343 6.801-5.717 6.844-9.263a.303.303 0 0 1-.018-.132z"></path>
            </svg>
        </a>
    </div>
</div>


<div class="top-banner" role="banner">
    <header id="header" class="header">
        <div id="menu-trigger" class="menu-trigger show-for-small-only"></div>
        <nav id="navigation" class="navigation">
            <div class="navigation-titlebar show-for-small-only">
                <div id="navigation-close" class="close-button"></div>
            </div>
            <ul class="vertical medium-horizontal menu level-1 dropdown" data-responsive-menu="accordion medium-dropdown" role="menubar" data-e="7p2slz-e" data-mutate="8u3hxs-responsive-menu">
                <li class="level-1-item js-hover-event  is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-label="
Nouvelle Collection
">
                    <a class="has-sub-menu level-1-link" href="https://www.havaianas-store.com/fr/nouvelle-collection">
                        Nouvelle Collection
                    </a>
                    <ul class="vertical menu header-sticked submenu is-dropdown-submenu first-sub" data-submenu="" role="menu">
                        <div class="grid-x submenu-level-2">
                            <div class="grid-x medium-8 small-12">
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/nouvelle-collection/femme" class="nav-category-title level-2-link">
                                        Femme
                                    </a>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/nouvelle-collection/homme" class="nav-category-title level-2-link">
                                        Homme
                                    </a>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/nouvelle-collection/enfants" class="nav-category-title level-2-link">
                                        Enfants
                                    </a>
                                </li>
                            </div>
                            <div class="grid-x medium-3 hide-for-small-only">
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="level-1-item js-hover-event  is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-label="
Femme
">
                    <a class="has-sub-menu level-1-link" href="https://www.havaianas-store.com/fr/femme">
                        Femme
                    </a>
                    <ul class="vertical menu header-sticked submenu is-dropdown-submenu first-sub" data-submenu="" role="menu">
                        <div class="grid-x submenu-level-2">
                            <div class="grid-x medium-8 small-12">
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/femme-all" class="nav-category-title level-2-link">
                                        Articles pour Femme
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/femme/nouveautes" class="level-3-link">
                                            Nouveautés
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/femme/tongs" class="level-3-link">
                                            Tongs
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/femme/sandales" class="level-3-link">
                                            Sandales
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/femme/espadrilles" class="level-3-link">
                                            Espadrilles
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/articles-pour-femme/mules-velours" class="level-3-link">
                                            Mules Velours
                                        </a>
                                    </div>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/femme/beachwear" class="nav-category-title level-2-link">
                                        Beachwear
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/beachwear/surv%C3%AAtements-femme" class="level-3-link">
                                            Survêtements
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/beachwear/bikinis" class="level-3-link">
                                            Bikinis
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/women%27s/t-shirts" class="level-3-link">
                                            T-shirts
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/beachwear/shorts-et-pantalons" class="level-3-link">
                                            Shorts et Pantalons
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/beachwear/robes" class="level-3-link">
                                            Robes
                                        </a>
                                    </div>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/accessoires-femme" class="nav-category-title level-2-link">
                                        Accessoires
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/accessoires/personalization-2" class="level-3-link">
                                            Personalization
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires/chaussettes-2" class="level-3-link">
                                            Chaussettes
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires/casquettes-2" class="level-3-link">
                                            Casquettes
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-femme/sacs" class="level-3-link">
                                            Sacs et pochettes de plage
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-femme/lunettes-de-soleil" class="level-3-link">
                                            Lunettes de soleil femme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-femme/porte-cles" class="level-3-link">
                                            Porte-clés
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-femme/serviette-de-plage" class="level-3-link">
                                            Serviette de plage femme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-femme/matelas-gonflables" class="level-3-link">
                                            Matelas gonflables
                                        </a>
                                    </div>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/wedding-2" class="nav-category-title level-2-link">
                                        Mariage
                                    </a>
                                </li>
                            </div>
                            <div class="grid-x medium-3 hide-for-small-only">
                                <div class="navigation-banner submenu-level-2-item"><img data-lazy-src="/on/demandware.static/-/Sites-siteCatalog_Havaianas/default/dw45949758/Women/img-menu-dropdown-women.jpg" alt="Havaianas Women"></div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="level-1-item js-hover-event  is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-label="
Homme
">
                    <a class="has-sub-menu level-1-link" href="https://www.havaianas-store.com/fr/homme">
                        Homme
                    </a>
                    <ul class="vertical menu header-sticked submenu is-dropdown-submenu first-sub" data-submenu="" role="menu">
                        <div class="grid-x submenu-level-2">
                            <div class="grid-x medium-8 small-12">
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/homme-all" class="nav-category-title level-2-link">
                                        Articles pour Homme
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/homme/nouveautes" class="level-3-link">
                                            Nouveautés homme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/homme/tongs" class="level-3-link">
                                            Tongs homme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/homme/espadrilles" class="level-3-link">
                                            Espadrilles homme
                                        </a>
                                    </div>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/homme/beachwear" class="nav-category-title level-2-link">
                                        Beachwear
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/beachwear/surv%C3%AAtements-homme" class="level-3-link">
                                            Survêtements
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/beachwear/t-shirts-homme" class="level-3-link">
                                            T-shirts homme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/beachwear/shorts-homme" class="level-3-link">
                                            Shorts homme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/beachwear/maillots-homme" class="level-3-link">
                                            Maillots homme
                                        </a>
                                    </div>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/accessoires-homme" class="nav-category-title level-2-link">
                                        Accessoires
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/accessoires/personalization-1" class="level-3-link">
                                            Personalization
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires/casquettes-1" class="level-3-link">
                                            Casquettes
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires/chaussettes-1" class="level-3-link">
                                            Chaussettes
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-homme/sacs" class="level-3-link">
                                            Sacs homme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-homme/lunettes-de-soleil" class="level-3-link">
                                            Lunettes de soleil homme
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-homme/porte-cles" class="level-3-link">
                                            Porte-clés
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-homme/serviette-de-plage" class="level-3-link">
                                            Serviette de plage
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/accessoires-homme/matelas-gonflables" class="level-3-link">
                                            Matelas gonflables
                                        </a>
                                    </div>
                                </li>
                            </div>
                            <div class="grid-x medium-3 hide-for-small-only">
                                <div class="navigation-banner submenu-level-2-item"><img data-lazy-src="/on/demandware.static/-/Sites-siteCatalog_Havaianas/default/dw4638eb15/Men/men.jpg" alt="Havaianas Homme"></div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="level-1-item js-hover-event  is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-label="
Enfants
">
                    <a class="has-sub-menu level-1-link" href="https://www.havaianas-store.com/fr/enfants">
                        Enfants
                    </a>
                    <ul class="vertical menu header-sticked submenu is-dropdown-submenu first-sub" data-submenu="" role="menu">
                        <div class="grid-x submenu-level-2">
                            <div class="grid-x medium-8 small-12">
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/enfants-tout" class="nav-category-title level-2-link">
                                        Articles pour Enfant
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/enfants/nouveautes" class="level-3-link">
                                            Nouveautés pour enfants
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/enfants/tongs" class="level-3-link">
                                            Tongs enfants
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/enfants/sandales" class="level-3-link">
                                            Sandales enfants
                                        </a>
                                    </div>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/baby-all" class="nav-category-title level-2-link">
                                        Baby
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/bebe" class="level-3-link">
                                            Tongs bébé
                                        </a>
                                    </div>
                                </li>
                            </div>
                            <div class="grid-x medium-3 hide-for-small-only">
                                <div class="navigation-banner submenu-level-2-item"><img data-lazy-src="/on/demandware.static/-/Sites-siteCatalog_Havaianas/default/dwd3730289/Kids/kids.jpg" alt="Havaianas Enfants"></div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="level-1-item js-hover-event " role="menuitem">
                    <a class=" level-1-link" href="https://www.havaianas-store.com/fr/outlet">
                        Outlet
                    </a>
                </li>
                <li class="level-1-item js-hover-event  is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-label="
Dev.Durable
">
                    <a class="has-sub-menu level-1-link" href="https://www.havaianas-store.com/fr/developpement-durable-2021">
                        Dev.Durable
                    </a>
                    <ul class="vertical menu header-sticked submenu is-dropdown-submenu first-sub" data-submenu="" role="menu">
                        <div class="grid-x submenu-level-2">
                            <div class="grid-x medium-8 small-12">
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/developpement-durable-2021" class="nav-category-title level-2-link">
                                        Circulaire
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/recycle-sustainability" class="level-3-link">
                                            ReCYCLE
                                        </a>
                                        <a href="https://white-stamp.com/s1b1/havaianas/pt" class="level-3-link">
                                        </a>
                                    </div>
                                </li>
                                <li class="medium-2 small-12 submenu-level-2-item" role="menuitem">
                                    <a href="https://www.havaianas-store.com/fr/dev.durable/produits" class="nav-category-title level-2-link">
                                        Produits
                                    </a>
                                    <div class="level-3">
                                        <a href="https://www.havaianas-store.com/fr/developpement-durable-ci" class="level-3-link">
                                            CI
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/developpement-durable-espadrilles-eco" class="level-3-link">
                                            Espadrilles
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/developpement-durable-ipe" class="level-3-link">
                                            Ipe
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/developpement-durable-top-tradi" class="level-3-link">
                                            Top Tradi
                                        </a>
                                        <a href="https://www.havaianas-store.com/fr/developpement-durable-you" class="level-3-link">
                                            You
                                        </a>
                                    </div>
                                </li>
                            </div>
                            <div class="grid-x medium-3 hide-for-small-only">
                            </div>
                        </div>
                    </ul>
                </li>
            </ul>
            <div class="content-asset">
                <style>
                    @media (min-width: 900px) and (max-width: 1200px) {
                        #navigation .menu.level-1 .level-1-link {
                            font-size: 1vw;
                            margin-left: 10px;
                        }
                    }

                    @media (min-width: 1200px) and (max-width: 1500px) {
                        #navigation .menu.level-1 .level-1-link {
                            font-size: 1vw;
                            margin-left: 10px;
                        }
                    }
                </style>
            </div>

            <div class="menu-utility-user hide-for-medium">
                <div>
                    <a href="https://www.havaianas-store.com/fr/login">Mon Compte</a>
                    <a href="https://www.havaianas-store.com/fr/suivre-ma-commande">Mes commandes</a>
                    <a href="https://www.havaianas-store.com/fr/wishlist">Ma liste de voeux</a>
                    <a href="https://www.havaianas-store.com/fr/points-de-vente">Localisateur de magasin</a>
                    <a href="#" id="mobile-country-selector">Pays</a>
                </div>
                <div class="hamburger-contactus">
                    <a href="https://www.havaianas-store.com/fr/contactus">Contactez- nous</a>
                </div>
                <div>
                    <span id="nav-language-selector" class="nav-language-selector">
                        <span>Langue: </span><span class="nav-language-selector-value">français</span>
                    </span>
                </div>
            </div>
            <div class="menu-logo hide-for-medium">
                <img data-lazy-src="/on/demandware.static/-/Library-Sites-Havaianas/default/dw4a12fcd2/Global/Site Navigation/navigationLogo.svg">
            </div>
        </nav>
        <div id="navigation-overlay" class="navigation-overlay"></div>
        <div class="primary-logo">
            <a href="/fr" title="Havaianas Accueil">
                <img class="primary-logo--image interchange-loaded" alt="Havaianas" src="./img/logo.png">
                <span class="visually-hidden">Havaianas</span>
            </a>
        </div>
        <div class="header--right-block">
            <div class="header-search js-search-suggestions search-triangle-after display-flex vertical-align-center">
                <div class="simplesearch-close show-for-small-only"></div>
                <form role="search" action="/fr/search" method="get" name="simpleSearch" class="simplesearch-form" novalidate="novalidate">
                    <fieldset>
                        <label class="visually-hidden" for="q">Rechercher dans le Catalogue</label>
                        <input type="text" class="simplesearch-field" name="q" value="" maxlength="300" placeholder="Rechercher des tongs, des sandales..." autocomplete="off">
                        <input type="hidden" name="lang" value="null">
                        <button type="submit" class="header-search-btn">
                            <svg viewBox="0 0 23 24" class="svg-inline search-icon" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd" stroke="#000">
                                    <path d="M14.34 3.7C11.408.766 6.636.766 3.7 3.7.767 6.634.767 11.408 3.7 14.341c2.934 2.934 7.708 2.934 10.642.001 2.934-2.934 2.934-7.708-.001-10.642z"></path>
                                    <path d="M14.342 14.342L21.5 21.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <span class="visually-hidden">Rechercher</span>
                        </button>
                    </fieldset>
                </form>
            </div>
            <div class="header--countries hover-triangle-after show-for-medium display-flex js-hover-event">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline vertical-align-center" width="20" height="22" viewBox="0 0 20 22">
                    <g fill="#000" fill-rule="evenodd">
                        <path d="M9.625 19.516a8.838 8.838 0 0 0 3.367-.66c.346-.14.82.076 1.66.513.542.281 1.202.625 1.659.693a14.791 14.791 0 0 0-.141-1.087c-.227-1.479-.29-2.16.05-2.477 1.579-1.472 2.235-3.043 2.291-5.52 0-.007-.003-.012-.003-.019 0-.007.003-.013.004-.02.002-.105.005-.208.005-.315 0-4.902-3.989-8.89-8.892-8.89S.733 5.721.733 10.623c0 4.904 3.989 8.892 8.892 8.892M9.625 1c5.308 0 9.625 4.317 9.625 9.625 0 2.903-.704 4.698-2.509 6.39-.092.25.068 1.287.154 1.85.173 1.131.214 1.518.034 1.76a.427.427 0 0 1-.287.171 1.183 1.183 0 0 1-.18.012c-.631 0-1.437-.419-2.149-.788-.376-.196-.887-.462-1.069-.474a9.567 9.567 0 0 1-3.619.704C4.317 20.25 0 15.933 0 10.625 0 5.318 4.317 1 9.625 1"></path>
                        <path d="M5.17 15.5a86.918 86.918 0 0 1 4.088-.137v-4.036H4.68c.032 2.528.384 3.837.49 4.174zm8.541-.02c.115-.448.457-1.963.493-4.153H9.991v4.036c1.118.006 2.365.045 3.72.117zm0-9.04a84.813 84.813 0 0 1-3.72.117v4.036h4.213c-.036-2.183-.378-3.703-.493-4.153zm-4.453.119a81.381 81.381 0 0 1-4.076-.148 20.624 20.624 0 0 0-.502 4.182h4.578V6.559zm-7.587 4.034h2.275c.036-2.025.354-3.621.493-4.228-.405-.026-.808-.053-1.198-.081a.367.367 0 0 1 .051-.731c.427.03.867.059 1.312.087l.418-1.514a.366.366 0 1 1 .706.197l-.38 1.362c1.484.086 2.796.133 3.91.14V2.747a.367.367 0 0 1 .733 0v3.076a84.297 84.297 0 0 0 3.576-.11 46.97 46.97 0 0 0-.432-1.65.369.369 0 0 1 .255-.452.366.366 0 0 1 .452.254c.015.054.32 1.14.468 1.808.571-.031 1.132-.065 1.665-.102a.37.37 0 0 1 .392.34.368.368 0 0 1-.34.392c-.505.034-1.032.067-1.57.097.148.613.448 2.102.48 4.194h2.645a.366.366 0 0 1 0 .733h-2.645c-.032 2.097-.332 3.583-.479 4.194.398.023.794.048 1.176.075a.366.366 0 0 1-.025.732l-.026-.001c-.419-.03-.852-.056-1.29-.081l-.277 1.332a.367.367 0 0 1-.717-.155l.264-1.216a80.178 80.178 0 0 0-3.572-.111v2.575a.367.367 0 1 1-.734 0v-2.575c-1.178.01-2.499.053-3.868.127l.307.829a.366.366 0 1 1-.688.255l-.385-1.04-.956.06a.372.372 0 0 1-.39-.342.368.368 0 0 1 .343-.39l.796-.05c-.157-.56-.443-1.9-.472-4.218H1.671a.367.367 0 1 1 0-.734z"></path>
                    </g>
                </svg>
                <h3 class="header--countries-title show-for-small-only">Pays</h3>
                <div class="header--countries-block">
                    <div class="header--countries-container">
                        <h3>Pays</h3>
                        <div class="countries">
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw48d8e44b/images/countries/AT.svg" alt="Austria">
                                </div>
                                <a href="https://www.havaianas-store.com/de?cCode=AT" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=AT" class="country-name">Austria</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw5bc4f61d/images/countries/BE.svg" alt="Belgium">
                                </div>
                                <a href="https://www.havaianas-store.com/fr?cCode=BE" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=BE" class="country-name">Belgium</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwa74b765b/images/countries/BG.svg" alt="Bulgaria">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=BG" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=BG" class="country-name">Bulgaria</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwf8d5f4eb/images/countries/CZ.svg" alt="Czech Republic">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=CZ" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=CZ" class="country-name">Czech Republic</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwc6669a34/images/countries/DK.svg" alt="Denmark">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=DK" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=DK" class="country-name">Denmark</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw4a130cae/images/countries/EE.svg" alt="Estonia">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=EE" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=EE" class="country-name">Estonia</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw4131d338/images/countries/FI.svg" alt="Finland">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=FI" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=FI" class="country-name">Finland</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw4d7a2155/images/countries/FR.svg" alt="France">
                                </div>
                                <a href="https://www.havaianas-store.com/fr?cCode=FR" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=FR" class="country-name">France</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw6e9d6578/images/countries/DE.svg" alt="Germany">
                                </div>
                                <a href="https://www.havaianas-store.com/de?cCode=DE" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=DE" class="country-name">Germany</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw30ad51d6/images/countries/GR.svg" alt="Greece">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=GR" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=GR" class="country-name">Greece</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwcba644af/images/countries/VA.svg" alt="Vatican">
                                </div>
                                <a href="https://www.havaianas-store.com/it?cCode=VA" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=VA" class="country-name">Vatican</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwe7d6aaa6/images/countries/HU.svg" alt="Hungary">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=HU" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=HU" class="country-name">Hungary</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw63e7b1eb/images/countries/IE.svg" alt="Ireland">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=IE" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=IE" class="country-name">Ireland</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw9282875a/images/countries/IT.svg" alt="Italy">
                                </div>
                                <a href="https://www.havaianas-store.com/it?cCode=IT" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=IT" class="country-name">Italy</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw8752705e/images/countries/LV.svg" alt="Latvia">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=LV" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=LV" class="country-name">Latvia</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw46dae7d8/images/countries/LT.svg" alt="Lithuania">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=LT" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=LT" class="country-name">Lithuania</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw01e48b9e/images/countries/LU.svg" alt="Luxembourg">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=LU" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=LU" class="country-name">Luxembourg</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwdf42aa17/images/countries/MT.svg" alt="Malta">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=MT" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=MT" class="country-name">Malta</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw393aabff/images/countries/NL.svg" alt="Netherlands">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=NL" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=NL" class="country-name">Netherlands</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw98055c43/images/countries/PL.svg" alt="Poland">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=PL" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=PL" class="country-name">Poland</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwf9c3d3b1/images/countries/PT.svg" alt="Portugal">
                                </div>
                                <a href="https://www.havaianas-store.com/pt/?cCode=PT" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=PT" class="country-name">Portugal</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw03b81250/images/countries/RO.svg" alt="Romania">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=RO" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=RO" class="country-name">Romania</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw77550918/images/countries/SM.svg" alt="San Marino">
                                </div>
                                <a href="https://www.havaianas-store.com/it?cCode=SM" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=SM" class="country-name">San Marino</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw7068f2a7/images/countries/SK.svg" alt="Slovakia">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=SK" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=SK" class="country-name">Slovakia</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw82071e4c/images/countries/ES.svg" alt="Spain">
                                </div>
                                <a href="https://www.havaianas-store.com/es?cCode=ES" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=ES" class="country-name">Spain</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw695d7726/images/countries/SE.svg" alt="Sweden">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=SE" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=SE" class="country-name">Sweden</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw003d4db1/images/countries/GB.svg" alt="United Kingdom">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=GB" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=GB" class="country-name">United Kingdom</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw0386105c/images/countries/CY.svg" alt="Cyprus">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=CY" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=CY" class="country-name">Cyprus</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw91911bdf/images/countries/CH.svg" alt="Switzerland">
                                </div>
                                <a href="https://www.havaianas-store.com/de?cCode=CH" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=CH" class="country-name">Switzerland</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwbf089cef/images/countries/HR.svg" alt="Croatia">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=HR" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=HR" class="country-name">Croatia</a>
                            </div>
                            <div class="country">
                                <div class="flag-icon">
                                    <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw4ae244d6/images/countries/NO.svg" alt="Norway">
                                </div>
                                <a href="https://www.havaianas-store.com/en?cCode=NO" data-ccode="https://www.havaianas-store.com/on/demandware.store/Sites-Havaianas_Europe-Site/fr/Home-SetcCode?cCode=NO" class="country-name">Norway</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header--languages hover-triangle-after show-for-medium display-flex js-hover-event">
                <h3 class="header--languages-title hide-for-small-only">FR</h3>
                <h3 class="header--languages-title show-for-small-only">Langue</h3>
                <div class="header--languages-block">
                    <div class="header--languages-container">
                        <h3>Langues</h3>
                        <div class="languages">
                            <div class="column">
                                <div class="language">
                                    <div class="flag-icon">
                                        <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw9282875a/images/countries/IT.svg" alt="Italiano">
                                    </div>
                                    <a href="https://www.havaianas-store.com/it" class="language-name">Italiano</a>
                                </div>
                                <div class="language">
                                    <div class="flag-icon">
                                        <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw2d529af0/images/countries/EN.svg" alt="English">
                                    </div>
                                    <a href="https://www.havaianas-store.com/en" class="language-name">English</a>
                                </div>
                                <div class="language">
                                    <div class="flag-icon">
                                        <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw6e9d6578/images/countries/DE.svg" alt="Deutsch">
                                    </div>
                                    <a href="https://www.havaianas-store.com/de" class="language-name">Deutsch</a>
                                </div>
                                <div class="language">
                                    <div class="flag-icon">
                                        <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw4d7a2155/images/countries/FR.svg" alt="Français">
                                    </div>
                                    <a href="https://www.havaianas-store.com/fr" class="language-name">Français</a>
                                </div>
                                <div class="language">
                                    <div class="flag-icon">
                                        <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dw82071e4c/images/countries/ES.svg" alt="Español">
                                    </div>
                                    <a href="https://www.havaianas-store.com/es" class="language-name">Español</a>
                                </div>
                                <div class="language">
                                    <div class="flag-icon">
                                        <img data-lazy-src="/on/demandware.static/Sites-Havaianas_Europe-Site/-/default/dwf9c3d3b1/images/countries/PT.svg" alt="Portuguese">
                                    </div>
                                    <a href="https://www.havaianas-store.com/pt/" class="language-name">Portuguese</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <li class="user-info hover-triangle-after show-for-medium display-flex js-hover-event">
                <a class="user-account" href="https://www.havaianas-store.com/fr/account" title="Utilisateur: Mon compte">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline vertical-align-center" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="22" viewBox="0 0 20 22">
                        <defs>
                            <path id="a" d="M0 0h17.765v18.4H0z"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd" transform="translate(1 2)">
                            <mask id="b" fill="#fff">
                                <use xlink:href="#a"></use>
                            </mask>
                            <path fill="#000100" d="M17.338 18.4c-.084-.014-.125-.02-.157-.031l-.125-.085-.085-.111a.388.388 0 0 1-.047-.154l-.014-.1c-.023-3.532-2.451-6.651-5.905-7.583a.423.423 0 0 1-.314-.373.43.43 0 0 1 .239-.426c1.604-.781 2.6-2.351 2.6-4.096 0-2.527-2.085-4.583-4.646-4.583-2.562 0-4.645 2.056-4.645 4.583 0 1.745.997 3.314 2.603 4.096.159.079.256.25.239.427a.43.43 0 0 1-.317.372C3.285 11.275.857 14.414.857 17.97a.428.428 0 1 1-.858 0c0-3.412 2.03-6.54 5.17-7.97l.427-.192-.354-.306A5.382 5.382 0 0 1 3.38 5.44C3.38 2.44 5.85 0 8.883 0c3.035 0 5.505 2.44 5.505 5.44a5.373 5.373 0 0 1-1.86 4.062l-.354.307.426.193a8.858 8.858 0 0 1 4.926 6.005c.113.334.238.918.238 1.964a.416.416 0 0 1-.114.28l-.041.038-.095.065-.174.046h-.003z" mask="url(#b)"></path>
                        </g>
                    </svg>
                    <span class="user-account--text">Mon compte</span>
                </a>
                <div class="user-panel">
                    <div class="user-panel--container not-logged">
                        <h3 class="user-panel--title">Mon compte</h3>
                        <a class="js_close-user-panel close-button"></a>
                        <div class="user-links">
                            <div class="user-link">
                                <a class="user-login buttonstyle button-red" href="https://www.havaianas-store.com/fr/login" title="Aller à : Connexion">Connexion</a>
                            </div>
                            <div class="user-link">
                                <a class="user-register buttonstyle button-white" href="https://www.havaianas-store.com/fr/registere" title="Aller à : S'enregistrer">S'enregistrer</a>
                            </div>
                            <div class="user-link">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline trackmyorder-icon" width="20" height="22" viewBox="0 0 20 22">
                                    <path fill="#000" fill-rule="evenodd" d="M13.072 8.553l-2.83 1.404L2.87 6.271 5.7 4.867l7.372 3.686zM7.914 3.771l2.328-1.186 7.372 3.686-2.327 1.163-7.373-3.663zm2.616 6.683l2.763-1.37v3.602c0 .083.038.19.122.242a.208.208 0 0 0 .142.046c.03 0 .087 0 .142-.044l1.642-.881c.052-.026.139-.093.139-.252V7.98l2.475-1.226v9.776l-7.425 3.747v-9.822zm3.316 1.742v-3.4l1.081-.551v3.36l-1.081.59zM6.328 4.563l.959-.488 7.372 3.686-.958.478-7.373-3.676zm3.65 5.89v9.823l-7.45-3.771V6.729l7.45 3.725zm8.53-4.327h-.048l-.012-.012-.048-.048-8.033-4.036a.275.275 0 0 0-.252 0l-4.47 2.248a.252.252 0 0 0-.172.098l-3.32 1.66a.144.144 0 0 0-.087.067H2v10.572c0 .164.097.231.162.251L10.14 21h.153l8.026-4.073a.28.28 0 0 0 .163-.252V6.348a.127.127 0 0 0 .04-.093l-.016-.129z"></path>
                                </svg>
                                <a class="user-links--item" href="https://www.havaianas-store.com/fr/suivre-ma-commande" title="Aller à : Suivre ma Commande">Suivre ma Commande</a>
                            </div>
                            <div class="user-link">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline wishlist-icon" width="36" height="36" viewBox="0 0 36 36">
                                    <g fill="none" fill-rule="evenodd">
                                        <path fill="#FFF" stroke="#000" d="M35.49 18.245c0 9.524-7.72 17.245-17.245 17.245C8.721 35.49 1 27.769 1 18.245 1 8.72 8.721 1 18.245 1 27.77 1 35.49 8.721 35.49 18.245"></path>
                                        <path fill="#000" stroke="#FFF" stroke-width=".75" d="M13.428 11.23a4.896 4.896 0 0 0-4.89 4.89c0 .892.242 1.763.7 2.521 2.127 3.475 7.604 7.599 8.981 8.605 2.48-1.798 7.144-5.604 8.975-8.595a4.892 4.892 0 0 0-4.185-7.42c-1.54 0-3.008.737-3.926 1.973l-.865 1.164-.864-1.164a4.912 4.912 0 0 0-3.926-1.973zm4.48 16.24l-.002.001.002-.002zm.324 2.05h-.058a1.614 1.614 0 0 1-.893-.294c-.74-.526-7.306-5.255-9.875-9.45a7.06 7.06 0 0 1-1.021-3.655 7.052 7.052 0 0 1 7.043-7.044c1.784 0 3.5.686 4.79 1.88a7.077 7.077 0 0 1 4.79-1.88c3.884 0 7.045 3.16 7.045 7.044a7.036 7.036 0 0 1-1.009 3.633c-2.63 4.297-9.594 9.263-9.89 9.472a1.58 1.58 0 0 1-.902.294h-.02z"></path>
                                    </g>
                                </svg>
                                <a class="user-links--item" href="https://www.havaianas-store.com/fr/wishlist" title="Aller à : Ma Liste de souhaits">Ma Liste de souhaits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <div class="header--search-show show-for-small-only js-search-show">
                <svg viewBox="0 0 23 24" class="svg-inline search-icon" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd" stroke="#000">
                        <path d="M14.34 3.7C11.408.766 6.636.766 3.7 3.7.767 6.634.767 11.408 3.7 14.341c2.934 2.934 7.708 2.934 10.642.001 2.934-2.934 2.934-7.708-.001-10.642z"></path>
                        <path d="M14.342 14.342L21.5 21.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            <div id="mini-cart" class="mini-cart js-hover-event hover-triangle-after">


                <div class="mini-cart-total">
                    <div class="minicart-overlay"></div>
                    <div class="mini-cart-link mini-cart-empty">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-inline vertical-align-center" width="15" height="24" viewBox="0 0 15 24">
                            <path fill="#1D1D1B" fill-rule="evenodd" d="M13.412 22H1.7V8.05h2.755v1.584a.35.35 0 0 0 .701 0V8.05h4.799v1.584a.35.35 0 0 0 .701 0V8.05h2.756V22zM5.156 5.101a2.403 2.403 0 0 1 2.4-2.401 2.403 2.403 0 0 1 2.399 2.401V7.35H5.156V5.101zm8.606 2.249h-3.106V5.101A3.104 3.104 0 0 0 7.556 2a3.104 3.104 0 0 0-3.101 3.101V7.35H1.35A.35.35 0 0 0 1 7.7v14.65c0 .193.157.35.35.35h12.412a.35.35 0 0 0 .35-.35V7.7a.35.35 0 0 0-.35-.35z"></path>
                        </svg>
                        <span class="minicart-quantity">0</span>
                    </div>
                </div>
                <div class="mini-cart-content empty-cart">
                    <div class="mini-cart-header">
                        <h3 class="mini-cart-header-title">Mon panier <span class="products-quantities-block"><span class="products-quantities"> ( 0 )</span></span></h3>
                        <div class="close-button"></div>
                        <div class="mini-cart-products">
                            <p class="mini-cart-empty-content">Votre panier est vide</p>
                        </div>
                        <div class="mini-cart-totals">
                            <a class="mini-cart-link-continue-shopping button-full-width button-red" href="https://www.havaianas-store.com/fr" title="Continuer vos Achats">Continuer vos Achats</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>