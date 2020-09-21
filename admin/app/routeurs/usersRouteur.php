<?php
/*
  ./app/routeurs/usersRouteur.php
  ROUTEUR DES USERS
 */
use \App\Controleurs\UsersControleur;
include_once '../app/controleurs/usersControleur.php';


 switch ($_GET['users']):
   case 'logout':
     // LOGOUT
     // PATTERN: users/logout
     // CTRL: usersControleur
     // ACTION: loginForm
    UsersControleur\logout();
    break;

 endswitch;
