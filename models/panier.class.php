<?php



class Panier extends DataBase
{



   public function addCart($idproduitd)
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_produit = ? AND id_utilisateur = ?");
      $getproduit->execute(array($idproduitd, $_SESSION['id']));
      $produitcount = $getproduit->rowCount();

      $produitinfos = $getproduit->fetch();

      if ($produitcount == 0) {
         $insertcart = $this->connect()->prepare("INSERT INTO articles_commande (id_produit, id_utilisateur, quantite) VALUES (?, ?, ?)");
         $insertcart->execute(array($idproduitd, $_SESSION['id'], 1));

         $getproduitc = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ?");
         $getproduitc->execute(array($_SESSION['id']));
         $produitc = $getproduitc->rowCount();

         return $produitc;
      } else {
         $quantite = $produitinfos['quantite'] + 1;
         $updatecart = $this->connect()->prepare("UPDATE articles_commande SET quantite = ? WHERE id_produit = ? AND id_utilisateur = ?");
         $updatecart->execute(array($quantite, $idproduitd, $_SESSION['id']));

         $getproduitc = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ?");
         $getproduitc->execute(array($_SESSION['id']));
         $produitc = $getproduitc->rowCount();

         return $produitc;
      }
   }



   public function deleteCart($idcart)
   {
      $deletecart = $this->connect()->prepare('DELETE FROM articles_commande WHERE id_produit = ? AND id_utilisateur = ?');
      $deletecart->execute(array($idcart, $_SESSION['id']));

      $getproduitc = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ?");
      $getproduitc->execute(array($_SESSION['id']));
      $produitc = $getproduitc->rowCount();

      return $produitc;
   }

   public function getAllCartById()
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ?");
      $getproduit->execute(array($_SESSION['id']));
      $produitinfos = $getproduit->fetchAll();

      return $produitinfos;
   }

   public function getAllProduitCartById()
   {
      $getcart = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ? LIMIT 5");
      $getcart->execute(array($_SESSION['id']));
      $cartinfos = $getcart->fetchAll();

      return $cartinfos;
   }

   public function countAllCartById()
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ?");
      $getproduit->execute(array($_SESSION['id']));
      $produitcount = $getproduit->rowCount();

      return $produitcount;
   }


   public function countAllCartByIdProduit($idproduit)
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ? and id_produit = ?");
      $getproduit->execute(array($_SESSION['id'], $idproduit));
      $produitcount = $getproduit->rowCount();

      return $produitcount;
   }

   public function getAllPriceTotal()
   {
      $getproduit = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_utilisateur = ?");
      $getproduit->execute(array($_SESSION['id']));
      $produitcount = $getproduit->fetchAll();

      return $produitcount;
   }

}

$panier = new Panier();
