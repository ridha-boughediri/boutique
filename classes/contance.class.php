<?php
 
 class Contenance extends DataBase{


    public function getContenace(){
      $sql = "SELECT * FROM contenance";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    
      while($result = $stmt->fetchAll()) {
        return $result;
      }}

      public function CreateContena($mus_contencance) {
        $sql = "INSERT INTO contenance(mus_contencance) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$mus_contencance]);
      }



    }
