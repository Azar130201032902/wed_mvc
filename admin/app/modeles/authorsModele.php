<?php
/*
  ./app/modeles/authorsModele.php
 */
namespace App\Modeles\AuthorsModele;


  function findAll(\PDO $connexion) {
    $sql = "SELECT *
            FROM authors;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  function insert(\PDO $connexion, array $data = null) {
    $sql = "INSERT INTO authors
            SET firstname = :firstname,
                lastname = :lastname,
                biography = :biography,
                created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':firstname', $data['firstname'], \PDO::PARAM_STR);
    $rs->bindValue(':lastname', $data['lastname'], \PDO::PARAM_STR);
    $rs->bindValue(':biography', $data['biography'], \PDO::PARAM_STR);
    $rs->execute();
    return $connexion->lastInsertId();
  }

  function delete(\PDO $connexion, int $id) {
    $sql = "DELETE FROM authors
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    return intval($rs->execute());
  }

  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM authors
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(":id", $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

  function update(\PDO $connexion, array $data = null) {
    $sql = "UPDATE authors
            SET firstname = :firstname,
                lastname = :lastname,
                biography = :biography,
                created_at = NOW()
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $data['id'], \PDO::PARAM_INT);
    $rs->bindValue(':firstname', $data['firstname'], \PDO::PARAM_STR);
    $rs->bindValue(':lastname', $data['lastname'], \PDO::PARAM_STR);
    $rs->bindValue(':biography', $data['biography'], \PDO::PARAM_STR);
    return intval($rs->execute());
  }
