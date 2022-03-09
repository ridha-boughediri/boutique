<?php
session_start();
extract($_POST);

require("../models/database.class.php");
require("../models/user.class.php");

$user = new User();


$mail = htmlspecialchars(trim($_POST['mail']));
$password = sha1(trim($_POST['password']));

echo $user->connection($mail, $password);
header("Refresh:0; url=../views/index.php");