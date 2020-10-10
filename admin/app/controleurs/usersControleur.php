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

  function logout() {
    // Je tue la variable de session 'user'
      unset($_SESSION['user']);
    // et je redirige vers le site public
      header('location: ' . BASE_URL_PUBLIC);
  }
