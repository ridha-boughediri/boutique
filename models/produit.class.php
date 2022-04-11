
<?php


<<<<<<< HEAD
class Produit extends DataBase{


    public function getProduit(){
      $sql = "SELECT * FROM produit";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();

      return $stmt;
    
      // while($result = $stmt->fetchAll()) {
      //   return $result;
      // }
    }


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

  public function displayproduitbyID(){
    $sql= "SELECT FROM produit LIMIT 3";
    $stmt=$this->connect()->prepare($sql);
=======
class Produit extends DataBase
{


  public function getProduit()
  {
    $sql = "SELECT * FROM produit";
    $stmt = $this->connect()->prepare($sql);
>>>>>>> 6cdfcde1a0f1af0ec8f3778f839ca4b437eaff5f
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }


  public function insert($nom_produit, $description_produit, $prix_produit, $id_categorie, $id_sous_catégorie, $id_couleur, $id_produit_type, $avatarname, $avatartype, $avatartmp_name, $avatarerror, $avatarsize, $qte_stock)
  {
    if (!empty($nom_produit) && !empty($description_produit) && !empty($prix_produit) && !empty($id_categorie) && !empty($id_sous_catégorie) && !empty($id_couleur) && !empty($id_produit_type) && !empty($qte_stock)) {
      if (isset($_FILES['file'])) {
        $tailleMax = 2097152;
        $extensionsValide = array('jpg', 'jpeg', 'gif', 'png');

        if ($avatarsize <= $tailleMax) {
          $extensionUpload = strtolower(substr(strrchr($avatarname, '.'), 1));
          if (in_array($extensionUpload, $extensionsValide)) {
            $chemin = "../views/img/admin/" . $nom_produit . "." . $extensionUpload;
            $resultat = move_uploaded_file($avatartmp_name, $chemin);
            if ($resultat) {
              $nameofavatar = $nom_produit . "." . $extensionUpload;
              $insertprod = $this->connect()->prepare("INSERT INTO produit (nom_produit, description_produit, prix_produit, id_categorie, id_sous_catégorie, id_couleur, id_produit_type, file_images, qte_stock) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
              $insertprod->execute(array($nom_produit, $description_produit, $prix_produit, $id_categorie, $id_sous_catégorie, $id_couleur, $id_produit_type, $nameofavatar, $qte_stock));

              return "Votre produit à été créer !";
            } else {
              return "Il y a eu une erreur pendant l'importation du fichier !";
            }
          } else {
            return "L'image du produit doit être au format jpg jpeg gif ou png !";
          }
        } else {
          return "L'image du produit ne doit pas dépasser 2 mo !";
        }
      } else {
        return "L'image du produit n'a pas été modifié !";
      }
    } else {
      return "Veuillez remplir tout les champs !";
    }
  }


  public function update($idproduit, $nom_produit, $description_produit, $prix_produit, $idcategorie, $idsouscategorie, $idcouleur, $type, $avatarname, $avatartype, $avatartmp_name, $avatarerror, $avatarsize, $qte_stock)
  {
    if (!empty($nom_produit)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET nom_produit = ? WHERE id_produit = ?");
      $insertprod->execute(array($nom_produit, $idproduit));
    } else {
      return "Le nom du produit n'a pas été modifié !";
    }

    if (!empty($description_produit)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET description_produit = ? WHERE id_produit = ?");
      $insertprod->execute(array($description_produit, $idproduit));
    } else {
      return "La description du produit n'a pas été modifié !";
    }

    if (!empty($prix_produit)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET prix_produit = ? WHERE id_produit = ?");
      $insertprod->execute(array($prix_produit, $idproduit));
    } else {
      return "Le prix n'a pas été modifié !";
    }

    if (!empty($idcategorie)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET id_categorie  = ? WHERE id_produit = ?");
      $insertprod->execute(array($idcategorie, $idproduit));
    } else {
      return "La categorie n'a pas été modifié !";
    }

    if (!empty($idsouscategorie)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET id_sous_catégorie = ? WHERE id_produit = ?");
      $insertprod->execute(array($idsouscategorie, $idproduit));
    } else {
      return "La sous-categorie n'a pas été modifié !";
    }

    if (!empty($idcouleur)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET id_couleur = ? WHERE id_produit = ?");
      $insertprod->execute(array($idcouleur, $idproduit));
    } else {
      return "La couleur n'a pas été modifié !";
    }

    if (!empty($type)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET id_produit_type = ? WHERE id_produit = ?");
      $insertprod->execute(array($type, $idproduit));
    } else {
      return "Le type du produit n'a pas été modifié !";
    }

    if (!empty($qte_stock)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET qte_stock = ? WHERE id_produit = ?");
      $insertprod->execute(array($qte_stock, $idproduit));
    } else {
      return "La quantité n'a pas été modifié !";
    }

    if (isset($_FILES['file'])) {
      $tailleMax = 2097152;
      $extensionsValide = array('jpg', 'jpeg', 'gif', 'png');

      if ($avatarsize <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($avatarname, '.'), 1));
        if (in_array($extensionUpload, $extensionsValide)) {
          $chemin = "../views/img/admin/" . $nom_produit . "." . $extensionUpload;
          $resultat = move_uploaded_file($avatartmp_name, $chemin);
          if ($resultat) {
            $nameofavatar = $nom_produit . "." . $extensionUpload;
            $insertprod = $this->connect()->prepare("UPDATE produit SET file_images = ? WHERE id_produit = ?");
            $insertprod->execute(array($nameofavatar, $idproduit));

            return "Votre produit à été créer !";
          } else {
            return "Il y a eu une erreur pendant l'importation du fichier !";
          }
        } else {
          return "L'image du produit doit être au format jpg jpeg gif ou png !";
        }
      } else {
        return "L'image du produit ne doit pas dépasser 2 mo !";
      }
    }
  }



  public function DeleProduit($id_produit)
  {
    $sql = "DELETE FROM produit WHERE id_produit = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_produit]);
    return 'Le produit n°' . $id_produit . 'a été supprimé !';
  }

  public function displayproduitbyID()
  {
    $sql = "SELECT FROM produit LIMIT 3";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }
}

$monproduit = new Produit();

    $newproduit = new Produit();


?>


