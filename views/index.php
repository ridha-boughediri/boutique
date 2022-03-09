<?php
session_start();

require("../models/database.class.php");
require("../models/user.class.php");

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="./img/fav.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>La Havane | Bienvenue sur l'accueil.</title>
</head>

<body>
    <div id="app_body_content">
        <?php require("./header.php"); ?>
        <main>
            <div class="home-carousel">
                <div class="slick-slider">
                    <div class="slick-slide">
                        <img src="./img/---.jpg" alt="" class="slick-img">
                    </div>
                    <div class="slick-slide">
                        <img src="./img/---.jpg" alt="" class="slick-img">
                    </div>
                    <div class="slick-slide">
                        <img src="./img/---.jpg" alt="" class="slick-img">
                    </div>
                </div>
            </div>
            <div class="best-carousel">
                <h1 class="title-main">Best Seller</h1>
                <div class="slick-cards">
                    <div class="slick-card">
                        <img src="./img/___.jpg" alt="" class="slick-img">
                        <div class="slick-card-infos">
                            <h3>...</h3>
                            <p>..$..</p>
                        </div>

                    </div>

                    <div class="slick-card">
                        <img src="./img/___.jpg" alt="" class="slick-img">
                        <div class="slick-card-infos">
                            <h3>...</h3>
                            <p>..$..</p>
                        </div>
                    </div>

                    <div class="slick-card">
                        <img src="./img/___.jpg" alt="" class="slick-img">
                        <div class="slick-card-infos">
                            <h3>...</h3>
                            <p>..$..</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require("./footer.php"); ?>
    </div>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/header.js"></script>
    <script>
        $('.home-carousel .slick-slider').slick({
            dots: true,
            infinite: true,
            draggable: true,
            autoplay: true,
            prevArrow: '<span class="slick-prev slick-arrow" aria-label="Previous"></span>',
            nextArrow: '<span class="slick-next slick-arrow" aria-label="Next"></span>',
            speed: 200,
            slidesToShow: 1,
            slidesToScroll: 1,
        });

        $('.slick-dots li button').empty();
    </script>
</body>

</html>