<h1 class="title-main" style="color: #fb373c; text-decoration: underline #fb373c; margin-bottom: 1vh;">Profil</h1>
<form id="data" method="post" enctype="multipart/form-data" class="inputs-container">
    <input type="text" id="firstname" class="login-input" placeholder="Prenom*" value="<?= $userinfos['firstname'] ?>">
    <p class="field firstz"></p>
    <input type="text" id="lastname" class="login-input" placeholder="Nom*" value="<?= $userinfos['lastname'] ?>">
    <p class="field lastz"></p>
    <input type="mail" id="mail" class="login-input" placeholder="E-mail*" value="<?= $userinfos['mail'] ?>">
    <p class="field mailz"></p>
    <input type="password" id="password" class="login-input" placeholder="Mot de passe*">
    <p class="field passz"></p>
    <input type="number" id="phone" class="login-input" placeholder="N° de téléphone portable*" value="<?= $userinfos['phone'] ?>">
    <p class="field phonez"></p>
    <label class="ph">Photo de Profil: </label>
    <input type="file" id="file" name="file" class="button-file">
    <p class="field filez"></p>
    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
    <button class="button-secondary submit-edit-profile">Modifier</button>
</form>