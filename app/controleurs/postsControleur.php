<?php
/*
  ./app/controleurs/postsControleur.php
  CONTROLEUR DES POSTS
 */
namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;

  function indexAction(\PDO $connexion) {
    // Je demande au modèle la liste des posts
      include_once '../app/modeles/postsModele.php';
      $posts = PostsModele\findAll($connexion);
    // Je la mets dans le $content
    GLOBAL $content, $title;
    $title = TITRE_POSTS_INDEX;
    ob_start();
      include_once '../app/vues/posts/index.php';
    $content = ob_get_clean();
  }

  function showAction(\PDO $connexion, int $id) {
    // Je demande au modèle le détail d'un post
      include_once '../app/modeles/postsModele.php';
      $post = PostsModele\findOneById($connexion, $id);

    // Je demande au modèle l'autheur du post
      include_once '../app/modeles/authorsModele.php';
      $author = \App\Modeles\AuthorsModele\findOneById($connexion, $post['authorId']);

    // Je la mets dans le $content
    GLOBAL $content, $title;
    $title = $post['postTitle'];
    ob_start();
      include_once '../app/vues/posts/show.php';
    $content = ob_get_clean();
  }
