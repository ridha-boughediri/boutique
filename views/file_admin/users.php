<!-- <h2>table client</h2>

<table style="width:100%">
  <tr>
    <th>id_utilisateur</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>mail</th>
    <th>phone</th>
    <th>postal_code</th>

    <th>supprimer</th>
    <th>modifier</th>

  </tr>


  <tr>
    <th><?= $userinfox["id_utilisateur"] ?></th>
    <th><?= $userinfox["firstname"] ?></th>
    <th><?= $userinfox["lastname"] ?></th>
    <th><?= $userinfox["mail"] ?></th>
    <th><?= $userinfox["phone"] ?></th>
    <th><?= $userinfox["postal_code"] ?></th>








  </tr>


</table> -->


<div class="space-admin-container-big">
  <h2 class="space-admin-title-top">Les Clients</h2>
  <div class="space-admin-view">

    <div class="panel-admin-container">
      <p class="field"></p>
      <div class="top-admin-bar">
        <h3 class="title-top-admin-bar">Id Utilisateur</h3>
        <h3 class="title-top-admin-bar">Prenom</h3>
        <h3 class="title-top-admin-bar">Nom</h3>
        <h3 class="title-top-admin-bar">E-mail</h3>
        <h3 class="title-top-admin-bar">Mot de Passe</h3>
        <h3 class="title-top-admin-bar">Téléphone</h3>
        <h3 class="title-top-admin-bar">Ville</h3>
        <h3 class="title-top-admin-bar">Code Postal</h3>
        <h3 class="title-top-admin-bar">Adresse</h3>
        <h3 class="title-top-admin-bar">Date de naissance</h3>
        <h3 class="title-top-admin-bar">Avatar</h3>
        <h3 class="title-top-admin-bar">Admin</h3>
        <h3 class="title-top-admin-bar">Supprimer</h3>
        <h3 class="title-top-admin-bar">Modifier</h3>
      </div>
      <div class="body-admin-bar">
        <?php foreach ($user->getClient() as $userinfox) : ?>
          <div class="body-admin-lign" data-id="<?= $userinfox["id_utilisateur"] ?>">
            <p class="admin-text-p"><?= $userinfox["id_utilisateur"] ?></p>
            <input type="text" id="firstname" class="admin-input" placeholder="Prenom" value="<?= $userinfox["firstname"] ?>">
            <input type="text" id="lastname" class="admin-input" placeholder="Nom" value="<?= $userinfox["lastname"] ?>">
            <input type="mail" id="mail" class="admin-input" placeholder="E-mail" value="<?= $userinfox["mail"] ?>">
            <input type="password" id="password" class="admin-input" placeholder="Mot de passe" value="<?= $userinfox["password"] ?>">
            <input type="number" id="phone" class="admin-input" placeholder="N° de téléphone portable" value="<?= $userinfox["phone"] ?>">
            <input type="text" id="city" class="admin-input" placeholder="Ville" value="<?= $userinfox["city"] ?>">
            <input type="number" id="postalcode" class="admin-input" placeholder="Code Postal" value="<?= $userinfox["postal_code"] ?>">
            <input type="text" id="adress" class="admin-input" placeholder="Adresse" value="<?= $userinfox["address"] ?>">
            <input type="date" id="birthday" class="admin-input" placeholder="Date de naissance" value="<?= $userinfox["birthday"] ?>">

            <input type="file" id="fileuser" name="fileuser" class="button-file" style="display: none;">
            <input type="button" value="Browse..." class="button-file-secondary" onclick="document.getElementById('fileproduit').click();" />

            <select id="type" class="admin-input">
              <option hidden>Admin</option>
              <option value="1">Oui</option>
              <option value="0">Non</option>
            </select>

            <button class="button-first submit-delete-user" data-id="<?= $userinfox["id_utilisateur"] ?>">Supprimer</button>
            <button class="button-secondary submit-edit-user" data-id="<?= $userinfox["id_utilisateur"] ?>">Modifier</button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>