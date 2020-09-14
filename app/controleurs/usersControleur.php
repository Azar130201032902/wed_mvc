<?php
/*
  ./app/controleurs/usersControleur.php
  CONTROLEUR DES USERS
 */
namespace App\Controleurs\UsersControleur;

  function loginFormAction(\PDO $connexion) {
    // Je charge la vue index directement dans $content
      GLOBAL $content, $title;
      $title = TITRE_USERS_LOGINFORM;
      ob_start();
        include_once '../app/vues/users/loginForm.php';
      $content = ob_get_clean();
  }
