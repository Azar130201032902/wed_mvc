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

    // CATEGORIES
    define('TITRE_CATEGORIES_INDEX', "Liste des categories");
    define('TITRE_CATEGORIES_ADDFORM', "Ajout d'une catégorie");
    define('TITRE_CATEGORIES_EDITFORM', "Modification d'une catégorie");

    // POSTS
    define('TITRE_POSTS_INDEX', "Liste des posts");
    define('TITRE_POSTS_ADDFORM', "Ajout d'un post");

    // TAGS
    define('TITRE_TAGS_INDEX', "Liste des tags");
    define('TITRE_TAGS_ADDFORM', "Ajout d'un tag");
    define('TITRE_TAGS_EDITFORM', "Modification d'un tag");
