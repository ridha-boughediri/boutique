<?php
session_start();
extract($_POST);
extract($_FILES);

require("../vendor/autoload.php");




$id = intval($_POST['id']);

echo $categorie->DeleCate($id);