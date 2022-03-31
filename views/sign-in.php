<?php

if (!isset($_SESSION['id'])) {

?>

    <main>
        <h1 class="title-main">Se Connecter</h1>
        <div class="sign-container">
            <div class="inputs-container">
                <input type="mail" id="mail" name="mail" class="login-input" placeholder="E-mail*" value="">
                <input type="password" id="password" name="password" class="login-input" placeholder="Mot de passe*">
                <p class="infos-star">Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                <p class="field"></p>
                <p class="lost-pass">Mot de passe oublié ?</p>
                <button class="button-first submit-connect">Se Connecter</button>
            </div>
        </div>
    </main>

<?php } else {
    header("Refresh:0; url= index");
} ?>

<!-- ../controllers/process_connect.php -->