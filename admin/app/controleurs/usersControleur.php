<?php
/*
  ./app/controleurs/usersControleur.php
  CONTROLEUR DES USERS
 */
namespace App\Controleurs\UsersControleur;
use App\Modeles\UsersModele;

  function dashboardAction(\PDO $connexion) {
    // Je charge la vue index directement dans $content
      GLOBAL $content, $title;
      $title = TITRE_USERS_DASHBOARD;
      ob_start();
        include_once '../app/vues/users/dashboard.php';
      $content = ob_get_clean();
  }
