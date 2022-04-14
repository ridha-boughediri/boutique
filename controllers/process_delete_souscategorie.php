<?php
session_start();
extract($_POST);


require("../vendor/autoload.php");




$id = intval($_POST['id']);

echo $souscategorie->DeleSubCate($id);
