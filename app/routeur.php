<?php
/*
  ./app/routeur.php
  ROUTEUR PRINCIPAL DE L'APPLICATION
 */


  // ROUTEUR DES USERS
  if(isset($_GET['users'])):
    include_once '../app/routeurs/usersRouteur.php';

 // PAGE CONTACT
 // PATTERN: /contact
 // CTRL: -
 // ACTION: -
  elseif(isset($_GET['contact'])):
    $title = TITRE_PAGE_CONTACT;
    ob_start();
      include_once '../app/vues/template/partials/contact.php';
    $content = ob_get_clean();

  // ROUTEUR DES POSTS
  elseif(isset($_GET['posts'])):
    include_once '../app/routeurs/postsRouteur.php';

 // ROUTE PAR DEFAUT
 // PATTERN: /
 // CTRL: postsControleur
 // ACTION: index
  else:
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\indexAction($connexion);
  endif;
