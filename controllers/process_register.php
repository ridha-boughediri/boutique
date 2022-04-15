<?php
session_start();



extract($_POST);
require("../vendor/autoload.php");
$user=new User();

$firstname = htmlspecialchars(trim($_POST['firstname']));
$lastname = htmlspecialchars(trim($_POST['lastname']));
$mail = htmlspecialchars(trim($_POST['mail']));
$confirm_mail = htmlspecialchars(trim($_POST['confirm_mail']));
$password = sha1(trim($_POST['password']));
$confirm_password = sha1(trim($_POST['confirm_password']));
// password_hash($_POST['password'], PASSWORD_DEFAULT)
$phone = htmlspecialchars(trim($_POST['phone']));
$city = htmlspecialchars(trim($_POST['city']));
$postal_code = htmlspecialchars(trim($_POST['postal_code']));
$birthday = htmlspecialchars(trim($_POST['birthday']));

echo $user->register($firstname, $lastname, $mail, $confirm_mail, $password, $confirm_password, $phone, $city, $postal_code, $birthday);