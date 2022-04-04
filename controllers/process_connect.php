<?php
session_start();
extract($_POST);

require("../models/database.class.php");
require("../models/user.class.php");


$mail = htmlspecialchars(trim($_POST['mail']));
$password = sha1(trim($_POST['password']));

echo $user->connection($mail, $password);