<?php
session_start();
extract($_POST);

require("../vendor/autoload.php");




$color = htmlspecialchars($_POST['color']);

echo $couleur->CreateColor($color);