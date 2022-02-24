
<?php


class Produit extends DataBase{


    public function getProduit(){
      $sql = "SELECT * FROM produit";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    
      while($result = $stmt->fetchAll()) {
        return $result;
      }}

      public function Createproduit($nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$images,$qte_stock){
      $sql2 = "SELECT id_categorie FROM sous_catégorie where id_sous_catégorie =?";
      $sql = "INSERT INTO produit(nom_produit,description_produit,prix_produit,id_categorie,id_sous_catégorie,id_couleur,id_produit_type,images,qte_stock) VALUES (?,?,?,?,?,?,?,?,?)";
      $stmt = $this->connect()->prepare($sql);
      $stmt2=$this->connect()->prepare($sql2);
      $stmt2->execute([$id_sous_catégorie]);
      $stmt->execute([$nom_produit,$description_produit,$prix_produit,$id_categorie,$id_sous_catégorie,$id_couleur,$id_produit_type,$images,$qte_stock]);
     
      }
     
     public function EditeSouscategorie($id_sous_catégorie) {
       $sql = "SELECT * FROM sous_catégorie where id_sous_catégorie =?";
       $stmt = $this->connect()->prepare($sql);
       $stmt->execute(["$id_sous_catégorie"]);
       $result=$stmt->fetch();
       return $result;
 
     }
    //  public function ShowIdSubcate($id_categorie,$nom_sous_catégorie,$id_sous_catégorie) {
    //    // var_dump("ridha");
    //    $sql="UPDATE sous_catégorie SET id_categorie=?,nom_sous_catégorie=? WHERE id_sous_catégorie= ?";
    //    $stmt = $this->connect()->prepare($sql);
    //    $stmt->execute([$id_categorie,$nom_sous_catégorie,$id_sous_catégorie]);
    //  }


    
    //  public function DeleSubCate($id_sous_catégorie){
    //    var_dump($id_sous_catégorie);
    //    $sql= "DELETE FROM sous_catégorie WHERE id_sous_catégorie=?";
    //    $stmt=$this->connect()->prepare($sql);
    //    $stmt->execute([$id_sous_catégorie]);
    //  }
     

      
    //  public function Getid($id_categorie){
      
    //    $sql= "SELECT * FROM sous_catégorie WHERE id_categorie=?";
    //    $stmt=$this->connect()->prepare("SELECT * FROM sous_catégorie WHERE id_categorie=?");
    //    $stmt->execute([$id_categorie]);
    //    var_dump($stmt->execute([$id_categorie]));

    //    $result=$stmt->fetchall();
    //    return $result;
       
    //  }
    



    }


?>


