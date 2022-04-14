<?php


class Couleur extends DataBase
{


  public function getCoul()
  {
    $sql = "SELECT * FROM couleur";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }

  public function CreateColor($nom_couleur)
  {
    $sql = "INSERT INTO couleur(nom_couleur) VALUES (:nom_couleur)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(['nom_couleur' => $nom_couleur]);
    return 'Votre couleur à été créer !';
  }

  public function ShowIDCoul($id_couleur)
  {
    $sql = "SELECT * FROM couleur where id_couleur =?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(["$id_couleur"]);
    $result = $stmt->fetch();
    return $result;
  }

  public function DeleCoul($id_couleur)
  {
    $sql = "DELETE FROM couleur WHERE id_couleur=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_couleur]);
    return 'Votre couleur à été supprimé !';
  }

  public function UpdateCouleurTong($nom_couleur, $id_couleur)
  {

    $sql = "UPDATE `couleur` SET `nom_couleur`= ? Where `id_couleur` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom_couleur, $id_couleur]);
    return 'Votre couleur à été modifié !';
  }
  // public function editeCate($nom_couleur, $id_couleur)
  // {

  //   $sql = "UPDATE categories SET nom_couleur=? Where id_categorie=?";
  //   $stmt = $this->connect()->prepare($sql);
  //   $stmt->execute($nom_couleur, $id_couleur);
  // }

  /**
   * Get the value of nom_couleur
   */
  public function getNom_couleur()
  {
    return $this->nom_couleur;
  }

  /**
   * Set the value of nom_couleur
   *
   * @return  self
   */
  public function setNom_couleur($nom_couleur)
  {
    $this->nom_couleur = $nom_couleur;

    return $this;
  }
}
// $couleur = new Couleur();

