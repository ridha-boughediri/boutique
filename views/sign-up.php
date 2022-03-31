<?php

if (!isset($_SESSION['id'])) {

?>

    <main>
        <h1 class="title-main">S'inscrire</h1>
        <div class="sign-container">
            <div class="inputs-container">
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
            </div>
        </div>
    </main>

<?php } else {
    header("Refresh:0; url= ..");
} ?>

<!-- ../controllers/process_register.php -->