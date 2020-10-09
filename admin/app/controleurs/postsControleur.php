<?php
/*
  ./app/controleurs/postsControleur.php
  CONTROLEUR DES POSTS
 */
namespace App\Controleurs\PostsControleur;
use App\Modeles\PostsModele;

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

  function addFormAction(\PDO $connexion) {
    // Je vais chercher les auteurs
      include_once '../app/modeles/authorsModele.php';
      $authors = \App\Modeles\AuthorsModele\findAll($connexion);

    // Je vais chercher les categories
      include_once '../app/modeles/categoriesModele.php';
      $categories = \App\Modeles\CategoriesModele\findAll($connexion);

    // Je vais chercher les tags
      include_once '../app/modeles/tagsModele.php';
      $tags = \App\Modeles\tagsModele\findAll($connexion);

    // Je charge la vue addForm dans $content
      GLOBAL $content, $title;
      $title = TITRE_POSTS_ADDFORM;
      ob_start();
        include_once '../app/vues/posts/addForm.php';
      $content = ob_get_clean();
  }

  function insertAction(\PDO $connexion) {
    // Je demande au modèle d'ajouter le post
      include_once '../app/modeles/postsModele.php';
      $id = PostsModele\insertOne($connexion, $_POST);

    // Je demande au modèle d'ajouter les tags correspondants
      foreach ($_POST['tags'] as $tagId):
        $return = PostsModele\insertTagById($connexion, [
          'postId' => $id,
          'tagId' => $tagId
        ]);
      endforeach;
    
    // Je redirige vers la liste des posts
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/admin/www/posts');
  }

  function deleteAction(\PDO $connexion, int $id) {
    // Je demande au modèle de supprimer la liaison n-m
      include_once '../app/modeles/postsModele.php';
      $return1 = PostsModele\deletePostsHasTagsByTagsId($connexion, $id);

    // Je demande au modèle de supprimer le post
      $return2 = PostsModele\deleteOneById($connexion, $id);
    // Je redirige vers la liste des tags
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/admin/www/posts');
  }

  function editFormAction(\PDO $connexion, int $id) {
    // Je demande au modèle le détail d'un post
      include_once '../app/modeles/postsModele.php';
      $post = PostsModele\findOneById($connexion, $id);

    // Je charge la vue dans $content
      GLOBAL $content, $title;
      $title = TITRE_POSTS_EDITFORM;
      ob_start();
        include_once '../app/vues/posts/editForm.php';
      $content = ob_get_clean();
  }

  function editAction(\PDO $connexion, array $data = null) {
    // Je demande au modèle d'update le post
      include_once '../app/modeles/postsModele.php';
      $return = PostsModele\update($connexion, $data);
    // Je redirige vers la liste des posts
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/admin/www/posts');
  }
