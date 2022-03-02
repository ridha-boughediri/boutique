<?php
session_start();
extract($_POST);

require("../classes/database.class.php");
require("../classes/user.class.php");

$bdd = new Database('localhost', 'lahavane', 'root', '');
$pdo = $bdd->bdd();
$user = new User($pdo);

$firstname = htmlspecialchars(trim($_POST['firstname']));
$lastname = htmlspecialchars(trim($_POST['lastname']));
$mail = htmlspecialchars(trim($_POST['mail']));
$confirm_mail = htmlspecialchars(trim($_POST['confirm_mail']));
$password = sha1(trim($_POST['password']));
$confirm_password = sha1(trim($_POST['confirm_password']));
$phone = htmlspecialchars(trim($_POST['phone']));
$country = htmlspecialchars(trim($_POST['country']));
$birthday = htmlspecialchars(trim($_POST['birthday']));

echo $user->register($firstname, $lastname, $mail, $confirm_mail, $password, $confirm_password, $phone, $country, $birthday);
