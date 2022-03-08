<?php
session_start();
// require("../models/database.class.php");
// require("../models/user.class.php");
require_once("/includes/class.autoload.inc.php");


$bdd = $pdo->connect();

$user = new User($bdd);

print_r($user);

if (!isset($_SESSION['id'])) {

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
            <?php require("./header.php"); ?>
            <main>
                <h1 class="title-main">Se Connecter</h1>
                <div class="sign-container">
                    <form action="../controllers/process_connect.php" method="post" class="inputs-container">
                        <input type="mail" id="mail" name="mail" class="login-input" placeholder="E-mail*" value="">
                        <input type="password" id="password" name="password" class="login-input" placeholder="Mot de passe*">
                        <!-- <button type="button" style="cursor: pointer; position: absolute; right: 16px; top: 13px; display: inline-block; border: none; background: transparent;">
                            <svg alt="" color="#cacaca" role="img" transform="" version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="sc-gzVnrw ezoqvp" style="height: 20px; min-width: 20px; width: 20px; z-index: auto;">
                                <path d="M1.393 4.222l1.415-1.414 18.384 18.384-1.414 1.415-3.496-3.497c-1.33.547-2.773.89-4.282.89-6.627 0-12-6.625-12-8 0-.752 1.607-3.074 4.147-5.024L1.393 4.222zM12 4c6.627 0 12 6.625 12 8 0 .752-1.607 3.074-4.147 5.024l-3.198-3.196a5 5 0 0 0-6.483-6.483L7.718 4.89C9.048 4.343 10.49 4 12 4zm-4.656 6.173a5 5 0 0 0 6.483 6.483l-1.661-1.66L12 15a3 3 0 0 1-3-3l.005-.166-1.66-1.66zM12 9a3 3 0 0 1 3 3l-.005.166-3.162-3.161L12 9z" class="sc-bZQynM keKOpO"></path>
                            </svg>
                        </button> -->
                        <p class="infos-star">Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                        <p class="field"></p>
                        <p class="lost-pass">Mot de passe oublié ?</p>
                        <button class="button-first submit-connect">Se Connecter</button>
                    </form>
                </div>
            </main>
            <?php require("./footer.php"); ?>
        </div>
        <script src="./js/jquery-3.6.0.js"></script>
        <script src="./js/header.js"></script>
        <!-- <script src="./js/connect.js"></script> -->
        <script>
            // $(".submit-connect").on("click", function() {
            //     mail = $("#mail").val();
            //     password = $("#password").val();

            //     $.post(
            //         "./processing/process_connect.php", {
            //             mail: mail,
            //             password: password,
            //         },
            //         function(data) {
            //             if (data != "") {
            //                 $(".field").removeClass("success");
            //                 $(".field").removeClass("error");
            //                 if (data == "Vous êtes connecté !") {
            //                     $(".field").addClass("success");
            //                     $(".success").empty();
            //                     $(".success").append(data);
            //                 } else {
            //                     $(".field").addClass("error");
            //                     $(".error").empty();
            //                     $(".error").append(data);
            //                 }
            //             }
            //         }
            //     );
            // });
            // $(".lost-pass").on("click", function() {
            //     window.location = "./forgotpassword.php";
            // });
            // $(".sc-gzVnrw.ezoqvp").on("click", function() {

            //     var x = document.getElementById("password");
            //     if (x.type === "password") {
            //         $(".sc-gzVnrw.ezoqvp path").attr("d", "M12 4c6.627 0 12 6.625 12 8s-5.373 8-12 8-12-6.625-12-8 5.373-8 12-8zm0 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6z");
            //         x.type = "text";
            //     } else {
            //         $(".sc-gzVnrw.ezoqvp path").attr("d", "M1.393 4.222l1.415-1.414 18.384 18.384-1.414 1.415-3.496-3.497c-1.33.547-2.773.89-4.282.89-6.627 0-12-6.625-12-8 0-.752 1.607-3.074 4.147-5.024L1.393 4.222zM12 4c6.627 0 12 6.625 12 8 0 .752-1.607 3.074-4.147 5.024l-3.198-3.196a5 5 0 0 0-6.483-6.483L7.718 4.89C9.048 4.343 10.49 4 12 4zm-4.656 6.173a5 5 0 0 0 6.483 6.483l-1.661-1.66L12 15a3 3 0 0 1-3-3l.005-.166-1.66-1.66zM12 9a3 3 0 0 1 3 3l-.005.166-3.162-3.161L12 9z");
            //         x.type = "password";
            //     }
            // });
        </script>
    </body>

    </html>
<?php } else {
    header("Refresh:0; url=./index.php");
} ?>