<?php
/*
  ./app/routeurs/authorsRouteur.php
    ROUTEUR DES AUTHORS
 */
use \App\Controleurs\AuthorsControleur;
include_once '../app/controleurs/authorsControleur.php';


 switch ($_GET['authors']):
   case 'index':
     // LISTE DES AUTHORS
     // PATTERN: index.php?authors=index
     // CTRL: authorsControleur
     // ACTION: indexAction
    AuthorsControleur\indexAction($connexion);
    break;

    case 'addForm':
      // AJOUT AUTHORS: FORMULAIRE
      // PATTERN: index.php?authors=addForm
      // CTRL: authorsControleur
      // ACTION: addForm
     AuthorsControleur\addFormAction($connexion);
     break;

     case 'add':
       // AJOUT AUTHORS: INSERT
       // PATTERN: index.php?authors=add
       // CTRL: authorsControleur
       // ACTION: add
      AuthorsControleur\addAction($connexion, [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'biography' => $_POST['biography']
      ]);
      break;

      case 'delete':
        // SUPPRESSION AUHTOR
        // PATTERN: index.php?authors=delete&id=x
        // CTRL: authorsControleur
        // ACTION: delete
       AuthorsControleur\deleteAction($connexion, $_GET['id']);
       break;

       case 'editForm':
         // MODIFICATION AUHTOR: FORMUALIRE
         // PATTERN: index.php?authors=editForm&id=x
         // CTRL: authorsControleur
         // ACTION: editForm
        AuthorsControleur\editFormAction($connexion, $_GET['id']);
        break;

        case 'edit':
          // MODIFICATION AUTHOR: UPDATE
          // PATTERN: index.php?authors=edit&id=x
          // CTRL: authorsControleur
          // ACTION: edit
         AuthorsControleur\editAction($connexion, [
           'id' => $_GET['id'],
           'firstname' => $_POST['firstname'],
           'lastname' => $_POST['lastname'],
           'biography' => $_POST['biography']
         ]);
         break;

 endswitch;
