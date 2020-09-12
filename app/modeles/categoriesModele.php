<?php
/*
  ./app/modeles/categoriesModele.php
 */
namespace App\Modeles\CategoriesModele;


  function findAll(\PDO $connexion) {
    $sql = "SELECT categories.id,
                   categories.name,
                   categories.created_at,
                   COUNT(posts.id) AS nbrPosts
            FROM categories
            LEFT JOIN posts ON posts.categorie_id = categories.id
            GROUP BY categories.id
            ORDER BY nbrPosts DESC
            LIMIT 6;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
