<h1 class="title-main">Bienvenue dans l'espace admin</h1>
<div class="container-vv-admin">
    <div class="dash-container">
        <h3>Nom: <?= $userinfos['lastname']; ?></h3>
        <h3>Prenom: <?= $userinfos['firstname']; ?></h3>
        <h3>E-mail: <?= $userinfos['mail']; ?></h3>
        <!-- <h3>Mot de passe: <?= $userinfos['password']; ?></h3> -->
        <h3>Téléphone: <?= $userinfos['phone']; ?></h3>
        <h3>Ville: <?= $userinfos['city']; ?></h3>
        <h3>Code Postal: <?= $userinfos['postal_code']; ?></h3>
        <h3>Adresse: <?= $userinfos['address']; ?></h3>
        <h3>Date de naissance: <?= $userinfos['birthday']; ?></h3>
    </div>
</div>