<?php
/*
  ./app/modeles/categoriesModele.php
 */
namespace App\Modeles\CategoriesModele;


  function findAll(\PDO $connexion) {
    $sql = "SELECT *
            FROM categories;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  function insert(\PDO $connexion, array $data = null) {
    $sql = "INSERT INTO categories
            SET name = :name,
                created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
    $rs->execute();
    return $connexion->lastInsertId();
  }

  function delete(\PDO $connexion, int $id) {
    $sql = "DELETE FROM categories
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    return intval($rs->execute());
  }

  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM categories
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(":id", $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

  function update(\PDO $connexion, array $data = null) {
    $sql = "UPDATE categories
            SET name = :name,
                created_at = NOW()
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
    $rs->bindValue(':name', $data['name'], \PDO::PARAM_STR);
    return intval($rs->execute());
  }
