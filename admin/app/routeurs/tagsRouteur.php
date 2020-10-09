<?php
/*
  ./app/routeurs/tagsRouteur.php
    ROUTEUR DES TAGS
 */
use \App\Controleurs\TagsControleur;
include_once '../app/controleurs/tagsControleur.php';


 switch ($_GET['tags']):
   case 'index':
     // LISTE DES TAGS
     // PATTERN: index.php?tags=index
     // CTRL: tagsControleur
     // ACTION: indexAction
    TagsControleur\indexAction($connexion);
    break;

    case 'addForm':
      // AJOUT TAGS: FORMULAIRE
      // PATTERN: index.php?tags=addForm
      // CTRL: tagsControleur
      // ACTION: addForm
     TagsControleur\addFormAction($connexion);
     break;

     case 'add':
       // AJOUT TAGS: INSERT
       // PATTERN: index.php?tags=add
       // CTRL: tagsControleur
       // ACTION: add
      TagsControleur\addAction($connexion, [
        'name' => $_POST['name']
      ]);
      break;

      case 'delete':
        // SUPPRESSION TAG
        // PATTERN: index.php?tags=delete&id=x
        // CTRL: tagsControleur
        // ACTION: delete
       TagsControleur\deleteAction($connexion, $_GET['id']);
       break;

       case 'editForm':
         // MODIFICATION TAG: FORMUALIRE
         // PATTERN: index.php?tags=editForm&id=x
         // CTRL: tagsControleur
         // ACTION: editForm
        TagsControleur\editFormAction($connexion, $_GET['id']);
        break;

        case 'edit':
          // MODIFICATION TAG: UPDATE
          // PATTERN: index.php?tags=edit&id=x
          // CTRL: tagsControleur
          // ACTION: edit
         TagsControleur\editAction($connexion, [
           'id' => $_GET['id'],
           'name' => $_POST['name']
         ]);
         break;

 endswitch;
