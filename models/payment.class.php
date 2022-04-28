<?php



class Paiement extends DataBase
{
   public function addPaiement($cardcart, $expcart, $cvvcart)
   {

      $getpaiement = $this->connect()->prepare("SELECT * FROM paiement WHERE id_produit = ? AND id_utilisateur = ?");
      $getpaiement->execute(array($_SESSION['id']));
      $paiementcount = $getpaiement->rowCount();

      $paiementinfos = $getpaiement->fetch();

      // if ($produitcount == 0) {
      //    $insertcart = $this->connect()->prepare("INSERT INTO panier (id_produit, id_utilisateur, quantite) VALUES (?, ?, ?)");
      //    $insertcart->execute(array($idproduitd, $_SESSION['id'], 1));

      //    $getproduitc = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
      //    $getproduitc->execute(array($_SESSION['id']));
      //    $produitc = $getproduitc->rowCount();

      //    return $produitc;
      // } else {
      //    $quantite = $produitinfos['quantite'] + 1;
      //    $updatecart = $this->connect()->prepare("UPDATE panier SET quantite = ? WHERE id_produit = ? AND id_utilisateur = ?");
      //    $updatecart->execute(array($quantite, $idproduitd, $_SESSION['id']));

      //    $getproduitc = $this->connect()->prepare("SELECT * FROM panier WHERE id_utilisateur = ?");
      //    $getproduitc->execute(array($_SESSION['id']));
      //    $produitc = $getproduitc->rowCount();

      //    return $produitc;
      // }
   }
}
