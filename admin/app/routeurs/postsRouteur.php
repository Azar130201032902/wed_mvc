<?php
/*
  ./app/routeurs/postsRouteur.php
  ROUTEUR DES POSTS
 */
use \App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';


 switch ($_GET['posts']):
   case 'addForm':
   // AJOUT D'UN POSTS: FORMUALAIRE
   // PATTERN: index.php?posts=addForm
   // CTRL: postsControleur
   // ACTION: addForm
   PostsControleur\addFormAction($connexion);
   break;
   
   case 'insert':
     // AJOUT D'UN POSTS: INSERT
     // PATTERN: index.php?posts=insert
     // CTRL: postsControleur
     // ACTION: insert
        PostsControleur\insertAction($connexion);
   break;


   case 'delete':
     // SUPPRESSION POST
     // PATTERN: index.php?posts=delete&id=x
     // CTRL: postsControleur
     // ACTION: delete
    PostsControleur\deleteAction($connexion, $_GET['id']);
    break;

    case 'editForm':
      // MODIFICATION POST: FORMUALIRE
      // PATTERN: index.php?posts=editForm&id=x
      // CTRL: postsControleur
      // ACTION: editForm
     PostsControleur\editFormAction($connexion, $_GET['id']);
     break;

     case 'edit':
       // MODIFICATION POST: UPDATE
       // PATTERN: index.php?posts=edit&id=x
       // CTRL: PostsControleur
       // ACTION: edit
      PostsControleur\editAction($connexion, [
        'id' => $_GET['id'],
        'title' => $_POST['title'],
        'content' => $_POST['content']
      ]);
      break;

   default:
   // LISTE DES POSTS
   // PATTERN: index.php?posts
   // CTRL: postsControleur
   // ACTION: index
      PostsControleur\indexAction($connexion);
   break;
 endswitch;
