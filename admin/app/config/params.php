<?php
/*
  ./app/config/params.php
 */


  // PARAMETRES DE CONNEXION A LA BASE DE DONNEES
      define('HOSTNAME', 'localhost:8889');
      define('DBNAME', 'wed_project');
      define('USERNAME', 'root');
      define('USERPWD', 'root');

  // INITIALISATION DES ZONES DYNAMIQUES
      $content = '';
      $title = '';

  // TITRE
    define('TITRE_USERS_DASHBOARD', "Dashboard");
    define('TITRE_CATEGORIES_INDEX', "Liste des categories");
    define('TITRE_CATEGORIES_ADDFORM', "Ajout d'une catégories");
    define('TITRE_CATEGORIES_EDITFORM', "Modification d'une catégories");
