<?php
<<<<<<< Updated upstream

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
=======
class Database
{

    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $pdo;



    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function bdd()
    {
        $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    }
}

>>>>>>> Stashed changes
