<?php


class Couleur extends DataBase{


    public function getCoul(){
      $sql = "SELECT * FROM couleur";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    
      while($result = $stmt->fetchAll()) {
        return $result;
      }}
      public function CreateColor($couleur) {
        $sql = "INSERT INTO couleur(couleur) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$couleur]);
      }



    }


    

    

?>