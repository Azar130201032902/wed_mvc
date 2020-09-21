<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
 */

 // ROUTE DES USERS
    if(isset($_GET['users'])):
      include_once '../app/routeurs/usersRouteur.php';

 // ROUTE PAR DEFAUT
    else:
      include_once '../app/controleurs/usersControleur.php';
      \App\Controleurs\UsersControleur\dashboardAction($connexion);
    endif;
