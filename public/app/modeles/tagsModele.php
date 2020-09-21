<?php
/*
  ./app/modeles/tagsModele.php
 */
namespace App\Modeles\TagsModele;


  function findAll(\PDO $connexion) {
    $sql = "SELECT tags.id,
                   tags.name,
                   tags.created_at,
                   COUNT(posts_has_tags.post_id) AS nbrPosts
            FROM tags
            RIGHT JOIN posts_has_tags ON posts_has_tags.tag_id = tags.id
            GROUP BY tags.id
            ORDER BY COUNT(posts_has_tags.post_id) DESC
            LIMIT 8;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
