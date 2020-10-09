<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
 */

 // ROUTE DES AUHTORS
    if(isset($_GET['authors'])):
      include_once '../app/routeurs/authorsRouteur.php';

 // ROUTE DES TAGS
    elseif(isset($_GET['tags'])):
      include_once '../app/routeurs/tagsRouteur.php';

 // ROUTE DES POSTS
    elseif(isset($_GET['posts'])):
      include_once '../app/routeurs/postsRouteur.php';

 // ROUTE DES CATEGORIES
    elseif(isset($_GET['categories'])):
      include_once '../app/routeurs/categoriesRouteur.php';

 // ROUTE DES USERS
    elseif(isset($_GET['users'])):
      include_once '../app/routeurs/usersRouteur.php';

 // ROUTE PAR DEFAUT
    else:
      include_once '../app/controleurs/usersControleur.php';
      \App\Controleurs\UsersControleur\dashboardAction($connexion);

    endif;
