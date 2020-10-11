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
                   categories.name AS ctgName,
                   authors.firstName AS authorsName
            FROM posts
            JOIN categories ON posts.categorie_id = categories.id
            JOIN authors ON posts.author_id = authors.id
            ORDER BY postDate DESC;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
           FROM posts
           WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }

  function insertOne(\PDO $connexion, array $data = null) {
    $sql = "INSERT INTO posts
            SET title = :title,
                content = :content,
                categorie_id = :categorie,
                author_id = :author,
                created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
    $rs->bindValue(':content', $data['content'], \PDO::PARAM_STR);
    $rs->bindValue(':categorie', $data['categorie'], \PDO::PARAM_STR);
    $rs->bindValue(':author', $data['author'], \PDO::PARAM_INT);
    $rs->execute();
    return $connexion->lastInsertId();
  }

  function insertTagById(\PDO $connexion, array $data){
    $sql = "INSERT INTO posts_has_tags
            SET post_id = :postId,
                tag_id = :tagId";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':postId', $data['postId'], \PDO::PARAM_INT);
    $rs->bindValue(':tagId', $data['tagId'], \PDO::PARAM_INT);
    return $rs->execute();
  }

  function deletePostsHasTagsByTagsId(\PDO $connexion, int $postId) {
    $sql = "DELETE FROM posts_has_tags
            WHERE post_id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $postId, \PDO::PARAM_INT);
    return intval($rs->execute());
  }

  function deleteOneById(\PDO $connexion, int $id) {
    $sql = "DELETE FROM posts
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    return intval($rs->execute());
  }

  function update(\PDO $connexion, int $id, array $data = null) {
    $sql = "UPDATE posts
            SET title = :title,
                content = :content,
                created_at = NOW(),
                author_id = :author,
                categorie_id = :categorie
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
    $rs->bindValue(':content', $data['content'], \PDO::PARAM_STR);
    $rs->bindValue(':author', $data['author'], \PDO::PARAM_INT);
    $rs->bindValue(':categorie', $data['categorie'], \PDO::PARAM_INT);
    return intval($rs->execute());
  }

  function findTagsByPostId(\PDO $connexion, int $id) {
    $sql = "SELECT tag_id
            FROM posts_has_tags
            WHERE post_id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_COLUMN);
  }
