<?php

if (isset($_SESSION['id'])) {

?>

    <main>
        <div class="edit-container">
            <div class="list-container">
                <button class="button-third profile">Profil</button>
                <button class="button-third order">Vos commandes</button>
                <button class="button-third adress">Adresse</button>
                <button class="button-third pay">Vos paiement</button>
                <button class="button-first">Espace Admin</button>
            </div>
            <div class="view-container">
                <h1 class="title-main" style="color: burlywood; text-decoration: underline burlywood; margin-bottom: 1vh;">Profil</h1>
                <form id="data" method="post" enctype="multipart/form-data" class="inputs-container">
                    <input type="text" id="firstname" class="login-input" placeholder="Prenom*" value="">
                    <p class="field firstz"></p>
                    <input type="text" id="lastname" class="login-input" placeholder="Nom*" value="">
                    <p class="field lastz"></p>
                    <input type="mail" id="mail" class="login-input" placeholder="E-mail*" value="">
                    <p class="field mailz"></p>
                    <input type="password" id="password" class="login-input" placeholder="Mot de passe*">
                    <p class="field passz"></p>
                    <input type="number" id="phone" class="login-input" placeholder="N° de téléphone portable*">
                    <p class="field phonez"></p>
                    <label class="ph">Photo de Profil: </label>
                    <input type="file" id="file" name="file" class="button-file" value="">
                    <p class="field filez"></p>
                    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
                    <button class="button-secondary submit-edit-profile">Modifier</button>
                </form>
            </div>
        </div>
    </main>

<?php } else {
    header("Refresh:0; url= .");
} ?>