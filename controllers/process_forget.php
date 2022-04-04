<?php
session_start();
extract($_POST);
extract($_FILES);


require("../models/database.class.php");
require("../models/user.class.php");


$forgetmail = htmlspecialchars($_POST['forgetmail']);

echo $user->forgetPassword($forgetmail, $_SESSION['id']);
