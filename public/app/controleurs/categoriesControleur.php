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
    // Je la mets directement dans la vue index
      include_once '../app/vues/categories/index.php';
  }
