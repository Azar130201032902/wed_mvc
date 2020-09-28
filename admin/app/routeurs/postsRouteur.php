<?php
/*
  ./app/routeurs/postsRouteur.php
  ROUTEUR DES POSTS
 */
use \App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';


 switch ($_GET['posts']):
   default:
   // LISTE DES POSTS
   // PATTERN: index.php?users
   // CTRL: postsControleur
   // ACTION: index
      PostsControleur\indexAction($connexion);
   break;
 endswitch;
