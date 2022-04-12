<?php
session_start();
extract($_POST);



require("../models/database.class.php");
require("../models/user.class.php");
require("../models/categorie.class.php");
require("../models/souscategorie.class.php");
require("../models/produit.class.php");
require("../models/couleur.class.php");
require("../models/type.class.php");
require("../models/panier.class.php");


$id = htmlspecialchars($_POST['id']);

echo $panier->addCart($id);