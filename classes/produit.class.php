
<?php


class Produit extends DataBase{


    public function getProduit(){
      $sql = "SELECT * FROM produit";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    
      while($result = $stmt->fetchAll()) {
        return $result;
      }}


      public function insert($nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$file_images,$qte_stock){
      $sql="INSERT INTO produit(nom_produit,description_produit,prix_produit,id_categorie,id_sous_catégorie,id_couleur,id_produit_type,file_images,qte_stock) VALUES (?,?,?,?,?,?,?,?,?)";      
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$file_images,$qte_stock]);
      
      
    }
     
      
      
    public function DeleProduit($id_produit){
      $sql= "DELETE FROM produit WHERE id_produit=?";
      $stmt=$this->connect()->prepare($sql);
      $stmt->execute([$id_produit]);
    }

  public function displayproduit(){}


    }


?>


