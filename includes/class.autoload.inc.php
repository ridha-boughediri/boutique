<?php

spl_autoload_register("myautoloader");





function myautoloader($className)
{
    $pash = '../classes/';
    $ex = '.class.php';
    $fileName = $pash . $className . $ex;
    $pathFileName = strtolower($fileName);

    if (!file_exists($pathFileName)) {
        return false;
    }


    include_once($pathFileName);
}
