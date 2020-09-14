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
                   posts.author_id AS authorId,
                   categories.name AS ctgName
           FROM posts
           JOIN categories ON posts.categorie_id = categories.id
           WHERE posts.id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

  function findAllBySearch(\PDO $connexion, string $search) {
    $words = explode(' ', trim($search));
    $sql = "SELECT DISTINCT posts.id AS postId,
                            posts.title AS postTitle,
                            posts.content AS postContent,
                            posts.created_at AS postDate,
                            posts.image AS postImage,
                            posts.author_id AS authorId,
                            categories.name AS ctgName
            FROM posts
            JOIN authors ON posts.author_id = authors.id
            JOIN categories ON posts.categorie_id = categories.id
            WHERE 1 = 0 ";
    for ($i=0; $i<count($words); $i++):
       $sql .= "OR posts.title       LIKE :word$i
                OR posts.content     LIKE :word$i
                OR categories.name   LIKE :word$i
                OR authors.firstname LIKE :word$i
                OR authors.lastname  LIKE :word$i ";
    endfor;
    $sql .= ";";

    $rs = $connexion->prepare($sql);
    for ($i=0; $i<count($words); $i++):
      $rs->bindValue(":word$i", '%'.$words[$i].'%', \PDO::PARAM_STR);
    endfor;
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }	
