<?php
session_start();
extract($_POST);
extract($_FILES);

require("../vendor/autoload.php");



$forgetmail = htmlspecialchars($_POST['forgetmail']);

echo $user->forgetPassword($forgetmail, $_SESSION['id']);
