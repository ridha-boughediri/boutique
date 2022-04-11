<?php
session_start();

require("./models/database.class.php");
require("./models/user.class.php");
require("./models/categorie.class.php");
require("./models/souscategorie.class.php");
require("./models/produit.class.php");
<<<<<<< HEAD
=======
require("./models/couleur.class.php");
require("./models/type.class.php");
>>>>>>> 6cdfcde1a0f1af0ec8f3778f839ca4b437eaff5f

if (isset($_SESSION['id'])) {
    $userinfos = $user->getAllInfos($_SESSION['id']);
}

$getallcate = $categorie->getCate();
$getallcateinfos = $getallcate->fetch();


$testproduit=$newproduit ->getProduit();
$allproduit=$testproduit->fetch();






$params = explode('/', $_GET['p']);


?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <base href="/boutique/" target="_blank">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="views/img/fav.png">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/styles2.css">
    <!--lien css produit -->
    <link rel="stylesheet" href="views/css/cssdesproduits.css">
    <!-- csslist -->
    <link rel="stylesheet" href="views/css/listproduct.css">
    <!-- cssviews/css/checkoutcss.css -->
    <link rel="stylesheet" href="views/css/checkoutcss.css">
    <!-- csslistpanier listpanier.css-->
    <link rel="stylesheet" href="views/css/listpanier.css">
    <script src="views/js/jquery-3.6.0.js"></script>
    <script src="views/js/slick.js"></script>
    <!-- script produit -->
    <script src="views/js/productshow.js"></script>
    <!-- scriptlistpanier -->
    <script src="views/js/listproduct.js"></script>
    <script src="views/js/header.js"></script>
    <script src="views/js/forget.js"></script>
    <script src="views/js/home-slide.js"></script>
    <script src="views/js/register.js"></script>
    <script src="views/js/connect.js"></script>
    <script src="views/js/account.js"></script>
    <script src="views/js/admin.js"></script>
    <script src="views/js/addproduit.js"></script>
    <script src="views/js/produit.js"></script>
    <script src="views/js/addcolor.js"></script>
    <script src="views/js/color.js"></script>
    <title>La Havane | Bienvenue sur l'accueil.</title>
</head>

<body>
    <div id="app_body_content">
        <?php
        require("views/header.php");

        if ($params[0] == "") {
            $filename = "views/index.php";
            if (file_exists($filename)) {
                require_once($filename);
            } else {
                require_once("views/error404.php");
            }
        } else {

            $filename = "views/" . $params[0] . ".php";
            if (file_exists($filename)) {
                require_once($filename);
            } else {
                require_once("views/error404.php");
            }
        }

        require("views/footer.php");
        ?>
    </div>
</body>

</html>