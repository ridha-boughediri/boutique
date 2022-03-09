<?php if (isset($_SESSION['id'])) {
    $user = new User();
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
        <div class="logo-container">
            <img src="./img/logo.png" class="logo" alt="">
        </div>
        <div class="cart-container">

            <nav class="menu">
                <ol>
                    <?php if (isset($_SESSION['id'])) { ?>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="./img/avatar/<?php echo $userinfos['avatar']; ?>" class="avatar-img" alt=""></button>
                            <div class="dropdown-content">
                                <h3 class="account-container-name"><?php echo $userinfos['firstname'] . ' ' .  $userinfos['lastname']; ?></h3>
                                <a class="btn-link myaccount">Mon profil</a>
                                <a class="btn-link">.......</a>
                                <a class="btn-link account-container-deco" style="color: red;">Deconnexion</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn bag-container">
                                <img src="./img/animated_cart.gif" class="search-logo" alt="">
                                <p class="nbcart">0</p>
                            </button>
                            <div class="dropdown-content cart-panier">
                                <a class="btn-link">Panier Vide</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="./img/account.png" class="search-logo" alt=""></button>
                            <div class="dropdown-content">
                                <h3 class="account-container-name">Mon compte</h3>
                                <a class="btn-link register">Inscription</a>
                                <a class="btn-link connect">Connexion</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn"><img src="./img/animated_cart.gif" class="search-logo" alt=""></button>
                            <div class="dropdown-content cart-panier">
                                <h3 class="account-container-name">Mon Panier</h3>
                                <a class="btn-link">Veuillez vous connectez pour acceder a ce contenu</a>
                            </div>
                        </div>
                    <?php } ?>
                </ol>
            </nav>
        </div>
    </div>

</header>