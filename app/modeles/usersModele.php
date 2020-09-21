<?php
/*
  ./app/modeles/tagsModele.php
 */
namespace App\Modeles\UsersModele;


  function findOneByLoginPwd(\PDO $connexion, array $data = null) {
    $sql = "SELECT *
            FROM users
            WHERE login = :login
              AND password = :password;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':login', $data['login'], \PDO::PARAM_STR);
    $rs->bindValue(':password', $data['password'], \PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }
