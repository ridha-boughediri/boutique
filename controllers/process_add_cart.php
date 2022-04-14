<?php
session_start();
extract($_POST);


require("../vendor/autoload.php");



$id = htmlspecialchars($_POST['id']);

echo $panier->addCart($id);