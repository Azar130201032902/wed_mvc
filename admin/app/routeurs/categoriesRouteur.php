<?php
/*
  ./app/routeurs/categoriesRouteur.php
    ROUTEUR DES CATEGORIES
 */
use \App\Controleurs\CategoriesControleur;
include_once '../app/controleurs/categoriesControleur.php';


 switch ($_GET['categories']):
   case 'index':
     // LISTE DES CATEGORIES
     // PATTERN: index.php?categories=index
     // CTRL: categoriesControleur
     // ACTION: indexAction
    CategoriesControleur\indexAction($connexion);
    break;

    case 'addForm':
      // AJOUT CATEGORIES: FORMULAIRE
      // PATTERN: index.php?categories=addForm
      // CTRL: categoriesControleur
      // ACTION: addForm
     CategoriesControleur\addFormAction($connexion);
     break;

     case 'add':
       // AJOUT CATEGORIES: INSERT
       // PATTERN: index.php?categories=add
       // CTRL: categoriesControleur
       // ACTION: add
      CategoriesControleur\addAction($connexion, [
        'name' => $_POST['name']
      ]);
      break;

      case 'delete':
        // SUPPRESSION CATEGORIE
        // PATTERN: index.php?categories=delete$id=x
        // CTRL: categoriesControleur
        // ACTION: delete
       CategoriesControleur\deleteAction($connexion, $_GET['id']);
       break;

       case 'editForm':
         // MODIFICATION CATEGORIE: FORMUALIRE
         // PATTERN: index.php?categories=editForm&id=x
         // CTRL: categoriesControleur
         // ACTION: editForm
        CategoriesControleur\editFormAction($connexion, $_GET['id']);
        break;

        case 'edit':
          // MODIFICATION CATEGORIE: UPDATE
          // PATTERN: index.php?categories=edit&id=x
          // CTRL: categoriesControleur
          // ACTION: edit
         CategoriesControleur\editAction($connexion, [
           'id' => $_GET['id'],
           'name' => $_POST['name']
         ]);
         break;

 endswitch;
