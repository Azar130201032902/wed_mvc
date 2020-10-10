<?php
/*
  ./app/controleurs/authorsControleur.php
  CONTROLEUR DES AUTHORS
 */
namespace App\Controleurs\AuthorsControleur;
use \App\Modeles\AuthorsModele;

  function indexAction(\PDO $connexion) {
    // Je demande au modèle la liste des authors
      include_once '../app/modeles/authorsModele.php';
      $authors = AuthorsModele\findAll($connexion);
    // Je charge la vue index dans $content
      GLOBAL $content, $title;
      $title = TITRE_AUTHORS_INDEX;
      ob_start();
        include_once '../app/vues/authors/index.php';
      $content = ob_get_clean();
  }

  function addFormAction(\PDO $connexion) {
    // Je charge la vue index dans $content
      GLOBAL $content, $title;
      $title = TITRE_AUTHORS_ADDFORM;
      ob_start();
        include_once '../app/vues/authors/addForm.php';
      $content = ob_get_clean();
  }

  function addAction(\PDO $connexion, array $data = null) {
    // Je demande au modèle d'ajouter l'author
      include_once '../app/modeles/authorsModele.php';
      $id = AuthorsModele\insert($connexion, $data);
    // Je redirige vers la liste des catégories
      header('location: ' . BASE_URL_ADMIN . 'authors');

  }

  function deleteAction(\PDO $connexion, int $id) {
    // Je demande au modèle de supprimer l'author
      include_once '../app/modeles/authorsModele.php';
      $return = AuthorsModele\delete($connexion, $id);
    // Je redirige vers la liste des catégories
      header('location: ' . BASE_URL_ADMIN . 'authors');
  }

  function editFormAction(\PDO $connexion, int $id) {
    // Je demande au modèle le détail d'un author
      include_once '../app/modeles/authorsModele.php';
      $autor = AuthorsModele\findOneById($connexion, $id);

    // Je charge la vue dans $content
      GLOBAL $content, $title;
      $title = TITRE_AUTHORS_EDITFORM;
      ob_start();
        include_once '../app/vues/authors/editForm.php';
      $content = ob_get_clean();
  }

  function editAction(\PDO $connexion, array $data = null) {
    // Je demande au modèle d'update l'author
      include_once '../app/modeles/authorsModele.php';
      $return = AuthorsModele\update($connexion, $data);
    // Je redirige vers la liste des catégories
      header('location: ' . BASE_URL_ADMIN . 'authors');
  }
