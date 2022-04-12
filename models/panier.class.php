<?php



class Panier extends DataBase
{



   public function addCart($idproduitd)
   {

      $getproduit = $this->connect()->prepare("SELECT * FROM articles_commande WHERE id_produit = ?");
      $getproduit->execute(array($idproduitd));
      $produitcount = $getproduit->rowCount();

      $produitinfos = $getproduit->fetch();

      if ($produitcount == 0) {
         $insertcart = $this->connect()->prepare("INSERT INTO articles_commande (id_produit, id_utilisateur, quantite) VALUES (?, ?, ?)");
         $insertcart->execute(array($idproduitd, $_SESSION['id'], 1));
      } else {
         $quantite = $produitinfos['quantite'] + 1;
         $updatecart = $this->connect()->prepare("UPDATE articles_commande SET quantite = ? WHERE id_produit = ? AND id_utilisateur = ?");
         $updatecart->execute(array($quantite, $idproduitd, $_SESSION['id']));
      }
   }



   public function deleteCart($idcart)
   {
      $deletecart = $this->connect()->prepare('DELETE FROM articles_commande WHERE id_produit = ? AND id_utilisateur = ?');
      $deletecart->execute(array($idcart, $_SESSION['id']));
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

   // public function modifierQTeArticle($libelleProduit, $qteProduit)
   // {
   //    //Si le panier existe
   //    if (creationPanier() && !isVerrouille()) {
   //       //Si la quantité est positive on modifie sinon on supprime l'article
   //       if ($qteProduit > 0) {
   //          //Recherche du produit dans le panier
   //          $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

   //          if ($positionProduit !== false) {
   //             $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit;
   //          }
   //       } else
   //          supprimerArticle($libelleProduit);
   //    } else
   //       echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   // }
   // //modifier le montant du panier

   // public function MontantGlobal()
   // {
   //    $total = 0;
   //    for ($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) {
   //       $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   //    }
   //    return $total;
   // }

   // //verifier le panier

   // public function isVerrouille()
   // {
   //    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   //       return true;
   //    else
   //       return false;
   // }



   // /**
   //  * Verifie si le panier existe, le crée sinon
   //  * @return booleen
   //  */
   // function creationPanier()
   // {
   //    if (!isset($_SESSION['panier'])) {
   //       $_SESSION['panier'] = array();
   //       $_SESSION['panier']['libelleProduit'] = array();
   //       $_SESSION['panier']['qteProduit'] = array();
   //       $_SESSION['panier']['prixProduit'] = array();
   //       $_SESSION['panier']['verrou'] = false;
   //    }
   //    return true;
   // }


   // /**
   //  * Ajoute un article dans le panier
   //  * @param string $libelleProduit
   //  * @param int $qteProduit
   //  * @param float $prixProduit
   //  * @return void
   //  */
   // function ajouterArticle($libelleProduit, $qteProduit, $prixProduit)
   // {

   //    //Si le panier existe
   //    if (creationPanier() && !isVerrouille()) {
   //       //Si le produit existe déjà on ajoute seulement la quantité
   //       $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

   //       if ($positionProduit !== false) {
   //          $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit;
   //       } else {
   //          //Sinon on ajoute le produit
   //          array_push($_SESSION['panier']['libelleProduit'], $libelleProduit);
   //          array_push($_SESSION['panier']['qteProduit'], $qteProduit);
   //          array_push($_SESSION['panier']['prixProduit'], $prixProduit);
   //       }
   //    } else
   //       echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   // }



   // /**
   //  * Modifie la quantité d'un article
   //  * @param $libelleProduit
   //  * @param $qteProduit
   //  * @return void
   //  */
   // function modifierQTeArticle($libelleProduit, $qteProduit)
   // {
   //    //Si le panier existe
   //    if (creationPanier() && !isVerrouille()) {
   //       //Si la quantité est positive on modifie sinon on supprime l'article
   //       if ($qteProduit > 0) {
   //          //Recharche du produit dans le panier
   //          $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

   //          if ($positionProduit !== false) {
   //             $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit;
   //          }
   //       } else
   //          supprimerArticle($libelleProduit);
   //    } else
   //       echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   // }

   // /**
   //  * Supprime un article du panier
   //  * @param $libelleProduit
   //  * @return unknown_type
   //  */
   // function supprimerArticle($libelleProduit)
   // {
   //    //Si le panier existe
   //    if (creationPanier() && !isVerrouille()) {
   //       //Nous allons passer par un panier temporaire
   //       $tmp = array();
   //       $tmp['libelleProduit'] = array();
   //       $tmp['qteProduit'] = array();
   //       $tmp['prixProduit'] = array();
   //       $tmp['verrou'] = $_SESSION['panier']['verrou'];

   //       for ($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) {
   //          if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit) {
   //             array_push($tmp['libelleProduit'], $_SESSION['panier']['libelleProduit'][$i]);
   //             array_push($tmp['qteProduit'], $_SESSION['panier']['qteProduit'][$i]);
   //             array_push($tmp['prixProduit'], $_SESSION['panier']['prixProduit'][$i]);
   //          }
   //       }
   //       //On remplace le panier en session par notre panier temporaire à jour
   //       $_SESSION['panier'] =  $tmp;
   //       //On efface notre panier temporaire
   //       unset($tmp);
   //    } else
   //       echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   // }


   // /**
   //  * Montant total du panier
   //  * @return int
   //  */
   // function MontantGlobal()
   // {
   //    $total = 0;
   //    for ($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) {
   //       $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   //    }
   //    return $total;
   // }


   // /**
   //  * Fonction de suppression du panier
   //  * @return void
   //  */
   // function supprimePanier()
   // {
   //    unset($_SESSION['panier']);
   // }

   // /**
   //  * Permet de savoir si le panier est verrouillé
   //  * @return booleen
   //  */
   // function isVerrouille()
   // {
   //    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   //       return true;
   //    else
   //       return false;
   // }

   // /**
   //  * Compte le nombre d'articles différents dans le panier
   //  * @return int
   //  */
   // function compterArticles()
   // {
   //    if (isset($_SESSION['panier']))
   //       return count($_SESSION['panier']['libelleProduit']);
   //    else
   //       return 0;
   // }
}

$panier = new Panier();
