<?php if (isset($_SESSION['id']) && $userinfos['admin'] == 1) { ?>

  <main class="main-first">
    <div class="edit-admin">
      <div class="list-container-admin">
        <h2 class="title-admin-bar">Espace Admin</h2>
        <button class="button-six dashboard">Tableau de Bord</button>
        <button class="button-six add-produit">Ajouter un produit</button>
        <button class="button-six produit">Produits</button>
        <button class="button-six panier">Panier</button>
        <button class="button-six users">Clients</button>
        <button class="button-six add-color">Ajouter une Couleur</button>
        <button class="button-six colors">Couleurs</button>
        <button class="button-six type">Type Produits</button>
        <button class="button-six categories">Catégories</button>
        <button class="button-six sous-categories">Sous-Catégories</button>
      </div>
      <div class="view-container-admin">
        <?php
        if (isset($params[1])) {
          if ($params[1] == "") {
            $filename = "views/file_admin/dashboard.php";
            if (file_exists($filename)) {
              require_once($filename);
            } else {
              echo '<h1 class="title-main">Bienvenue dans l\'espace admin</h1> <div class="container-vv-admin">Fichier Introuvable</div>';
            }
          } else {
            $filename = "views/file_admin/" . $params[1] . ".php";
            if (file_exists($filename)) {
              require_once($filename);
            } else {
              echo '<h1 class="title-main">Bienvenue dans l\'espace admin</h1> <div class="container-vv-admin">Fichier Introuvable</div>';
            }
          }
        } else {
          $filename = "views/file_admin/dashboard.php";
          if (file_exists($filename)) {
            require_once($filename);
          } else {
            echo '<h1 class="title-main">Bienvenue dans l\'espace admin</h1> <div class="container-vv-admin">Fichier Introuvable</div>';
          }
        }
        ?>
      </div>
    </div>

  </main>

<?php } ?>