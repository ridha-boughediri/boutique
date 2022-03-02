<?php

class DataBase{
    private $host="localhost";
    private $username="root";
<<<<<<< HEAD
    private $dbname="havana";
=======
    private $dbname="lahavane";
>>>>>>> 56972e4d03d1447fabecca6c69a4db2fd3662ab9
    private $pswd="";

    public function connect() {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->pswd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
      }

      
}

?>