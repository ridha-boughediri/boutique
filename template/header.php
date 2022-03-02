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
    <nav class="menu">
        <ol>
            <div class="dropdown">
                <button class="dropbtn">Nos Catégories</button>
                <div class="dropdown-content">
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Femme</button>
                <div class="dropdown-content">
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Homme</button>
                <div class="dropdown-content">
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Enfants</button>
                <div class="dropdown-content">
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                    <a class="btn-link" href="">.......</a>
                </div>
            </div>
        </ol>
    </nav>
</header>