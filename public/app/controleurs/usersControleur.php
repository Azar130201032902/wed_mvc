<?php
/*
  ./app/controleurs/usersControleur.php
  CONTROLEUR DES USERS
 */
namespace App\Controleurs\UsersControleur;
use App\Modeles\UsersModele;

  function loginFormAction(\PDO $connexion) {
    // Je charge la vue index directement dans $content
      GLOBAL $content, $title;
      $title = TITRE_USERS_LOGINFORM;
      ob_start();
        include_once '../app/vues/users/loginForm.php';
      $content = ob_get_clean();
  }

  function loginAction (\PDO $connexion, array $data = null) {
    // Je demande le user qui correspond au pseudo/password
      include_once '../app/modeles/usersModele.php';
      $user = UsersModele\findOneByLoginPwd($connexion, $data);
    // Je redirige vers le backoffice si OK
    // Et vers le formulaire de connexion sinon
    GLOBAL $title;
    if($user):
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/admin/www/');
    else:
      header('location: http://localhost:8888/SCRIPT_SERVEUR/wed_mvc/public/www/users/login/form');
    endif;
  }
