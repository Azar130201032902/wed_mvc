<?php
/*
  ./app/controleurs/tagsControleur.php
  CONTROLEUR DES TAGS
 */
namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

  function indexAction(\PDO $connexion) {
    // Je demande au modèle la liste des tags
      include_once '../app/modeles/tagsModele.php';
      $tags = TagsModele\findAll($connexion);
    // Je charge la vue dans $content
      GLOBAL $content, $title;
      $title = TITRE_TAGS_INDEX;
      ob_start();
        include_once '../app/vues/tags/index.php';
      $content = ob_get_clean();
  }

  function addFormAction(\PDO $connexion) {
    // Je charge la vue index dans $content
      GLOBAL $content, $title;
      $title = TITRE_TAGS_ADDFORM;
      ob_start();
        include_once '../app/vues/tags/addForm.php';
      $content = ob_get_clean();
  }

  function addAction(\PDO $connexion, array $data = null) {
    // Je demande au modèle d'ajouter le tag
      include_once '../app/modeles/tagsModele.php';
      $id = TagsModele\insert($connexion, $data);
    // Je redirige vers la liste des tags
      header('location: ' . BASE_URL_ADMIN . 'tags');

  }

  function deleteAction(\PDO $connexion, int $id) {
    // Je demande au modèle de supprimer la liaison n-m
      include_once '../app/modeles/tagsModele.php';
      $return1 = TagsModele\deletePostsHasTagsByTagsId($connexion, $id);

    // Je demande au modèle de supprimer le tag
      include_once '../app/modeles/tagsModele.php';
      $return2 = TagsModele\deleteOneById($connexion, $id);
    // Je redirige vers la liste des tags
      header('location: ' . BASE_URL_ADMIN . 'tags');
  }

  function editFormAction(\PDO $connexion, int $id) {
    // Je demande au modèle le détail d'un tag
      include_once '../app/modeles/tagsModele.php';
      $tag = TagsModele\findOneById($connexion, $id);

    // Je charge la vue dans $content
      GLOBAL $content, $title;
      $title = TITRE_TAGS_EDITFORM;
      ob_start();
        include_once '../app/vues/tags/editForm.php';
      $content = ob_get_clean();
  }

  function editAction(\PDO $connexion, array $data = null) {
    // Je demande au modèle d'update le tag
      include_once '../app/modeles/tagsModele.php';
      $return = TagsModele\update($connexion, $data);
    // Je redirige vers la liste des tags
      header('location: ' . BASE_URL_ADMIN . 'tags');
  }
