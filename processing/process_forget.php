<?php
session_start();
extract($_POST);

require("../classes/database.class.php");
require("../classes/user.class.php");

$bdd = new Database('localhost', 'lahavane', 'root', '');
$pdo = $bdd->bdd();
$user = new User($pdo);


$forgetmail = htmlspecialchars(trim($_POST['forgetmail']));

echo $user->forgetPassword($forgetmail);
