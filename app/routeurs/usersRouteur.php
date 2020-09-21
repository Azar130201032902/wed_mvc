<?php
/*
  ./app/routeurs/usersRouteur.php
  ROUTEUR DES USERS
 */
use \App\Controleurs\UsersControleur;
include_once '../app/controleurs/usersControleur.php';


 switch ($_GET['users']):
   case 'loginForm':
     // FORMULAIRE DE LOGIN
     // PATTERN: users/login/form
     // CTRL: usersControleur
     // ACTION: loginForm
    UsersControleur\loginFormAction($connexion);
    break;

    case 'submit':
      // CONNEXION
      // PATTERN: users/login/submit
      // CTRL: usersControleur
      // ACTION: loginForm
     UsersControleur\loginAction($connexion, [
       'login' => $_POST['pseudo'],
       'password' => $_POST['password']
     ]);
     break;

 endswitch;
