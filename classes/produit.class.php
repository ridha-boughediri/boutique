
<?php


class Produit extends DataBase{


    public function getProduit(){
      $sql = "SELECT * FROM produit";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    
      while($result = $stmt->fetchAll()) {
        return $result;
      }}

      public function CreateCate($produit_titre,$description,$produit_prix,$id_categorie,$id_couleur,$id_sous_categorie,$images) {
      $sql = "INSERT INTO produit(produit_titre,description,produit_prix,id_categorie,id_couleur,id_sous_categorie,images) VALUES (?,?,?,?,?,?,?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$produit_titre,$description,$produit_prix,$id_categorie,$id_couleur,$id_sous_categorie,$images]);
    }


    



    }


?>


