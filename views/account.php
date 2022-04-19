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
                <?php if ($userinfos['admin'] == 1) { ?>
                    <button class="button-first toadmin">Espace Admin</button>
                <?php } ?>
            </div>
            <div class="view-container">
                <?php
                if (isset($params[1])) {
                    if ($params[1] == "") {
                        $filename = "views/file_account/profile.php";
                        if (file_exists($filename)) {
                            require_once($filename);
                        } else {
                            echo '<h1 class="title-main">Une erreur est survenu</h1> <div class="container-vv-admin">Fichier Introuvable</div>';
                        }
                    } else {
                        $filename = "views/file_account/" . $params[1] . ".php";
                        if (file_exists($filename)) {
                            require_once($filename);
                        } else {
                            echo '<h1 class="title-main">Une erreur est survenu</h1> <div class="container-vv-admin">Fichier Introuvable</div>';
                        }
                    }
                } else {
                    $filename = "views/file_account/profile.php";
                    if (file_exists($filename)) {
                        require_once($filename);
                    } else {
                        echo '<h1 class="title-main">Une erreur est survenu</h1> <div class="container-vv-admin">Fichier Introuvable</div>';
                    }
                }
                ?>
            </div>
        </div>
    </main>

<?php } else {
    header("Refresh:0; url= .");
} ?>