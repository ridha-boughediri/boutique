<?php

require_once("./includes/class.autoload.inc.php");

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
    <title>La Havane | Se Connecter</title>
</head>

<body>
    <div id="app_body_content">
        <?php require("./template/header.php"); ?>
        <main>
            <h1 class="title-main">Se Connecter</h1>
            <div class="sign-container">
                <div class="inputs-container">
                    <input type="mail" id="mail" class="login-input" placeholder="E-mail*" value="">
                    <input type="password" id="password" class="login-input" placeholder="Mot de passe*">
                    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                    <p class="field"></p>
                    <button class="button-first submit-connect">Se Connecter</button>
                </div>
            </div>
        </main>
        <?php require("./template/footer.php"); ?>
    </div>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/connect.js"></script>
</body>

</html>