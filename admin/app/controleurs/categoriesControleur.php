<?php
/*
  ./app/controleurs/categoriesControleur.php
  CONTROLEUR DES CATEGORIES
 */
namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele;

  function indexAction(\PDO $connexion) {
    // Je demande au modèle la liste des categories
      include_once '../app/modeles/categoriesModele.php';
      $categories = CategoriesModele\findAll($connexion);
    // Je charge la vue index dans $content
      GLOBAL $content, $title;
      $title = TITRE_CATEGORIES_INDEX;
      ob_start();
        include_once '../app/vues/categories/index.php';
      $content = ob_get_clean();
  }

  function addFormAction(\PDO $connexion) {
    // Je charge la vue index dans $content
      GLOBAL $content, $title;
      $title = TITRE_CATEGORIES_ADDFORM;
      ob_start();
        include_once '../app/vues/categories/addForm.php';
      $content = ob_get_clean();
  }

  function addAction(\PDO $connexion, array $data = null) {
    // Je demande au modèle d'ajouter la catégorie
      include_once '../app/modeles/categoriesModele.php';
      $id = CategoriesModele\insert($connexion, $data);
    // Je redirige vers la liste des catégories
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/admin/www/categories');

  }

  function deleteAction(\PDO $connexion, int $id) {
    // Je demande au modèle de supprimer la catégorie
      include_once '../app/modeles/categoriesModele.php';
      $return = CategoriesModele\delete($connexion, $id);
    // Je redirige vers la liste des catégories
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/admin/www/categories');
  }

  function editFormAction(\PDO $connexion, int $id) {
    // Je demande au modèle le détail d'une catégorie
      include_once '../app/modeles/categoriesModele.php';
      $categorie = CategoriesModele\findOneById($connexion, $id);

    // Je charge la vue dans $content
      GLOBAL $content, $title;
      $title = TITRE_CATEGORIES_EDITFORM;
      ob_start();
        include_once '../app/vues/categories/editForm.php';
      $content = ob_get_clean();
  }

  function editAction(\PDO $connexion, array $data = null) {
    // Je demande au modèle d'update la catégorie
      include_once '../app/modeles/categoriesModele.php';
      $return = CategoriesModele\update($connexion, $data);
    // Je redirige vers la liste des catégories
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/admin/www/categories');
  }
