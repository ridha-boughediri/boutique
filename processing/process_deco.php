<?php
session_start();
extract($_POST);

require_once("../classes/database.class.php");
require_once("../classes/user.class.php");

$bdd = new Database('localhost', 'lahavane', 'root', '');
$pdo = $bdd->bdd();
$user = new User($pdo);


$user->disconnect();
