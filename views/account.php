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
    <title>La Havane | Votre Compte</title>
</head>

<body>
    <div id="app_body_content">
        <?php require("./header.php"); ?>
        <main>
            <div class="edit-container">
                <div class="list-container">
                    <button class="button-third profile">Profil</button>
                    <button class="button-third order">Vos commandes</button>
                    <button class="button-third adress">Adresse</button>
                    <button class="button-third pay">Vos paiement</button>
                    <button class="button-third">...</button>
                </div>
                <div class="view-container">
                    <h1 class="title-main" style="color: burlywood; text-decoration: underline burlywood; margin-bottom: 1vh;">Profil</h1>
                    <form id="data" method="post" enctype="multipart/form-data" class="inputs-container">
                        <input type="text" id="firstname" class="login-input" placeholder="Prenom*" value="">
                        <input type="text" id="lastname" class="login-input" placeholder="Nom*" value="">
                        <input type="mail" id="mail" class="login-input" placeholder="E-mail*" value="">
                        <input type="password" id="password" class="login-input" placeholder="Mot de passe*">
                        <input type="number" id="phone" class="login-input" placeholder="N° de téléphone portable*">
                        <label class="ph">Photo de Profil: </label>
                        <input type="file" id="file" name="file" class="button-file" value="">
                        <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                        <p class="field"></p>
                        <button class="button-secondary submit-edit-profile">Modifier</button>
                    </form>
                </div>
            </div>
        </main>
        <?php require("./footer.php"); ?>
    </div>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/account.js"></script>
</body>

</html>