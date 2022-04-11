<?php


class Type extends DataBase
{


  public function getidTypeproduct()
  {
    $sql = "SELECT * FROM produit_type";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt;
    // while ($result = $stmt->fetchAll()) {
    //   return $result;
    // }
    // var_dump($result);
  }

  //  public function CreateTypeProduct($nom_categorie) {
  //   $sql = "INSERT INTO produit_type(nom_produit_type) VALUES (?)";
  //   $stmt = $this->connect()->prepare($sql);
  //   $stmt->execute([$nom_categorie]);
  // }

  // public function EditetypeProduct($id_produit_type) {
  //   $sql = "SELECT * FROM produit_type where id_produit_type =?";
  //   $stmt = $this->connect()->prepare($sql);
  //   $stmt->execute(["$id_produit_type"]);
  //   $result=$stmt->fetch();
  //   return $result;

  // }

  // public function UpdatetypeProduct($nom_produit_type,$id_produit_type){

  //   $sql="UPDATE produit_type SET `nom_produit_type= ? Where id_produit_type = ?";
  //   $stmt=$this->connect()->prepare($sql);
  //   $stmt->execute([$nom_produit_type,$id_produit_type]);

  //   }

  // public function DeleTypeProduct($id_produit_type){
  //   $sql= "DELETE FROM produit_type WHERE id_categorie=?";
  //   $stmt=$this->connect()->prepare($sql);
  //   $stmt->execute([$id_produit_type]);

  // }



}

$type = new Type();
