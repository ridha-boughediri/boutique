<?php
session_start();
extract($_POST);

require("../models/database.class.php");
require("../models/user.class.php");


$user->disconnect();