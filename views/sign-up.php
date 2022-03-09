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
    <title>La Havane | S'inscrire</title>
</head>

<body>
    <div id="app_body_content">
        <?php require("./header.php"); ?>
        <main>
            <h1 class="title-main">S'inscrire</h1>
            <div class="sign-container">
                <form action="../controllers/process_register.php" method="post" class="inputs-container">
                    <input type="text" id="firstname" name="firstname" class="login-input" placeholder="Prenom*" value="">
                    <input type="text" id="lastname" name="lastname" class="login-input" placeholder="Nom*" value="">
                    <input type="mail" id="mail" name="mail" class="login-input" placeholder="E-mail*" value="">
                    <input type="mail" id="confirm_mail" name="confirm_mail" class="login-input" placeholder="Confirmer e-mail*" value="">
                    <input type="password" id="password" name="password" class="login-input" placeholder="Mot de passe*">
                    <input type="password" id="confirm_password" name="confirm_password" class="login-input" placeholder="Confirmer le Mot de passe*">
                    <input type="number" id="phone" name="phone" class="login-input" placeholder="N° de téléphone portable*">
                    <input type="text" id="city" name="city" class="login-input" placeholder="Ville*">
                    <input type="number" id="postal code" name="postal_code" class="login-input" placeholder="Code Postal*">
                    <input type="date" id="birthday" name="birthday" class="login-input" placeholder="Date de naissance (jj/mm/aaaa)*">
                    <p class="infos-star">Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                    <p class="field"></p>
                    <button class="button-secondary submit-register">S'enregister</button>
                </form>
            </div>
        </main>
        <?php require("./footer.php"); ?>
    </div>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/header.js"></script>
</body>

</html>