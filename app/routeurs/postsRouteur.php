<?php
/*
  ./app/routeurs/postsRouteur.php
  ROUTEUR DES POSTS
 */
use \App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';


 switch ($_GET['posts']):
   case 'show':
     // DETAIL D'UN POST
     // PATTERN: /posts/id
     // CTRL: postsControleur
     // ACTION: show
    PostsControleur\showAction($connexion, $_GET['id']);
    break;

    case 'search':
      // RECHERCHE D'UN POST
      // PATTERN: /posts/search
      // CTRL: postsControleur
      // ACTION: search
     PostsControleur\searchAction($connexion, $_POST['search']);
   break;
 endswitch;
