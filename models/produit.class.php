
<?php


class Produit extends DataBase
{
  // private int $id;
  // private string $title;
  // private float $price;
  // private int $availableQuantity;


  // public function __construct($id, $title, $price, $availableQuantity)
  // {
  //     $this->id = $id;
  //     $this->title = $title;
  //     $this->price = $price;
  //     $this->availableQuantity = $availableQuantity;
  // }


  //  /**

  //   public function getId()
  //   {
  //       return $this->id;
  //   }

  //   /**

  //   public function setId($id)
  //   {
  //       $this->id = $id;
  //   }

  //   /**

  //   public function getTitle()
  //   {
  //       return $this->title;
  //   }

  //   /**
 
  //   public function setTitle($title)
  //   {
  //       $this->title = $title;
  //   }

  //   /**
  //    * @return float
  //    */
  //   public function getPrice()
  //   {
  //       return $this->price;
  //   }

  //   /**
  //    * @param float $price
  //    */
  //   public function setPrice($price)
  //   {
  //       $this->price = $price;
  //   }

  //   /**
  //    * @return int
  //    */
  //   public function getAvailableQuantity()
  //   {
  //       return $this->availableQuantity;
  //   }


  /**
   * Add Product $product into cart. If product already exists inside cart
   * it must update quantity.
   * This must create CartItem and return CartItem from method
   * Bonus: $quantity must not become more than whatever
   * is $availableQuantity of the Product
   *
   * @param Cart $cart
   * @param int  $quantity
   * @return \CartItem
   * @throws \Exception
   */

  // public function addToCart(Cart $cart, int $quantity)
  // {
  //     return $cart->addProduct($this, $quantity);
  // }

  // /**
  //  * Remove product from cart
  //  *
  //  * @param Cart $cart
  //  */
  // public function removeFromCart(Cart $cart)
  // {
  //     return $cart->removeProduct($this);
  // }


  public function getProduit()
  {
    $sql = "SELECT * FROM produit";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }

  public function getNewProduit()
  {
    $sql = "SELECT * FROM produit LIMIT 3";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    return $stmt;
  }

  public function getProduitById($id_produit)
  {
    $sql = "SELECT * FROM produit WHERE id_produit = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($id_produit));
    $result = $stmt->fetch();

    return $result;
  }

  public function getProduitByLike($search)
  {
    $sql = "SELECT * FROM produit WHERE nom_produit LIKE ? LIMIT 30";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array("%$search%"));
    $result = $stmt->fetchAll();

    return $result;
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
      return "Le prix n'a pas été modifié !";
    }

    if (!empty($idsouscategorie)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET id_sous_catégorie = ? WHERE id_produit = ?");
      $insertprod->execute(array($idsouscategorie, $idproduit));
    } else {
      return "Le prix n'a pas été modifié !";
    }

    if (!empty($idcouleur)) {
      $insertprod = $this->connect()->prepare("UPDATE produit SET id_couleur = ? WHERE id_produit = ?");
      $insertprod->execute(array($idcouleur, $idproduit));
    } else {
      return "Le prix n'a pas été modifié !";
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

  public function getProduitByCategorieAndSousCategorie($categorie, $souscategorie)
  {
    $sql = "SELECT * FROM produit WHERE id_categorie = ? AND id_sous_catégorie = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($categorie, $souscategorie));
    $result = $stmt->fetchall();

    return $result;
  }

  public function getProduitByCategorieAndSousCategorieAndColors($color, $categorie, $souscategorie)
  {
    $sql = "SELECT * FROM produit WHERE id_couleur = ? AND id_categorie = ? AND id_sous_catégorie = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($color, $categorie, $souscategorie));
    $result = $stmt->fetchall();

    return $result;
  }

  public function getproduitparsouscategorie($id_sous_catégorie)
  {
    $sql = "SELECT * FROM produit WHERE id_sous_catégorie = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($id_sous_catégorie));
    $result = $stmt->fetch();

    return $result;
  }
}


// $monproduit = new Produit();

?>


