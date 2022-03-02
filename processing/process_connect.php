<?php
session_start();
extract($_POST);

require("../classes/database.class.php");
require("../classes/user.class.php");

$bdd = new Database('localhost', 'lahavane', 'root', '');
$pdo = $bdd->bdd();
$user = new User($pdo);


$mail = htmlspecialchars(trim($_POST['mail']));
$password = sha1(trim($_POST['password']));

echo $user->connect($mail, $password);
