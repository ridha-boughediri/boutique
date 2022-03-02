<?php
session_start();
require_once("./classes/database.class.php");
require_once("./classes/user.class.php");

$bdd = new Database('localhost', 'lahavane', 'root', '');
$pdo = $bdd->bdd();
$user = new User($pdo);

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
        <header style="height:max-content;">
            <div class="bar-top" style="height:10vh;">
                <p class="bar-top-text">Etape 1/3</p>
            </div>
            <div class="logo-container">
                <img src="./img/logo.png" class="logo" alt="">
            </div>
        </header>
        <main>
            <h1 class="title-main">Mot de passe oublié</h1>
            <p class="">Entrer votre adresse mail</p>
            <div class="sign-container">
                <div class="inputs-container">
                    <input type="mail" id="forget-mail" class="login-input" placeholder="E-mail" value="">
                    <!-- <input type="number" id="number" class="login-input" placeholder="Code"> -->
                    <p class="field"></p>
                    <button class="button-first submit-forgetmail">Suivant ➜</button>
                </div>
            </div>
        </main>
        <?php require("./template/footer.php"); ?>
    </div>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/forget.js"></script>
</body>

</html>