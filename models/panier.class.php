<?php



class Panier extends DataBase
{
   public function addCart($idproduitd)
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM panier WHERE id_produit = ? AND id_utilisateur = ?");
      $getproduit->execute(array($idproduitd, $_SESSION['id']));
      $produitcount = $getproduit->rowCount();

      $produitinfos = $getproduit->fetch();

      if ($produitcount == 0) {
         $insertcart = $this->connect()->prepare("INSERT INTO panier (id_produit, id_utilisateur, quantite) VALUES (?, ?, ?)");
         $insertcart->execute(array($idproduitd, $_SESSION['id'], 1));

         $getproduitc = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
         $getproduitc->execute(array($_SESSION['id']));
         $produitc = $getproduitc->rowCount();

         return $produitc;
      } else {
         $quantite = $produitinfos['quantite'] + 1;
         $updatecart = $this->connect()->prepare("UPDATE panier SET quantite = ? WHERE id_produit = ? AND id_utilisateur = ?");
         $updatecart->execute(array($quantite, $idproduitd, $_SESSION['id']));

         $getproduitc = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
         $getproduitc->execute(array($_SESSION['id']));
         $produitc = $getproduitc->rowCount();

         return $produitc;
      }
   }



   public function updateCart($idproduitd, $quantite)
   {
      $updatecart = $this->connect()->prepare("UPDATE panier SET quantite = ? WHERE id_produit = ? AND id_utilisateur = ?");
      $updatecart->execute(array($quantite, $idproduitd, $_SESSION['id']));
      
      
      $prixproduitallttc = 0;
      $getproduit = $this->connect()->prepare("SELECT * FROM produit WHERE id_produit = ?");
      $getproduit->execute(array($idproduitd));
      $produitinfos = $getproduit->fetch();


      $getpanier = $this->connect()->prepare("SELECT * FROM panier WHERE id_produit = ? AND id_utilisateur = ?");
      $getpanier->execute(array($idproduitd, $_SESSION['id']));
      $panierinfos = $getpanier->fetch();

      $prixproduitsolottc = $produitinfos['prix_produit'];
      $prixproduitsoloht = $produitinfos['prix_produit'] / (1 + 20);

      $prixproduitsolohtarrondaudiz = number_format($prixproduitsoloht, 2);

      $prixproduitallttc += $produitinfos['prix_produit'] * $panierinfos['quantite'];
      $prixproduitallht = $prixproduitallttc / (1 + 20);

      $prixproduitallhtarrondaudiz = number_format($prixproduitallht, 2);



      $prixglobal = $prixproduitallttc - $prixproduitallhtarrondaudiz;

      $prixglobalarrondaudiz = number_format($prixglobal, 2);

      return $prixproduitsolohtarrondaudiz . '/' . $prixproduitsolottc . '/' . $prixglobalarrondaudiz . '/' . $prixproduitallhtarrondaudiz . '/' . $prixproduitallttc;
   }



   public function deleteCart($idcart)
   {
      $deletecart = $this->connect()->prepare('DELETE FROM panier WHERE id_produit = ? AND id_utilisateur = ?');
      $deletecart->execute(array($idcart, $_SESSION['id']));

      $getproduitc = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
      $getproduitc->execute(array($_SESSION['id']));
      $produitc = $getproduitc->rowCount();

      return $produitc;
   }

   public function getAllCartById()
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
      $getproduit->execute(array($_SESSION['id']));
      $produitinfos = $getproduit->fetchAll();

      return $produitinfos;
   }

   public function getAllProduitCartById()
   {
      $getcart = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ? LIMIT 5");
      $getcart->execute(array($_SESSION['id']));
      $cartinfos = $getcart->fetchAll();

      return $cartinfos;
   }

   public function countAllCartById()
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
      $getproduit->execute(array($_SESSION['id']));
      $produitcount = $getproduit->rowCount();

      return $produitcount;
   }


   public function countAllCartByIdProduit($idproduit)
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ? and id_produit = ?");
      $getproduit->execute(array($_SESSION['id'], $idproduit));
      $produitcount = $getproduit->rowCount();

      return $produitcount;
   }

   public function getAllPriceTotal()
   {
      $getproduit = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
      $getproduit->execute(array($_SESSION['id']));
      $produitcount = $getproduit->fetchAll();

      return $produitcount;
   }
}
