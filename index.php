<?php
session_start();
require_once("../includes/class.autoload.inc.php");





<<<<<<< HEAD
=======
$pdo = $bdd->bdd();
$user = new User($pdo);
>>>>>>> 4e3adec32bb29f0ba30bc2516c83a4737fd2081c

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
        <?php require("./template/header.php"); ?>
        <main>


            <div id="home-collection">
                <div style="min-height: 25vw;">
                    <div>
                        <div class="l">
                            <div class="slick-slider">
                                <div class="slick-slide">
                                    <div>
                                        <div class="gv2-asset" style="width: 100%; display: inline-block;">
                                            <div class="asset-wrapper">
                                                <div class="hero-card">
                                                    <div class="image-container">
                                                        <img src="https://img.freepik.com/vecteurs-libre/vetements-laves-suspendus-corde-linge_53876-40441.jpg?w=1060" alt="" class="card-img">
                                                        <img src="https://img.freepik.com/vecteurs-libre/vetements-laves-suspendus-corde-linge_53876-40441.jpg?w=1060" alt="" class="image-overlay">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="slick-slider">
                                <div class="slick-slide">
                                    <div>
                                        <div class="gv2-asset" style="width: 100%; display: inline-block;">
                                            <div class="asset-wrapper">
                                                <div class="hero-card">
                                                    <div class="image-container">
                                                        <img src="" alt="" class="card-img">
                                                        <img src="" alt="" class="image-overlay">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="slick-slider">
                                <div class="slick-slide">
                                    <div>
                                        <div class="gv2-asset" style="width: 100%; display: inline-block;">
                                            <div class="asset-wrapper">
                                                <div class="hero-card">
                                                    <div class="image-container">
                                                        <img src="" alt="" class="card-img">
                                                        <img src="" alt="" class="image-overlay">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="slick-slider">
                                <div class="slick-slide">
                                    <div>
                                        <div class="gv2-asset" style="width: 100%; display: inline-block;">
                                            <div class="asset-wrapper">
                                                <div class="hero-card">
                                                    <div class="image-container">
                                                        <img src="" alt="" class="card-img">
                                                        <img src="" alt="" class="image-overlay">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require("./template/footer.php"); ?>
    </div>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/header.js"></script>
    <script>
        jQuery(function($) {
            var windowWidth = $(window).width();
            var windowHeight = $(window).height();

            $(window).resize(function() {
                if (windowWidth != $(window).width() || windowHeight != $(window).height()) {
                    location.reload();
                    return;
                }
            });
        });

        if ($(window).width() <= 768) {
            $('.slick-slider').slick({
                dots: false,
                infinite: false,
                draggable: false,
                prevArrow: '<button class="sc-iiUIRa eHvBfV slick-arrow slick-prev" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowLeft" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M22.324 28.008c.537.577.355 1.433-.326 1.809a1.44 1.44 0 0 1-.72.183c-.398 0-.786-.151-1.048-.438L10.06 18.588a1.126 1.126 0 0 1 0-1.555L20.233 6.09c.438-.468 1.198-.564 1.767-.25.681.377.863 1.23.325 1.808l-9.446 10.164 9.446 10.196zM11.112 17.615a.31.31 0 0 1 0 .391l.182-.195-.182-.196zM21.308 7.094c-.01-.006-.053 0-.029-.027a.07.07 0 0 0 .029.027zm-.025 21.499a.95.95 0 0 1-.006-.008l.006.008z" class="sc-bZQynM keKOpO"></path></svg></button>',
                nextArrow: '<button class="sc-iiUIRa iXgoSW slick-arrow slick-next" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowRight" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M13.065 7.65c-.538-.578-.355-1.433.325-1.81a1.44 1.44 0 0 1 .72-.182c.398 0 .786.15 1.048.437L25.327 17.07a1.126 1.126 0 0 1 0 1.555L15.155 29.568c-.438.468-1.198.563-1.767.25-.681-.377-.863-1.23-.325-1.809l9.446-10.164L13.065 7.65zm11.211 10.393a.31.31 0 0 1 0-.391l-.181.194.181.197zM14.081 28.564c.01.006.053 0 .028.027a.07.07 0 0 0-.028-.027zm.024-21.5a.95.95 0 0 1 .007.008l-.007-.007z" class="sc-bZQynM keKOpO"></path></svg></button>',
                speed: 200,
                slidesToShow: 2,
                slidesToScroll: 2,
            });
        } else if ($(window).width() <= 1023) {
            $('.slick-slider').slick({
                dots: false,
                infinite: false,
                draggable: false,
                prevArrow: '<button class="sc-iiUIRa eHvBfV slick-arrow slick-prev" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowLeft" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M22.324 28.008c.537.577.355 1.433-.326 1.809a1.44 1.44 0 0 1-.72.183c-.398 0-.786-.151-1.048-.438L10.06 18.588a1.126 1.126 0 0 1 0-1.555L20.233 6.09c.438-.468 1.198-.564 1.767-.25.681.377.863 1.23.325 1.808l-9.446 10.164 9.446 10.196zM11.112 17.615a.31.31 0 0 1 0 .391l.182-.195-.182-.196zM21.308 7.094c-.01-.006-.053 0-.029-.027a.07.07 0 0 0 .029.027zm-.025 21.499a.95.95 0 0 1-.006-.008l.006.008z" class="sc-bZQynM keKOpO"></path></svg></button>',
                nextArrow: '<button class="sc-iiUIRa iXgoSW slick-arrow slick-next" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowRight" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M13.065 7.65c-.538-.578-.355-1.433.325-1.81a1.44 1.44 0 0 1 .72-.182c.398 0 .786.15 1.048.437L25.327 17.07a1.126 1.126 0 0 1 0 1.555L15.155 29.568c-.438.468-1.198.563-1.767.25-.681-.377-.863-1.23-.325-1.809l9.446-10.164L13.065 7.65zm11.211 10.393a.31.31 0 0 1 0-.391l-.181.194.181.197zM14.081 28.564c.01.006.053 0 .028.027a.07.07 0 0 0-.028-.027zm.024-21.5a.95.95 0 0 1 .007.008l-.007-.007z" class="sc-bZQynM keKOpO"></path></svg></button>',
                speed: 200,
                slidesToShow: 3,
                slidesToScroll: 3,
            });
        } else if ($(window).width() <= 1439) {
            $('.slick-slider').slick({
                dots: false,
                infinite: false,
                draggable: false,
                prevArrow: '<button class="sc-iiUIRa eHvBfV slick-arrow slick-prev" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowLeft" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M22.324 28.008c.537.577.355 1.433-.326 1.809a1.44 1.44 0 0 1-.72.183c-.398 0-.786-.151-1.048-.438L10.06 18.588a1.126 1.126 0 0 1 0-1.555L20.233 6.09c.438-.468 1.198-.564 1.767-.25.681.377.863 1.23.325 1.808l-9.446 10.164 9.446 10.196zM11.112 17.615a.31.31 0 0 1 0 .391l.182-.195-.182-.196zM21.308 7.094c-.01-.006-.053 0-.029-.027a.07.07 0 0 0 .029.027zm-.025 21.499a.95.95 0 0 1-.006-.008l.006.008z" class="sc-bZQynM keKOpO"></path></svg></button>',
                nextArrow: '<button class="sc-iiUIRa iXgoSW slick-arrow slick-next" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowRight" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M13.065 7.65c-.538-.578-.355-1.433.325-1.81a1.44 1.44 0 0 1 .72-.182c.398 0 .786.15 1.048.437L25.327 17.07a1.126 1.126 0 0 1 0 1.555L15.155 29.568c-.438.468-1.198.563-1.767.25-.681-.377-.863-1.23-.325-1.809l9.446-10.164L13.065 7.65zm11.211 10.393a.31.31 0 0 1 0-.391l-.181.194.181.197zM14.081 28.564c.01.006.053 0 .028.027a.07.07 0 0 0-.028-.027zm.024-21.5a.95.95 0 0 1 .007.008l-.007-.007z" class="sc-bZQynM keKOpO"></path></svg></button>',
                speed: 200,
                slidesToShow: 4,
                slidesToScroll: 4,
            });
        } else {
            $('.slick-slider').slick({
                dots: false,
                infinite: false,
                draggable: false,
                prevArrow: '<button class="sc-iiUIRa eHvBfV slick-arrow slick-prev" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowLeft" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M22.324 28.008c.537.577.355 1.433-.326 1.809a1.44 1.44 0 0 1-.72.183c-.398 0-.786-.151-1.048-.438L10.06 18.588a1.126 1.126 0 0 1 0-1.555L20.233 6.09c.438-.468 1.198-.564 1.767-.25.681.377.863 1.23.325 1.808l-9.446 10.164 9.446 10.196zM11.112 17.615a.31.31 0 0 1 0 .391l.182-.195-.182-.196zM21.308 7.094c-.01-.006-.053 0-.029-.027a.07.07 0 0 0 .029.027zm-.025 21.499a.95.95 0 0 1-.006-.008l.006.008z" class="sc-bZQynM keKOpO"></path></svg></button>',
                nextArrow: '<button class="sc-iiUIRa iXgoSW slick-arrow slick-next" style="display: block;"><svg alt="" aria-hidden="true" aria-label="arrowRight" color="white" role="img" transform="" version="1.1" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw bmFKhl" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;"><path d="M13.065 7.65c-.538-.578-.355-1.433.325-1.81a1.44 1.44 0 0 1 .72-.182c.398 0 .786.15 1.048.437L25.327 17.07a1.126 1.126 0 0 1 0 1.555L15.155 29.568c-.438.468-1.198.563-1.767.25-.681-.377-.863-1.23-.325-1.809l9.446-10.164L13.065 7.65zm11.211 10.393a.31.31 0 0 1 0-.391l-.181.194.181.197zM14.081 28.564c.01.006.053 0 .028.027a.07.07 0 0 0-.028-.027zm.024-21.5a.95.95 0 0 1 .007.008l-.007-.007z" class="sc-bZQynM keKOpO"></path></svg></button>',
                speed: 200,
                slidesToShow: 5,
                slidesToScroll: 5,
            });
        }
    </script>
</body>

</html>



<?php


// $listcou= new Couleur();
// print_r($listcou->getCoul());
// echo "<br>";



// $souscategorie = new Souscategorie();
// print_r($souscategorie->getCateSou());
// echo "<br>";
// echo "<br>";
// echo "<br>";

// $showproduct = new Produit();
// print_r($showproduct->getProduit());



?>