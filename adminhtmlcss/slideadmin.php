<?php ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar" >
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Dashboard la havana </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="./dashboardadmin.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">tableau de bord</span>
                </a>
            </li>
            <li>
                <a href="./addproduit.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Ajouter un produitt</span>
                </a>
            </li>

            <li>
                <a href="./displaytableproduit.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Table produits</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Panier</span>
                </a>
            </li>
           
            <li>
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="links_name">Total ACHAT</span>
                </a>
            </li>
            <li>
                <a href="./displaysclient.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Clients</span>
                </a>
            </li>
            <li>
                <a href="./displaytableproduit.php">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Produit</span>
                </a>
            </li>
            <li>
                <a href="./displaytablecouleur.php">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">La couleur</span>
                </a>
            </li>
            <li>
                <a href="./displaytableproduittype.php">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Le genre produit</span>
                </a>
            </li>
            <li>
                <a href="./displaytablecategorie.php">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Categorie</span>
                </a>
            </li>

            <li>
                <a href="./displaysubcategorie.php">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Sous-Categorie</span>
                </a>
            </li>
            <li class="log_out">
                <a href="/controllers/process_deco.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Deconnexion</span>
                </a>
            </li>
        </ul>
    </div>