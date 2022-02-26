<?php
extract($_POST);

session_start();

require_once("../classes/database.class.php");
require_once("../classes/user.class.php");

$bdd = new Database();
$pdo = $bdd->connect();
$user = new User($pdo);

if (isset($_POST['submitregister'])) {

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
}

if (isset($_POST['submitconnect'])) {

    $mail = htmlspecialchars(trim($_POST['mail']));
    $password = sha1(trim($_POST['password']));


    echo $user->connection($mail, $password);
}
