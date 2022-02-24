<?php



class Souscategorie extends DataBase{

    public function getCateSou(){
        $sql = "SELECT * FROM sous_catégorie";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
      
        while($result = $stmt->fetchAll()) {
          return $result;
        }
      }
    
       public function CreateCateSOU($id_categorie,$nom_sous_catégorie) {
       
       $sql="INSERT INTO sous_catégorie(id_categorie,nom_sous_catégorie) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_categorie,$nom_sous_catégorie]);
      }
      

      public function EditeSouscategorie($id_sous_catégorie) {
        $sql = "SELECT * FROM sous_catégorie where id_sous_catégorie =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(["$id_sous_catégorie"]);
        $result=$stmt->fetch();
        return $result;
  
      }

      public function ShowIdSubcate($id_categorie,$nom_sous_catégorie,$id_sous_catégorie) {
        // var_dump("ridha");
        $sql="UPDATE sous_catégorie SET id_categorie=?,nom_sous_catégorie=? WHERE id_sous_catégorie= ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id_categorie,$nom_sous_catégorie,$id_sous_catégorie]);
      }

  
  
      
      public function DeleSubCate($id_sous_catégorie){
        var_dump($id_sous_catégorie);
        $sql= "DELETE FROM sous_catégorie WHERE id_sous_catégorie=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$id_sous_catégorie]);
      }
      

       
      public function Getid($id_categorie){
       
        $sql= "SELECT * FROM sous_catégorie WHERE id_categorie=?";
        $stmt=$this->connect()->prepare("SELECT * FROM sous_catégorie WHERE id_categorie=?");
        $stmt->execute([$id_categorie]);
        var_dump($stmt->execute([$id_categorie]));

        $result=$stmt->fetchall();
        return $result;
        
      }
      
    

}
