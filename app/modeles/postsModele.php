<?php
/*
  ./app/modeles/postsModele.php
 */
namespace App\Modeles\PostsModele;


  function findAll(\PDO $connexion) {
    $sql = "SELECT posts.id AS postId,
                   posts.title AS postTitle,
                   posts.content AS postContent,
                   posts.created_at AS postDate,
                   posts.image AS postImage,
                   categories.name AS ctgName
            FROM posts
            JOIN categories ON posts.categorie_id = categories.id
            ORDER BY postDate DESC
            LIMIT 5;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT posts.id AS postId,
                   posts.title AS postTitle,
                   posts.content AS postContent,
                   posts.created_at AS postDate,
                   posts.image AS postImage,
                   categories.name AS ctgName
           FROM posts
           JOIN categories ON posts.categorie_id = categories.id
           WHERE posts.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }
