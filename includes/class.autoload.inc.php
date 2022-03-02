<?php

spl_autoload_register("myautoloader");




<<<<<<< HEAD
function myautoloader($className){
    $pash='../classes/';
=======
function autoloadhtmlcss($className){
    $pash='./classes/';
>>>>>>> 56972e4d03d1447fabecca6c69a4db2fd3662ab9
    $ex='.class.php';
    $fileName= $pash.$className.$ex;
    $pathFileName=strtolower($fileName);

    if(!file_exists($pathFileName)){
        return false;
    }


    include_once ($pathFileName);
}

