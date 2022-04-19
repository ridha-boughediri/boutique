<h1 class="title-main" style="color: #fb373c; text-decoration: underline #fb373c; margin-bottom: 1vh;">Adresse</h1>
<div class="inputs-container">
    <input type="text" id="address" class="login-input" placeholder="Adresse*" value="<?= $userinfos['address'] ?>">
    <p class="field addressz"></p>
    <input type="text" id="city" class="login-input" placeholder="City*" value="<?= $userinfos['city'] ?>">
    <p class="field cityz"></p>
    <input type="number" id="postal_code" class="login-input" placeholder="Code Postal*" value="<?= $userinfos['postal_code'] ?>">
    <p class="field postal_codez"></p>
    <p>Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
    <button class="button-secondary submit-edit-profile">Modifier</button>
</div>