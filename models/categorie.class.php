<?php


class Categorie extends DataBase
{

  public function getCate()
  {
    $sql = "SELECT * FROM categories";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    return $stmt;
  }

  public function CreateCate($nom_categorie)
  {
    $sql = "INSERT INTO categories(nom_categorie) VALUES (?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom_categorie]);
    return 'La Catégorie a été crée !';
  }

  

  public function Editecategorie($id_categorie)
  {
    $sql = "SELECT * FROM categories where id_categorie =?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(["$id_categorie"]);
    $result = $stmt->fetch();
    return $result;
  }

  public function UpdateCategorie($nom_categorie, $id_categorie)
  {

    $sql = "UPDATE `categories` SET `nom_categorie`= ? Where `id_categorie` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom_categorie, $id_categorie]);
    return 'La Catégorie a été modifié !';
  }

  public function DeleCate($id_categorie)
  {
    $sql = "DELETE FROM categories WHERE id_categorie=?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id_categorie]);
    return 'La Catégorie a été supprimé !';
  }
}
